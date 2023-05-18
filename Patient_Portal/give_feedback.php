<!DOCTYPE html>
<html>
<head>
  <title>Give Feedback</title>
  <link rel="stylesheet" href="style.css" />
  <script>
    function record() {
      alert("Thanks For Your Review !");
    }
  </script>

</head>
<body>
  <h1>Give Feedback</h1>
  <div class="container">
    <form id="feedback-form" action="submit_feedback.php" method="post">
      <label for="patient-name">Patient Name:</label>
      <input type="text" id="patient-name" name="patient-name" required />
      
      <label for="doctor-name">Doctor Name:</label>
      <input type="text" id="doctor-name" name="doctor-name" required />
      
      <label for="rating">Rating:</label>
      <select id="rating" name="rating" required>
        <option value="5">5 Stars</option>
        <option value="4">4 Stars</option>
        <option value="3">3 Stars</option>
        <option value="2">2 Stars</option>
        <option value="1">1 Star</option>
      </select>
      <br>
      <br>
      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" required></textarea>
      
      <button type="submit" class="review-button" onclick="record()">Submit Review</button>
    </form>
  </div>
</body>
</html>
