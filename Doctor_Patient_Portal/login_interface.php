<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body background="images/1.jpg">
<br>
<br>
<style>
/* Style for the buttons */
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 6px 4px;
  cursor: pointer;
  border-radius: 10px;
  transition: all 0.3s ease-in-out;
}

/* Style for the Admin Login button */
.admin-button {
  background-color: #FF8C00;
}

/* Style for the Patient Login button */
.patient-button {
  background-color: #4169E1;
}

/* Stylish hover effect */
.button:hover {
  transform: scale(1.05);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
</style>
</head>



<fieldset>
<div align="center">
<h1 align="center">
           <span style="color:indianred"> Hospital Management System </span>
           </h1>
<br>
<fieldset>
    <!-- Admin Login button -->
<a href="admin_dashboard.php">
  <button class="button admin-button">Admin Login</button>
</a>

<!-- Patient Login button -->
<a href="login.php"><button class="button patient-button">Patient Login</button>
</fieldset>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">
<h4 style="font-size: 30px; color:white;"> <span> Copyright © <?php echo date(2023);?> </span> </h4>
</div>
<hr>
</fieldset>
</body>
</html>