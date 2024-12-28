<?php

    //read old data
    include 'config.php';
 
    if(isset($_GET['updateid'])){
        $id=$_GET['updateid'];

        $query="SELECT * FROM contact_us WHERE id=$id";
        $result=mysqli_query($con, $query);
        $row=mysqli_fetch_assoc($result);

        $name=$row["Name"];
        $age=$row["Age"];
        $gender=$row["Gender"];
        $email=$row["Email"];
        $mobile=$row["Contact No"];
        $need=$row["Need"];

    }else{
        echo "No record ID provided";
        exit;
    }

    //update data
    if(isset($_POST['submit'])){
       
        $name=$_POST["Name"];
        $age=$_POST["age"];
        $gender=$_POST["Gender"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];
        $need=$_POST["need"];

        //'$ID',
        $sql= "UPDATE contact_us SET Name='$name',Age='$age',Gender='$gender',Email='$email',`Contact NO`='$mobile', Need='$need' WHERE id=$id";
          
        $result=mysqli_query($con,$sql);
            if($result){
                echo "UPDATE DATA successfull";
                header('location:admindash.php');
                exit;
            }else{
                die(mysqli_error($con));
            }

            mysqli_close($con);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRISTELS E-CARE</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/contactus.css">
	<script src="js/myScript.js"></script>
	
</head>
<body>
	<div class="main">
		<div class="navbar">
			<div class="icon">
			
				<img src="images/WhatsApp Image 2024-05-04 at 15.29.39_dec4177b.jpg" width="190" height="130">
			</div>

			<div class="manu">
				<ul>
                    <li class="menu"><a href="index1.html">Home</a></li>
					<li class="menu"><a href="eChannling.html">EChanneling</a></li>
					<li class="menu"><a href="onlinePharmacy.html">OnlinePharmacy</a></li>
					<li class="menu"><a href="supportDesk.php">SupportDesk</a></li>
					<li class="menu"><a href="contactus.php">ContactUs</a></li>
					<li class="menu"><a href="faq.html">FAQ</a></li>
				</ul>
			</div>

			<div class="login">
				 
				<a href="#"><button class="btn">login</button></a> 
			</div>

		</div>

	</div>

	<br><br>
        
        <div class="contactFrom">
            <fieldset>
                <legend class="topic" >Contact From</legend>
                    <form method="post"  >
                        ID :
                        <input type="hidden" class="tInput" name="id" placeholder="id" > <br/><br/>
                        Name :
                        <input type="text" class="tInput" name="Name"  value="<?php echo $name; ?>"  > <br/><br/>
                        Age : 
                        <input type="text" class="tInput" name="age" value="<?php echo $age; ?>"  > <br/><br/>
                        Gender : 
                        <input type="radio" value="male" name="Gender" <?php if($gender=='male') echo 'checked';?>>Male 
                        <input type="radio" value="female" name="Gender" <?php if($gender=='female') echo 'checked';?>>Female<br/><br/>
                        e-mail : 
                        <input type="email" class="tInput" name="email" value="<?php echo $email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"  ><br/><br/>
                        Contact No : 
                        <input type="phone" class="tInput" name="mobile" value="<?php echo $mobile; ?>" pattern="[0-9]{10}"  ><br/><br/>
                        Need : 
                        <input type="text" class="tInput" name="need" value="<?php echo $need; ?>" required><br/><br/>

                        <input type="submit" name='submit' value="update" id="submitBtn"   > 
                        <button type="reset" id="rsetBtn">Reset</button>   
                    </form>        
            </fieldset>               
        </div>

    <hr id="test">
    <br><br>
	
	
	
	<hr class="hr1">
	<br><br><br><br>
	 
    
				
	
    <footer>
		<center>
			<div class="foicon">
				<img src="images/email(1).png" width="30" height="30">
				<img src="images/linkedin.png" width="30" height="30">
				<img src="images/instagram.png" width="30" height="30">
				<img src="images/facebook.png" width="30" height="30">
				<img src="images/youtube.png" width="30" height="30">
			</div>
		
		<br><br>

			<div>

                <a class="fot" href="contactus.php">ContactUs</a>
				<a class="fot" href="termandcon.html">Terms&Conditions</a>
				<a class="fot" href="p&p.html">Privacy&Policy</a>
				
			</div>

		</center>
			<br><br><br>
			
			
		<hr class="hr1">

		<br><br>

		<center>
			<a class="fot" href="#">@2024 Cristels E-care PLC.ALL rights reserved</a>
		</center>
		

	</footer>
</body>
</html>