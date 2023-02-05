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

class parenttwo
{
    public $color;
    public $size;

    public function __construct($color,$size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function __destruct()
    {
        echo $this->color; echo "&nbsp;***&nbsp;";
        echo $this->size;
    }
}

class childone extends parentone
{
    public function efg()
    {
        echo $this->color; echo "mmmmmmmm";
        echo $this->size;
    }
}

class childtwo extends parentone
{

}

class childthree extends parenttwo
{

}

$objparent = new parentone('red','big');
$objparent->abc();
$objparent->efg();
echo "<br />Child 1<br />";
$objchildone = new childone('red','green');
$objchildone->efg();
echo "<br />Child 2<br />";
$objchildone = new childtwo('red','blue');
$objchildone->efg();
echo "<br />Destructor<br />";
#result : hellored big
#Child 1
#redmmmmmmmmgreen
#Child 2
#red *** greenred blue
#Destructor
#red *** bluered *** big
?>