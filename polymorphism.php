<?php


//Polymorphism
//When we start to extend classes, and add functinality to them which wasn't there previously, and even override exiting methods (functions), this is called polymorphism.
//The basis of polymorphism is Inheritance and overridden methods.

 class UserData{   
    public $user;
    public $userId;
    
    
    public function __construct($userName,$userId){
        
        $this->user=$userName;
        $this->userId=$userId;
        
    }
    public function display(){   
        echo "Username is{$this->user} and user id is{$this->userId}";
    }
}

class Admin extends UserData{
    public $level="Administrator";
    public function display(){
        echo "Username is {$this->user} and userid is {$this->userId} and user level is {$this->level}";
    }
}
$user="Mamun";
$id="25";
$ur=new UserData($user,$id);
echo "<br>";
$ur->display();
    echo "<br>";

$admin=new Admin("Admin","01");

$admin->display();
echo "<br>";
if($admin instanceof UserData){
    echo "Inherited";
}else{
    echo "not inherited";
}


?>