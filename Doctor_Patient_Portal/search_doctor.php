


<!DOCTYPE html>
<html>
<head>
    <title>Search Form</title>
</head>

     <div>  
        <p><h1 align="center">
           <span style="color:indianred"> Hospital Management System </span>
           </h1>
        </p>
        <hr>
        <hr>
            <h1 align="center">
            <legend align="center" style="font-size:4vw;"><marquee>Search Here With Doctor's ID </marquee></h1></legend>  
            <h2 align="right"><a style ="color:teal;" href="admin_dashboard.php"> <button class="button admin-button">Back</button></h2>
</a>
    </div>

<body>
    <div align="center">
    <form method="POST" action="">
        <label for="searchID">Search by ID:</label>
        <input type="text" name="searchID" id="searchID" required>
        <button type="submit">Search</button>
    </form>
    </div>

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
    // Retrieve search data
    $searchID = $_POST['searchID'];

    // Prepare and execute the SQL statement to search data
    $sql = "SELECT * FROM d_registration WHERE d_ID = '$searchID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output the search results
        while ($row = $result->fetch_assoc()) {
            echo "Doctor's First Name: " . $row['d_fname'] . "<br>";
            echo "Doctor's Last Name: " . $row['d_lname'] . "<br>";
            echo "Doctor's ID: " . $row['d_ID'] . "<br>";
            echo "Doctor's Email: " . $row['d_email'] . "<br>";
            echo "Doctor's Address: " . $row['d_designtation'] . "<br>";
            echo "Doctor's Phone: " . $row['d_phone'] . "<br>";
            echo "Doctor's Salary: " . $row['d_salary'] . "<br>";
            echo "Doctor's Gender: " . $row['d_gender'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No results found.";
    }
}

// Close the database connection
$conn->close();
?>

</body>
</html>
