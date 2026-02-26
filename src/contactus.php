<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | CRISTELS E-CARE</title>
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
        <section class="hed">
            <h1>Get in <span>Touch</span></h1>
            <p style="text-align: center; color: var(--text-light); max-width: 600px; margin: 0 auto 3rem;">We are here to assist you. Reach out to our team for any medical inquiries or support.</p>
        </section>

        <div class="contact-grid">
            <div class="contact-info-cards">
                <div class="contact-info-card">
                    <img src="images/email.png" alt="Location">
                    <div>
                        <h2>Our Location</h2>
                        <p>E-Care International, 3rd Floor,<br>Al Nasr Commercial Building, Dubai, UAE</p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <img src="images/phone.png" alt="Phone">
                    <div>
                        <h2>Hotline</h2>
                        <p>Helpline: 600532273<br>Office: +971-4-3811500</p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <img src="images/email.png" alt="Email">
                    <div>
                        <h2>Email Address</h2>
                        <p>ecareinternational@gmail.com<br>support@cristelsecare.com</p>
                    </div>
                </div>
            </div>

            <section class="contactFrom" style="margin: 0; max-width: 100%;">
                <h2 style="text-align: left; margin-bottom: 1.5rem;">Send us a Message</h2>
                <form method="post" action="insert.php">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label for="Name">Full Name</label>
                            <input type="text" id="Name" name="Name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" id="age" name="age" placeholder="Your Age" required>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label>Gender</label>
                        <div style="display: flex; gap: 2rem;">
                            <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                                <input type="radio" value="male" name="Gender" checked> Male
                            </label>
                            <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                                <input type="radio" value="female" name="Gender"> Female
                            </label>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="abcd@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Contact No</label>
                            <input type="text" id="mobile" name="mobile" placeholder="0770000000" pattern="[0-9]{10}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="need">Your Requirement</label>
                        <textarea id="need" name="need" rows="3" placeholder="How can we help?" required></textarea>
                    </div>

                    <div style="display: flex; align-items: center; gap: 0.5rem; margin: 1.5rem 0;">
                        <input type="checkbox" id="privacyCheckbox" onchange="document.getElementById('submitBtn').disabled = !this.checked">
                        <label for="privacyCheckbox" style="margin: 0; font-size: 0.9rem;">I verify that all information provided is accurate.</label>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <button type="submit" id="submitBtn" disabled>Submit Message</button>
                        <button type="reset" class="aboutUsbtn" style="background: var(--text-light); padding: 0.5rem;">Reset Form</button>
                    </div>
                </form>
            </section>
        </div>

        <div class="map-container">
            <img src="images/Googlemap-600x551-1.jpg" alt="Our Location Map" style="width: 100%; height: 400px; object-fit: cover;">
        </div>
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
