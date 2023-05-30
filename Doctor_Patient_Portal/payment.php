<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <link rel="stylesheet" href="style.css" />
  <script>
    function confirmPayment() {
      alert("Payment done!");
    }
  </script>
</head>
<body>
  <h1>Payment</h1>
  <div class="container">
    <form id="payment-form" action="confirm_payment.php" method="post">
      <label for="card-number">Card Number:</label>
      <input type="text" id="card-number" name="card-number" required />
      
      <label for="expiry-date">Expiry Date:</label>
      <input type="text" id="expiry-date" name="expiry-date" required />
      
      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv" required />
      
      <label for="name-on-card">Name on Card:</label>
      <input type="text" id="name-on-card" name="name-on-card" required />
      
      <button type="submit" class="payment-button" onclick="confirmPayment()">Confirm Payment</button>
    </form>
  </div>
</body>
</html>


