<?php
    include 'config.php';

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM contact_us WHERE id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Deleted successfull";
            header('location:admindash.php');
        }else{
            die(mysqli_query($con));
        }
    }

?>
