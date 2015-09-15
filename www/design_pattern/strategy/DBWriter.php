<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class DBWriter extends Writer
{
    protected $db;

    public function __construct(Formater $formater, PDO $db)
    {
        parent::__construct($formater);
        $this->db = $db;
    }

    public function write ($text)
    {
        $q = $this->db->prepare('INSERT INTO lorem_ipsum SET text = :text');
        $q->bindValue(':text', $this->formater->format($text));
        $q->execute();
    }
}