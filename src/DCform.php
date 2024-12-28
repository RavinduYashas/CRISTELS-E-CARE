<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: light grey;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 600px;
            margin: 30px auto;
            padding: 40px;
            background-color: pure white;
            border-radius: 5px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: #007bff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>   
</head>

<body>
<h2>Paitent Information Form</h2>
    <form action="insert.php" method="post" action="">
    <div>
            <label for="patientName">Patient Name:</label>
            <input type="text" id="patientName" name="patientName" required>
        </div><br>
        <div>
            <label for="doctorName">Doctor Name:</label>
            <input type="text" id="doctorName" name="doctorName" required>
        </div><br>
        <div>
            <label for="hospitalName">Hospital Name:</label>
            <input type="text" id="hospitalName" name="hospitalName" required>
        </div><br>
        <div>
            <label for="paymentRef">Payment Reference:</label>
            <input type="text" id="paymentRef" name="paymentRef" required>
        </div><br>
        <div>
            <label for="date">Date:</label>
            <input type="text" id="date" name="date" placeholder="YYYY-MM-DD" required>
        </div><br>
        <div>   
            <label for="contactNo">Contact Number:</label>
            <input type="text" id="contactNo" name="contactNo"  placeholder="123-456-7890" required>
        </div><br>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div><br>
        <div>
            <button type="submit" onclick = "showAlert()">Submit</button>
            <script>
                function showAlert(){
                    alert("Submission sucessfull")
                }
            </script>    
        </div>
    </form>
  
</body>
</html>