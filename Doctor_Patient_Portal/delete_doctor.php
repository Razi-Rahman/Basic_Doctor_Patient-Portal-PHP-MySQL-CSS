<!DOCTYPE html>
<html>
<head>
    <title>Delete Doctor Data</title>
</head>
<body>
    <div>  
        <p><h1 align="center">
           <span style="color:indianred"> Hospital Management System </span>
           </h1>
        </p>
        <hr>
        <hr>
            <h1 align="center">
            <legend align="center" style="font-size:4vw;"><marquee>Search Here With Doctor's ID to Delete </marquee></h1></legend>  
            <h2 align="right"><a style ="color:teal;" href="admin_dashboard.php"> <button class="button admin-button">Back</button></h2>
</a>
    </div>
    <div align="center">
    <form method="POST" action="">
        <label for="deleteID">Enter Doctor ID to Delete:</label>
        <input type="text" name="deleteID" id="deleteID" required>
        <button type="submit">Delete</button>
    </form>
    </div>
</body>
</html>



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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteID'])) {
    // Retrieve the ID of the record to delete
    $deleteID = $_POST['deleteID'];

    // Prepare and execute the SQL statement to delete data
    $sql = "DELETE FROM d_registration WHERE d_ID = '$deleteID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

