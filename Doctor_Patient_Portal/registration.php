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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ID = $_POST['ID'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];

    // Prepare and execute the SQL statement to insert data
    $sql = "INSERT INTO registration (fname, lname, ID, email, address, phone, pass, gender)
            VALUES ('$fname', '$lname', '$ID', '$email', '$address', '$phone', '$pass', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Data stored successfully.";
    } else {
        echo "Error storing data: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>





<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<br />
<hr>
</div>
<div class="container" style="width:500px;">
<h3 align= "right">
<a style="color:purple;" href="Login.php"> Login </a> </h3>
<h3 align="center"> <b>Registration</b></h3><br />
<form action="#" method="post" enctype="multipart/form-data">
<br />
<label>First Name</label>
<input type="text" name="fname" class="form-control" required /><br />
<label>Last Name</label>
<input type="text" name="lname" class="form-control" required /><br />
<label>ID</label>
<input type="text" name = "ID" class="form-control" required /><br />
<label>E-mail</label>
<input type="text" name = "email" class="form-control" required /><br />
<label>Address</label>
<input type="text" name = "address" class="form-control" required /><br />
<label>Mobile Number</label>
<input type="text" name = "phone" class="form-control" required /><br />
<label>Password</label>
<input type="password" name = "pass" class="form-control" required /><br />
<label>Confirm Password</label>
<input type="password" name = "Cpass" class="form-control" required /><br />
<fieldset>
<legend>Gender</legend>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br>
</fieldset>
<div>
<hr>
<input type="submit" name="submit" value="Append" class="btn btn-info" /><br />
</div>
</fieldset>
</form>
<br />
</body>
</html>