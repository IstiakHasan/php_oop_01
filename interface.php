<?php
interface school{  //interface keyword use korechi jar method gulur kono body part nei 
    public function mySchool();
        
    }
interface collage{
    public function mycollage();
        
    }
interface varsity{
    public function myvarsity();
        
    }


class Teacher implements school,collage,varsity{ //implements keyword diye interface class er methode gulu override korte hoi 
    
    
    public function __construct(){  //__construct()  auto lode kore 
        $this->mySchool();
        $this->mycollage();
        $this->myvarsity();
    }
    
    public function mySchool(){
        echo "I am a school teacher.<br>";
    }
      public function mycollage(){
        echo "I am a collage teacher.<br>";
    }
      public function myvarsity(){
        echo "I am a varsity teacher";
    }
}
class student implements school,collage,varsity{ //implements keyword diye interface class er methode gulu override korte hoi 
    
    
    public function __construct(){  //__construct()  auto lode kore 
        $this->mySchool();
        $this->mycollage();
        $this->myvarsity();
    }
    
    public function mySchool(){
        echo "I am a school student.<br>";
    }
      public function mycollage(){
        echo "I am a collage student.<br>";
    }
      public function myvarsity(){
        echo "I am a varsity student";
    }
}



$teacher=new Teacher();
echo "<br>";
$student=new student;


?>