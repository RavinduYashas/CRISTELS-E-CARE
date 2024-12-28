

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				 
				<a href="loging1.html"><button class="btn">login</button></a> 
			</div>

		</div>

	</div>

	<br><br><br><br>

    <div class="contactFrom">
        <fieldset>
            <legend><b>Support Desk</b></legend>
            <form method="post" action="./e-delete.php">
                <form>
                    Name : <input type="text" placeholder="Enter Your User name" class="tInput" name="name"><br><br>
                    <label for="gender">Gender : </label> <br>
                    <input type="radio"   name="gender">Male
                    <input type="radio"   name="gender"> Female<br><br>
                    Email : <input type="email" placeholder="Enter Your Email" class="tInput" name="email"><br><br>
                    Contact_Number : <input type="text" placeholder="Enter Your Contact Number" class="tInput" name="cno"><br><br>
                    Type Of Inquiry : 
                    <select name="inquiry">
                    <option>Appointment Scheduling</option>
                    <option>Medical Records Inquiries</option>
                    <option>Prescription and Medication Inquiries</option>
                    <option>General Health Inquiries</option>
                    </select><br><br>
                    Message: <br><textarea name="message" class="tInput"> </textarea><br><br>
                    <input type ="Submit" id="submitBtn"> <input type="Submit" value="Edit Inquiry" class="updbtn" >
                </form>
        </fieldset>
    </div>
    
	<hr class="hr1">
	<br><br>
	




	
	<br><br>
	 
    <br><br><br><br>
	<br> 
	
				
	
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