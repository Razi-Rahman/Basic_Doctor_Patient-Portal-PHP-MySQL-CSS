<!DOCTYPE html>
<html>
<head>
  <title>Take Prescription</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h1>Take Prescription</h1>
  <div class="container">
    <div class="prescription">
      <h3>Prescription for John Doe</h3>
      <p>Date: May 22, 2023</p>
      <p>Medication:</p>
      <ul>
        <li>Medicine 1 - 1 pill in the morning</li>
        <li>Medicine 2 - 2 pills after meals</li>
        <li>Medicine 3 - 1 pill before bedtime</li>
      </ul>
      <p>Instructions:</p>
      <p>Please follow the prescribed medication and dosage as mentioned above.</p>
      
      <button type="submit" onclick="printPrescription()">Print Prescription</button>
    </div>
    <br>
    <div class="prescription">
  <h3>Prescription for Jane Smith</h3>
  <p>Date: May 23, 2023</p>
  <p>Medication:</p>
  <ul>
    <li>Medicine A - 1 tablet in the morning</li>
    <li>Medicine B - 1 tablet after breakfast</li>
    <li>Medicine C - 1 tablet before bedtime</li>
  </ul>
  <p>Instructions:</p>
  <p>Take the prescribed medication as directed above.</p>
  
  <button type="submit" onclick="printPrescription()">Print Prescription</button>
</div>
</div>

  <script>
    function printPrescription() {
      window.print();
    }
  </script>
</body>
</html>
