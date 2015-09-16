<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class TaskRunner
{
    protected $tasks;

    public function __construct()
    {
        // On initialise la liste des tâches
        $this->tasks = new SplQueue;
    }

    public function addTask(Generator $task)
    {
        // On ajoute la tâche à la fin de la liste
        $this->tasks->enqueue($task);
    }

    public function run()
    {
        $i = 1;

        // Tant qu’il y a toujours au moins une tâche à exécuter
        while (!$this->tasks->isEmpty())
        {
            // On enlève la première tâche et on la récupère au passage
            $task = $this->tasks->dequeue();

            // Pour l'exemple, on va arrêter la tâche n°2 lors de son 2ème appel
            if ($i == 5)
            {
                $task->throw(new Exception('Tâche interrompue'));
            }

            // Pour l'exemple, on va arrêter la tâche n°2 lors de son 2ème appel
            if ($i == 1)
            {
                $task->throw(new Exception('Stop la violence'));
            }
            // On exécute la prochaine étape de la tâche
            $task->send('Hello world !');

            // Si la tâche n’est pas finie, on la replace en fin de liste
            if ($task->valid())
            {
                $this->addTask($task);
            }

            $i++;
        }
    }
}

$taskRunner = new TaskRunner;

function task1()
{
    for ($i = 1; $i <= 2; $i++)
    {
        try {
            $data = yield;
            echo 'Tâche 1, itération ', $i, ', valeur envoyée : ', $data, '<br />';
        } catch(Exception $e) {
            echo 'Erreur tâche 1 : ', $e->getMessage(), '<br />';
            return;
        }
    }
}

function task2()
{
    for ($i = 1; $i <= 6; $i++)
    {
        try {
            $data = yield;
            echo 'Tâche 2, itération ', $i, ', valeur envoyée : ', $data, '<br />';
        } catch(Exception $e) {
            echo 'Erreur tâche 2 : ', $e->getMessage(), '<br />';
            return;
        }
    }
}

function task3()
{
    for ($i = 1; $i <= 4; $i++)
    {
        try {
            $data = yield;
            echo 'Tâche 3, itération ', $i, ', valeur envoyée : ', $data, '<br />';
        } catch(Exception $e) {
            echo 'Erreur tâche 3 : ', $e->getMessage(), '<br />';
            return;
        }
    }
}

$taskRunner->addTask(task1());
$taskRunner->addTask(task2());
$taskRunner->addTask(task3());

$taskRunner->run();