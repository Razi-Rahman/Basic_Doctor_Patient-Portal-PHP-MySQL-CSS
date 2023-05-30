
<!DOCTYPE html>
<html>
<head>
  <title>Personal Health Record</title>
  <link rel="stylesheet" href="style.css" />
    <script>
    function record() {
      alert("Record Successfully done!");
    }
  </script>
</head>
<body>
  <h1>Personal Health Record</h1>
  <div class="container">
    <form id="health-record-form" action="" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required />
      
      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required />
      
      <label for="blood-type">Blood Type:</label>
      <input type="text" id="blood-type" name="blood-type" required />
      
      <label for="conditions">Medical Conditions:</label>
      <textarea id="conditions" name="conditions" required></textarea>
      
      <button type="submit" class="payment-button" onclick="record()">Save Record</button>
    </form>
  </div>
</body>
</html>
