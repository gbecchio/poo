<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class MonException extends Exception
{
    public function __construct($message, $code = 1001)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return $this->message;
    }
}
$me = new MonException('rien de rien', 1001);
function additionner($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b))
    {
        // On lance une nouvelle exception grâce à throw et on instancie directement un objet de la classe Exception.
        throw new MonException('Les deux paramètres doivent être des nombres');
    }
    return $a + $b;
}

echo "<pre>";
var_dump($me);
try
{
    additionner(10, "rien");
}
catch(MonException $e)
{
    echo '[[code]]=>'.$e->getCode(), '[[message mon exception]]=>'.$e->getMessage();
}
catch(Exception $e)
{
    echo '[[code]]=>'.$e->getCode(), '[[message exception]]=>'.$e->getMessage();
}
echo "</ pre>";