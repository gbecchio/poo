<?php
error_reporting(-1);
ini_set('error_reporting', -1);
class TstException extends Exception
{
    function __construct()
    {
        throw new Exception('Les deux paramètres doivent être des nombres');
    }
}
function additionner($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b))
    {
        // On lance une nouvelle exception grâce à throw et on instancie directement un objet de la classe Exception.
        throw new InvalidArgumentException('Les deux paramètres doivent être des nombres');
    }
    return $a + $b;
}

echo "<pre>";
echo additionner(12, 3), '<br />';
try
{
    echo additionner('azerty', 54), '<br />';
}
catch (InvalidArgumentException $iae)
{
    echo "[[code]] =>".$iae->getCode()." ";
    echo " [[iae Message]]=>".$iae->getMessage()."\n";
}
catch (Exception $e)
{
    echo "[[code]] =>".$e->getCode()." ";
    echo " [[Message]]=>".$e->getMessage()."\n";
}
finally
{
    echo "finnaly";
}
echo additionner(4, 8);
try
{
    $tstE = new TstException();
}
catch(Excpetion $e)
{
    echo $e;
}
echo "</ pre>";