<?php

//Magic Methods

/*
__construct() \\script jokhon load hoi tokhon first a construct method load hoi 
__destruct() \\script jokhon shes  hoi tokhon last  a destruct method load hoi 
__get($property)
__set($property,$value)
__call($method,$arg_array)



ei magic method gulu invisibaly kaj kore 


*/



class student{
    
    public $name;
    public function describe(){
        echo "I am a student.<br>";
    }
    public function __get($pm){  //undefined property
        echo "$pm does not exist<br>";
    }
    public function __set($pm,$value){//undefined property and value
        echo "we set $pm=$value<br>";
    }
    public function __call($pm,$value){//undefined method 
        echo 'there is no<b>'.$pm. '</b>method and arguments: '.implode(', ', $value);
    }
}



$st=new student();
$st->describe();

$st->Hasan;
$st->age=15;
$st->notExistMethod('2','8','5');

?>