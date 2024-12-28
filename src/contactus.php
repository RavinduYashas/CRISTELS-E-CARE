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
				 
				<a href="loging1.html"><button class="btn">login</button></a> 
			</div>

		</div>

	</div>

	<br><br><br><br>
	
	<div class="row">
             <fieldset>
                <legend class="topic">Contact Us</legend>
                    <div class="column">
                        <img src="images/email.png" width="30" height="30">
                        <h2>Location</h2>
                        <p>E-Care International<br>
                            Al Nasr Commercial Building,<br> 
                            3rd Floor, Office No. 310, Oud Metha,<br>
                            P.O.Box: 52001, Dubai, UAE.<br></p>
                    </div>
                    
                    <div class="column">
                        <img src="images/phone.png" width="30" height="30">
                        <h2>Hotline</h2>
                        <p>
                            Helpline: 600532273<br>
                            Office :  +971-4-3811500<br>
                            Fax :  +971-4-3705700<br></p>
                    </div>
                    
                    <div class="column">
                        <img src="images/email.png" width="30" height="30">
                        <h2>Email</h2>
                        <p>ecareinternational@gmail.com</p>
                    </div>
            </fieldset>

        </div>

        <div class="formmap">
            <div class="contactFrom" id=confrom>
                <fieldset>
                    <legend class="topic" >Contact From</legend>
                        <form method="post" action="insert.php">
                            ID :
                            <input type="text" class="tInput" name="id" placeholder="XXXXXXXXXXX" disabled> <br/><br/>
                            Name :
                            <input type="text" class="tInput" name="Name" placeholder="Name" required> <br/><br/>
                            Age : 
                            <input type="text" class="tInput" name="age" placeholder="Age" required> <br/><br/>
                            Gender : 
                            <input type="radio" value="male" name="Gender">Male 
                            <input type="radio" value="female" name="Gender">Female<br/><br/>
                            e-mail : 
                            <input type="email" class="tInput" name="email" placeholder="abcd@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br/><br/>
                            Contact No : 
                            <input type="phone" class="tInput" name="mobile" placeholder="0770000000" pattern="[0-9]{10}" required><br/><br/>
                            Need : 
                            <input type="text" class="tInput" name="need" placeholder="Example text" required><br/><br/>

                            <input type="checkbox" id="privacyCheckbox" onchange="enableButton()"><label>Recheck and Submit</label><br/><br/>
                            
                            <input type="submit" value="Submit" id="submitBtn" disabled> 
                            <button type="reset" id="rsetBtn">Reset</button>   
                        </form>        
                </fieldset>               
            </div>
            <img class="map" src="images/Googlemap-600x551-1.jpg" style="float: right;" width="600" height="600">
        </div>
   
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