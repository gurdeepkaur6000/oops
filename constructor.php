<?php
class parentone
{
    public $color;
    public $size;

    public function __construct($color,$size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function abc()
    {
        echo "hello";
    }

    public function efg()
    {
        echo $this->color; echo "&nbsp;";
        echo $this->size;
    }

    public function __destruct()
    {
        echo $this->color; echo "&nbsp;***&nbsp;";
        echo $this->size;
    }
}

$objparent = new parentone('red','big');
$objparent->abc();
$objparent->efg();

#result : hellored bigred *** big
?>