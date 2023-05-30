<!DOCTYPE html>
<html>
<head>
  <title>Patient List</title>
  <div>  
        <p><h1 align="center">
           <span style="color:indianred"> Hospital Management System </span>
           </h1>
        </p>
        <hr>
        <hr>
            <h1 align="center">
            <legend align="center" style="font-size:4vw;"><marquee>All Patient's List</marquee></h1></legend>  
            <h2 align="right"><a style ="color:teal;" href="admin_dashboard.php"> <button class="button admin-button">Back</button></h2>
</a>
    </div>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #4CAF50;
      color: white;
    }
    
    tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>ID</th>
      <th>Email</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Gender</th>
    </tr>
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

    // Retrieve data from the database table
    $sql = "SELECT * FROM registration";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in rows and columns
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['fname'] . "</td>";
            echo "<td>" . $row['lname'] . "</td>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No data found.</td></tr>";
    }

    // Close the database connection
    $conn->close();
    ?>
  </table>
</body>
</html>
