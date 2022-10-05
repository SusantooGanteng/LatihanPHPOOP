<?php

trait ServiceGreeting{
    public $name = "SERVICEGREETING";

    public function sayHelo($name){
        return $this->name = $name;
    }
}