<?php
namespace Greg;
/**
 * @Table("personnages")
 */
/**
 * @Type({'brute', 'guerrier', 'magicien'})
 */
class Personnage
{
    private $id;
    private $degats;
    private $nom;

    const CEST_MOI = 1;
    const PERSONNAGE_TUE = 2;
    const PERSONNAGE_FRAPPE = 3;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
    public function hydrate(array $tab)
    {
        foreach ($tab as $key=>$val)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($val);
            }
        }
    }
    public function frapper(Personnage $perso)
    {
        // Avant tout : vérifier qu'on ne se frappe pas soi-même.
        if ($perso->id == $this->id) {
            return self::CEST_MOI;
        }
        // Si c'est le cas, on stoppe tout en renvoyant une valeur signifiant que le personnage ciblé est le personnage qui attaque.
        // On indique au personnage frappé qu'il doit recevoir des dégâts.
        return $perso->recevoirDegats();
    }
    public function recevoirDegats()
    {
        // On augmente de 5 les dégâts.
        $this->setDegats($this->degats() + 5);
        // Si on a 100 de dégâts ou plus, la méthode renverra une valeur signifiant que le personnage a été tué.
        if ($this->degats() >= 100)
        {
            return self::PERSONNAGE_TUE;
        }
        else
        {
            $this->degats();
            return self::PERSONNAGE_FRAPPE;
        }
        // Sinon, elle renverra une valeur signifiant que le personnage a bien été frappé.
    }
    public function degats()
    {
        return $this->degats;
    }

    public function id()
    {
        return $this->id;
    }

    public function nom()
    {
        return $this->nom;
    }

    public function setDegats($degats)
    {
        $degats = (int) $degats;

        if ($degats >= 0 && $degats <= 100)
        {
            $this->degats = $degats;
        }
    }

    public function setId($id)
    {
        $id = (int) $id;

        if ($id > 0)
        {
            $this->id = $id;
        }
    }

    public function setNom($nom)
    {
        if (is_string($nom))
        {
            $this->nom = $nom;
        }
    }
    public function nomValide()
    {
        return !empty($this->nom);
    }
}
