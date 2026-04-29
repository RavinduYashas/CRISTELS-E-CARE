# CRISTELS E-CARE - Modern Healthcare Solutions

## 🏥 Overview

CRISTELS E-CARE is a comprehensive web-based healthcare management system designed to provide modern healthcare solutions. The platform enables patients to connect with doctors, book appointments, access online pharmacy services, and receive support—all from the convenience of their home.

## ✨ Features

### For Patients
- **E-Channelling**: Online appointment booking with healthcare professionals
- **Doctor Booking**: Schedule consultations with available doctors
- **Online Pharmacy**: Access medication services online
- **Support Desk**: Get help and support for healthcare concerns
- **User Account Management**: Create and manage personal health profiles
- **FAQ Section**: Quick answers to common healthcare questions

### For Administrators
- **Admin Dashboard**: Comprehensive management interface for system operations
- **Doctor Management**: Manage doctor profiles and availability
- **Appointment Tracking**: Monitor all bookings and appointments
- **System Analytics**: View platform statistics and usage data

### General Features
- **Responsive Design**: Works seamlessly on desktop and mobile devices
- **User Authentication**: Secure login and signup system
- **Contact Management**: Easy way to reach support team
- **About Us**: Learn more about CRISTELS E-CARE
- **Terms & Conditions**: Clear usage policies
- **Privacy Policy**: Data protection information

## 🛠️ Tech Stack

| Layer | Technology |
|-------|------------|
| **Frontend** | HTML5, CSS3, JavaScript |
| **Backend** | PHP |
| **Database** | MySQL |
| **Server** | Apache (XAMPP) |

## 📁 Project Structure

```
IWT.my/
├── README.md                 # Project documentation
├── src/                      # Main application files
│   ├── index1.html          # Home page
│   ├── admindash.php        # Admin dashboard
│   ├── eChannling.html      # E-Channelling booking
│   ├── doctorBooking.html   # Doctor appointment booking
│   ├── onlinePharmacy.html  # Pharmacy services
│   ├── supportDesk.php      # Support system
│   ├── contactus.php        # Contact form
│   ├── aboutus.html         # About page
│   ├── faq.html             # FAQ section
│   ├── loging1.html         # Login page
│   ├── singup.html          # Signup page
│   ├── logingDoc2.html      # Doctor login
│   ├── config.php           # Database configuration
│   ├── insert.php           # Insert data operations
│   ├── update.php           # Update data operations
│   ├── delete.php           # Delete data operations
│   ├── images/              # Image assets
│   ├── js/                  # JavaScript files
│   └── styles/              # CSS stylesheets
└── login/                   # Authentication pages
```

## 🚀 Installation & Setup

### Prerequisites
- XAMPP (Apache, MySQL, PHP)
- Web browser (Chrome, Firefox, Edge, Safari)
- Basic knowledge of PHP and MySQL

### Steps

1. **Clone/Download the Project**
   ```bash
   # Navigate to XAMPP htdocs
   cd C:\xampp\htdocs
   # Place the IWT.my folder here
   ```

2. **Setup Database**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `cristels_e_care`
   - Import database tables (if provided in the project)

3. **Configure Database Connection**
   - Update `src/config.php` with your database credentials
   ```php
   $con = new mysqli("localhost", "root", "", "cristels_e_care");
   ```

4. **Start Apache & MySQL**
   - Open XAMPP Control Panel
   - Start Apache and MySQL services

5. **Access the Application**
   - Open browser and navigate to: `http://localhost/IWT.my/src/index1.html`

## 📝 Database Configuration

The application uses MySQL with the following configuration:

```php
Host: localhost
Username: root
Password: (empty)
Database: cristels_e_care
```

Make sure MySQL is running before accessing the application.

## 👥 User Roles

- **Patients**: Browse services, book appointments, manage health records
- **Doctors**: View appointments, manage availability, provide consultations
- **Administrators**: Manage doctors, monitor system, handle complaints

## 🔐 Security Features

- User authentication and session management
- Secure database connections
- Input validation and sanitization
- Password encryption for user accounts

## 📱 Responsive Design

The platform is designed to be responsive and accessible across all devices:
- Desktop computers
- Tablets
- Mobile phones

## 🐛 Troubleshooting

### Database Connection Error
- Ensure MySQL is running in XAMPP
- Verify database credentials in `config.php`
- Check if `cristels_e_care` database exists

### Pages Not Loading
- Verify Apache service is running
- Check correct URL format: `http://localhost/IWT.my/src/...`
- Clear browser cache

### Styling Issues
- Ensure CSS files are loading correctly
- Check browser developer console for errors
- Verify file paths are correct

## 📧 Support

For support and inquiries, visit the Support Desk page or use the Contact Us form on the platform.

## 📄 License

This project is proprietary software. All rights reserved.

## 🤝 Contributing

For contributions and improvements, please contact the development team.

---

**Project Name**: CRISTELS E-CARE  
**Version**: 1.0.0  
**Last Updated**: 2026  
**Status**: Active Development
