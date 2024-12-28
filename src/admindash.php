<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRISTELS E-CARE</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/admin.css">
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
				 
				<a href="loging1.html"><button class="btn">login</button></a> 
			</div>

		</div>

	</div>

	<br><br>
    
    <hr class="hr1">
        <div class="adminnav" style="background-color: #333; padding:15px">
            <ul>
				<li class="menu"><a href="admindash.php">ContactUs</a></li>
				<li class="menu"><a href="#">EChanneling</a></li>
				<li class="menu"><a href="#">OnlinePharmacy</a></li>
				<li class="menu"><a href="#">SupportDesk</a></li>
				<li class="menu"><a href="#">UserAccounts</a></li>
                <li class="menu"><a href="#">DoctorAccounts</a></li>
			</ul>
        </div>
                

    <hr class="hr1">

    <h1>Contact US Details</h1>

<center>
    <div class="containerA">
        <button class="addbtn"> <a href="contactus.php"> Add user </a> <button>
        
        <table >
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Need</th>
                <th>Action</th>
            </tr>

            <?php
                //read all from database
                $sql="SELECT * FROM contact_us";
                $result=$con->query($sql);

                //read each row
                if($result->num_rows>0){   
                    while($row=$result->fetch_assoc())
                    {
                        $id=$row["ID"];
                        echo "<tr>";
                        echo"<td>".$row["ID"]."</td>
                            <td>".$row["Name"]."</td>
                            <td>".$row["Age"]."</td>
                            <td>".$row["Gender"]."</td>
                            <td>".$row["Email"]."</td>
                            <td>".$row["Contact No"]."</td>
                            <td>".$row["Need"]."</td>
                            <td>
                            <button class='updbtn'> <a href='update.php?updateid=".$id."'> Update </a> </button>
                            <button class='delebtn'> <a href='delete.php?deleteid=".$id."'> Delete</a> </button>
                            </td>
                            </tr>";
                    }
                }else{
                    echo"No Results";
                }
                    
        ?>
            
        </table>
    </div>   

</center>

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
				<a class="fot" href="p$p.html">Terms&Conditions</a>
				<a class="fot" href="termandcon.html">Privacy&Policy</a>    
				
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