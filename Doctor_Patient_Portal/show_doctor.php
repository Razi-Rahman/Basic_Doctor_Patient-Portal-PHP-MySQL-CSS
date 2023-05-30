 <!DOCTYPE html>
<html>
<head>
    <title>Update Doctor Data</title>
</head>
<div>  
        <p><h1 align="center">
           <span style="color:indianred"> Hospital Management System </span>
           </h1>
        </p>
 <hr>
            <h1 align="center">
            <legend align="center" style="font-size:4vw;"><marquee>All Doctor's List</marquee></h1></legend>  
            <h2 align="right"><a style ="color:teal;" href="admin_dashboard.php"> <button class="button admin-button">Back</button></h2>
</a>

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

// Retrieve all data from the table
$sql = "SELECT * FROM d_registration";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    // Start building the table
    echo '<table style="width:100%">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>First Name</th>';
    echo '<th>Last Name</th>';
    echo '<th>Email</th>';
    echo '<th>Designation</th>';
    echo '<th>Phone</th>';
    echo '<th>Salary</th>';
    echo '<th>Gender</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Loop through each row of data
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['d_ID'] . '</td>';
        echo '<td>' . $row['d_fname'] . '</td>';
        echo '<td>' . $row['d_lname'] . '</td>';
        echo '<td>' . $row['d_email'] . '</td>';
        echo '<td>' . $row['d_designtation'] . '</td>';
        echo '<td>' . $row['d_phone'] . '</td>';
        echo '<td>' . $row['d_salary'] . '</td>';
        echo '<td>' . $row['d_gender'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>
