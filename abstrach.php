<?php

abstract class student{ //abstrach class
    
    
    
    public $name;
    public $age;
    
    
    public function details(){
        echo $this->name."is".$this->age."years old <br>";
    }
     abstract public function school();//abstrach method 
        
    
}


class boy extends student{
    public function describe(){
        return parent::details()."And I am a high school student.<br>";//call the abstrach class
    }
    
    public function school(){
        return "I like to read story book";
    }
}

$boy=new boy;

$boy->name="Abdullah";
$boy->age="30";
echo $boy->describe();//return k echo korte hoi 
echo $boy->school();

?>