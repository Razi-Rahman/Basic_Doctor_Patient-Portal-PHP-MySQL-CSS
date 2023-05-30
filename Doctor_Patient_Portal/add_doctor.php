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
    $d_fname = $_POST['d_fname'];
    $d_lname = $_POST['d_lname'];
    $d_ID = $_POST['d_ID'];
    $d_email = $_POST['d_email'];
    $d_designtation = $_POST['d_designtation'];
    $d_phone = $_POST['d_phone'];
    $d_salary = $_POST['d_salary'];
    $d_gender = $_POST['d_gender'];

    // Prepare and execute the SQL statement to insert data
    $sql = "INSERT INTO d_registration (d_fname, d_lname, d_ID, d_email, d_designtation, d_phone, d_salary, d_gender)
            VALUES ('$d_fname', '$d_lname', '$d_ID', '$d_email', '$d_designtation', '$d_phone', '$d_salary', '$d_gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Doctor Added successfully.";
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
<title>Add Doctor</title>
<link rel="stylesheet" href="style.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<br />
<hr>
</div>
<div class="container" style="width:500px;">
<h3 align= "right">
<a style="color:purple;" href="admin_dashboard.php"> Admin Dashboard </a> </h3>
<h3 align="center"> <b>Add Doctor</b></h3><br />
<form action="#" method="post" enctype="multipart/form-data">
<br />
<label>Doctor's First Name</label>
<input type="text" name="d_fname" class="form-control" required /><br />
<label>Doctor's Last Name</label>
<input type="text" name="d_lname" class="form-control" required /><br />
<label>Doctor's ID</label>
<input type="text" name = "d_ID" class="form-control" required /><br />
<label>Doctor's E-mail</label>
<input type="text" name = "d_email" class="form-control" required /><br />
<label>Doctor's Designation</label>
<input type="text" name = "d_designtation" class="form-control" required /><br />
<label>Doctor's Mobile Number</label>
<input type="text" name = "d_phone" class="form-control" required /><br />
<label>Doctor's Salary</label>
<input type="text" name = "d_salary" class="form-control" required /><br />

<fieldset>
<legend>Doctor's Gender</legend>
<input type="radio" id="male" name="d_gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="d_gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="d_gender" value="other">
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