<?php
// Assuming you have already established a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL statement to fetch user data based on email
    $sql = "SELECT * FROM registration WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password
        if ($password == $row['pass']) {
            // Password matched, redirect to the dashboard page
            header("Location: Dashboard.php");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }
}

// Close the database connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body>
<br>
<br>
<h3 align= "right">
<a style="color:purple;" href="Login.php"> Login | </a>
<a style="color:purple;" href="Registration.php"> Sign Up </a>
</h3>
<fieldset>
<div align="center">
<h1 align="center">
           <span style="color:indianred"> Hospital Management System </span>
           </h1>
<form method="post" action="" >
<b> <label for="email"> Email : </label> </b>
<input type="text" name="email" value="" required >
<br><br>
<b> <label for="password"> Password : </label> </b>
<input type="password" name="password" value="" required >
<br><br>
<div>
<hr>
<input type="checkbox" name="Remember me"> Remember Me <br><br>
<input type="submit" name="submit" value="Submit" >
<br>
<br>
<a href="Forgetpass.php">Forgot Password?</a><br>
</div>
</div>
</form> <br>
<div align="center">
<h4 > <span> Copyright © <?php echo date(2023);?> </span> </h4>
</div>
<hr>
</fieldset>
</body>
</html>