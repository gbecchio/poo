<?php
namespace Greg;

class Magicien extends Personnage implements IMagicien, IMoi
{
    private $magie = 0;
    private $nom;
    private $type;
    private $id;
    private $degats;

    function __construct(array $donnees)
    {
        parent::__construct($donnees);
    }

    public function envoiSort($type)
    {
        return $type;
    }

    public function recharge($niveau)
    {
        return $niveau;
    }

    public function getNom()
    {
        return "nom";
    }

    public function getPrenom()
    {
        return "prenom";
    }
}
