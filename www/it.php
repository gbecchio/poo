<?php
class myIterator implements Iterator {
    private $position = 0;
    private $array = array(
        "premierelement",
        "secondelement",
        "dernierelement",
    );  

    public function __construct() {
        $this->position = 0;
    }

    function rewind() {
        var_dump(__METHOD__.'\n');
        $this->position = 0;
    }

    function current() {
        var_dump(__METHOD__.'\n');
        return $this->array[$this->position];
    }

    function key() {
        var_dump(__METHOD__.'\n');
        return $this->position;
    }

    function next() {
        var_dump(__METHOD__.'\n');
        ++$this->position;
    }

    function valid() {
        var_dump(__METHOD__.'\n');
        return isset($this->array[$this->position]);
    }
}

$it = new myIterator;
echo "<pre>";
foreach($it as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}
echo "</ pre>";