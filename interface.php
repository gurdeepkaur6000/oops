<?php

interface abc
{
    public function hello();
}

interface xyz
{
    public function yellow();
}

class efg implements abc 
{
    public function hello()
    {
        echo "kkkkk";
    }
}

class lop implements xyz 
{
    public function yellow()
    {
        echo "qqqqq";
    }
}


class mno implements abc 
{
    public function hello()
    {
        echo "rrrrr";
    }
}

$efgobj = new lop();
$efgobj->yellow();
?>