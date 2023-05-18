<!DOCTYPE html>
<html>
<head>
  <title>Take Report</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h1>Take Report</h1>
  <div class="container">
    <div class="report">
      <h3>Report for John Doe</h3>
      <p>Date: May 22, 2023</p>
      <p>Report Details:</p>
      <ul>
        <li>Test 1 - Result: Positive</li>
        <li>Test 2 - Result: Negative</li>
        <li>Test 3 - Result: Positive</li>
      </ul>
      <p>Instructions:</p>
      <p>Please follow any additional instructions provided by your healthcare provider.</p>
      

    </div>
    <br>
    <div class="report">
  <h3>Report for Jane Smith</h3>
  <p>Date: June 10, 2023</p>
  <p>Report Details:</p>
  <ul>
    <li>Test 1 - Result: Negative</li>
    <li>Test 2 - Result: Positive</li>
    <li>Test 3 - Result: Negative</li>
  </ul>
  <p>Instructions:</p>
  <p>Please follow any additional instructions provided by your healthcare provider.</p>

      <button type="submit" onclick="printReport()">Print Report</button>
</div>

  </div>

  <script>
    function printReport() {
      window.print();
    }
  </script>
</body>
</html>
