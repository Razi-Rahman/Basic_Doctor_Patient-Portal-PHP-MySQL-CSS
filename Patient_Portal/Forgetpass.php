<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <br>
  <br>
  <h3 align="right">
    <a class="link" href="Login.php">Login |</a>
    <a class="link" href="Registration.php">Sign Up</a>
  </h3>
  <fieldset>
    <div class="container">
      <h1 class="heading">Forgot Password</h1>
      <form method="post" action="">
        <p>Enter your email address below and we'll send you instructions on how to reset your password.</p>
        <b><label for="email">Email:</label></b>
        <input type="text" name="email" value="" required>
        <br><br>
        <button type="submit" name="submit" value="Submit">Submit</button>
      </form>
      <br>
      <div class="back-link">
        <a href="login.php">Back to Login</a>
      </div>
    </div>
  </fieldset>
</body>
</html>
