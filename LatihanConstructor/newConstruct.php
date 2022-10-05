<?php
class newConstruct{

    public $name, $level;

    public function __construct($name,$level)
    {
        $this->name = $name;
        $this->level = $level;
    }
}

$obj = new newConstruct("Robin Pukimai", "Newbie");

echo "Enemy: " . $obj->name . '<br>';
echo "Level: " . $obj->level  ;
/* Output
Enemy: Robin Pukimai
Level: Newbie
 */