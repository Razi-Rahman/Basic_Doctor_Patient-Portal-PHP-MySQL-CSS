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
        <hr>
            <h1 align="center">
            <legend align="center" style="font-size:4vw;"><marquee>Search Here With Patient ID </marquee></h1></legend>  
            <h2 align="right"><a style ="color:teal;" href="admin_dashboard.php"> <button class="button admin-button">Back</button></h2>
</a>
    </div>
    <div align="center">
<body>
    <form method="POST" action="">
        <label for="searchID">Enter Doctor ID to Update:</label>
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
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['searchID'])) {
        // Retrieve search data
        $searchID = $_POST['searchID'];

        // Prepare and execute the SQL statement to search data
        $sql = "SELECT * FROM d_registration WHERE d_ID = '$searchID'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output the search results and update form
            $row = $result->fetch_assoc();
            ?>

            <form method="POST" action="">
                <input type="hidden" name="d_ID" value="<?php echo $row['d_ID']; ?>">
                <label for="d_fname">First Name:</label>
                <input type="text" name="d_fname" id="d_fname" value="<?php echo $row['d_fname']; ?>" required><br>
                <label for="d_lname">Last Name:</label>
                <input type="text" name="d_lname" id="d_lname" value="<?php echo $row['d_lname']; ?>" required><br>
                <label for="d_email">Email:</label>
                <input type="email" name="d_email" id="d_email" value="<?php echo $row['d_email']; ?>" required><br>
                <label for="d_designtation">Designation:</label>
                <input type="text" name="d_designtation" id="d_designtation" value="<?php echo $row['d_designtation']; ?>" required><br>
                <label for="d_phone">Phone:</label>
                <input type="text" name="d_phone" id="d_phone" value="<?php echo $row['d_phone']; ?>" required><br>
                <label for="d_salary">Salary:</label>
                <input type="text" name="d_salary" id="d_salary" value="<?php echo $row['d_salary']; ?>" required><br>
                <label for="d_gender">Gender:</label>
                <input type="text" name="d_gender" id="d_gender" value="<?php echo $row['d_gender']; ?>" required><br>
                <button type="submit">Update</button>
            </form>

            <?php
        } else {
            echo "No results found.";
        }
    }

    // Check if the update form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['d_ID'])) {
        // Retrieve form data for update
        $d_ID = $_POST['d_ID'];
        $d_fname = $_POST['d_fname'];
        $d_lname = $_POST['d_lname'];
        $d_email = $_POST['d_email'];
        $d_designtation = $_POST['d_designtation'];
        $d_phone = $_POST['d_phone'];
        $d_salary = $_POST['d_salary'];
        $d_gender = $_POST['d_gender'];

        // Prepare and execute the SQL statement to update data
        $sql = "UPDATE d_registration SET d_fname = '$d_fname', d_lname = '$d_lname', d_email = '$d_email', d_designtation = '$d_designtation', d_phone = '$d_phone', d_salary = '$d_salary', d_gender = '$d_gender' WHERE d_ID = '$d_ID'";

        if ($conn->query($sql) === TRUE) {
            echo "Doctor data updated successfully.";
        } else {
            echo "Error updating data: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
