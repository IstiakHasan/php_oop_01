<?php

include('function.php');
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    
    <style>
    
    
        body{
            background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
           
        }
       
    
    </style>
    
    
</head>
<body>
   
   
   
   
   <form action="" method="post" class="form_p">
       <table>
           <tr>
               <td>Enter the first number</td>
               <td><input type="number" name="num1"></td>
           </tr>
            <tr>
               <td>Enter the second number</td>
               <td><input type="number" name="num2"></td>
           </tr>
            <tr>
               <td></td>
               <td><input type="submit" name="submit" value="Calculate"></td>
           </tr>
           
       </table>
       
       
       
       
   </form>
   
   <?php


if(isset($_POST['submit'])){
    $numone=$_POST['num1'];
    $numtwo=$_POST['num2'];
    
    if(empty($numone) or empty($numtwo)){
        echo "<span style='color:#EE6554'>Filed must not be empty</span>";
    }else{
        $calculation=new calculatior;
        $calculation->add($numone,$numtwo);
        $calculation->sub($numone,$numtwo);
        $calculation->mul($numone,$numtwo);
        $calculation->divi($numone,$numtwo);
        
    }
    
    
    
}




?>
    
</body>
</html>