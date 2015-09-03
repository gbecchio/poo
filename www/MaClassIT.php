<?php
class MaClasseIT implements Iterator, SeekableIterator
{
    private $position = 0;
    private $tableau = ['Premier élément', 'Deuxième élément', 'Troisième élément', 'Quatrième élément', 'Cinquième élément'];

    /**
    * Retourne l'élément courant du tableau.
    */
    public function current()
    {
        return $this->tableau[$this->position];
    }

    /**
    * Retourne la clé actuelle (c'est la même que la position dans notre cas).
    */
    public function key()
    {
        return $this->position;
    }

    /**
    * Déplace le curseur vers l'élément suivant.
    */
    public function next()
    {
        $this->position++;
    }

    /**
    * Remet la position du curseur à 0.
    */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
    * Permet de tester si la position actuelle est valide.
    */
    public function valid($position = null)
    {
        if (!empty($position))
        {
            return isset($this->tableau[$position]);
        }
        return isset($this->tableau[$this->position]);
    }

    /**
    * Permet de placer le curseur à la position 
    * indiquée si la position est valide.
    */
    public function seek($position)
    {
        if ($this->valid($position))
        {
            return $this->position = $position;
        }
        return false;
    }
}

$objet = new MaClasseIT;

foreach ($objet as $key => $value)
{
  echo $key, ' => ', $value, '<br />';
}

$it = new MaClasseIT;;
echo "<pre>";
foreach($it as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}
$it->rewind();
var_dump($it->seek(2));
var_dump($it->current());
echo "</ pre>";