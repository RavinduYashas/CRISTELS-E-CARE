<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Desk | CRISTELS E-CARE</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/myScript.js"></script>
</head>
<body>

    <header class="main">
        <nav class="navbar">
            <div class="icon">
                <a href="index1.html"><img src="images/cisLogo.png" alt="Cristels E-Care Logo"></a>
            </div>

            <div class="manu">
                <ul>
                    <li class="menu"><a href="index1.html">Home</a></li>
                    <li class="menu"><a href="eChannling.html">E-Channeling</a></li>
                    <li class="menu"><a href="onlinePharmacy.html">Pharmacy</a></li>
                    <li class="menu"><a href="supportDesk.php">Support</a></li>
                    <li class="menu"><a href="contactus.php">Contact</a></li>
                    <li class="menu"><a href="faq.html">FAQ</a></li>
                </ul>
            </div>

            <div class="login">
                <a href="loging1.html"><button class="btn">Login</button></a> 
            </div>
        </nav>
    </header>

    <main class="container">
        <section class="contactFrom">
            <h2>Support Desk Inquiry</h2>
            <p style="text-align: center; color: var(--text-light); margin-bottom: 2rem;">Have a question or need assistance? Our support team is here to help.</p>

            <form method="post" action="./e-delete.php">
                <h3>Personal Details</h3>
                
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>

                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label>Gender</label>
                    <div style="display: flex; gap: 2rem; margin-top: 0.5rem;">
                        <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                            <input type="radio" name="gender" value="male" checked> Male
                        </label>
                        <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                            <input type="radio" name="gender" value="female"> Female
                        </label>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="example@mail.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="cno">Contact Number</label>
                        <input type="text" id="cno" name="cno" placeholder="+94 7X XXX XXXX" required>
                    </div>
                </div>

                <h3>Inquiry Information</h3>
                
                <div class="form-group">
                    <label for="inquiry">Type of Inquiry</label>
                    <select id="inquiry" name="inquiry">
                        <option>Appointment Scheduling</option>
                        <option>Medical Records Inquiries</option>
                        <option>Prescription and Medication Inquiries</option>
                        <option>General Health Inquiries</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Detailed Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="How can we help you today?"></textarea>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 2rem;">
                    <button type="submit" id="submitBtn" style="margin: 0;">Submit Inquiry</button>
                    <button type="submit" value="Edit Inquiry" class="aboutUsbtn" style="background: var(--text-light); padding: 0.5rem;">Edit Previous</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <div class="foicon">
            <img src="images/email(1).png" alt="Email">
            <img src="images/linkedin.png" alt="LinkedIn">
            <img src="images/instagram.png" alt="Instagram">
            <img src="images/facebook.png" alt="Facebook">
            <img src="images/youtube.png" alt="YouTube">
        </div>

        <div style="text-align: center;">
            <a class="fot" href="contactus.php">Contact Us</a>
            <a class="fot" href="termandcon.html">Terms & Conditions</a>
            <a class="fot" href="p&p.html">Privacy Policy</a>
        </div>

        <hr class="hr1">

        <div class="copyright">
            <p>&copy; 2024 Cristels E-care PLC. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
