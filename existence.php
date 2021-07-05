<?php


class student{
    public function describe(){
        echo "student class exist ";
    }
}



if(class_exists('student')){
    
   $st=new student();
    if(method_exists($st,'describe')){
        $st->describe();
    }else{
        echo "method not found";
    }

 
}else{
    echo "class not exist";
}



?>