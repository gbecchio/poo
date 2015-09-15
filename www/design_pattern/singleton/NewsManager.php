<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class NewsManager
{
    public function get($id)
    {
        // On admet que MyPDO étend PDO et qu'il implémente un singleton.
        $idInt = (int) $id;
        $query = <<<EOT
SELECT
    id,
    auteur,
    titre,
    contenu
FROM
    news
WHERE id = {$idInt}
EOT;


        try
        {
            $pdo = MyPDO::init();
            $pdo->setDao();
            $dao = $pdo->getDao();
            $q = $dao->query($query);
            var_dump($q);
            return $q->fetch(PDO::FETCH_ASSOC);
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }
}