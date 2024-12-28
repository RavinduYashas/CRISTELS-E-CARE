<?php

    require 'config.php';
  
    $ID=$_POST["id"];
    $name=$_POST["Name"];
    $age=$_POST["age"];
    $gender=$_POST["Gender"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $need=$_POST["need"];

    $sql="INSERT INTO contact_us VALUES ('$ID','$name','$age','$gender','$email','$mobile','$need')";
         
    if($con->query($sql)){
        header('location:contactus.php');
        
    }else{
        echo"Error".$con->error;
    }

    $con->close();

?>

