<?php

class ConstructorVersiBaru
{
    public function __construct(public $title, public $level)
    {

    }
}

$obj = new ConstructorVersiBaru(title: "constructor baru", level: "ez");

echo $obj->title . "<br>";
echo $obj->level;
/* Output
constructor baru
ez
 */