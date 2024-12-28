<?php 

$con=new mysqli("localhost","root","","cristels_e_care");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}
//else{echo"sucessful";}

?>