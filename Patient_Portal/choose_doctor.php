<!DOCTYPE html>
<html>
<head>
<title>Choose Doctor</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<h1>Choose a Doctor</h1>
<div class="container">
  <div class="doctor-list">
    <div class="doctor">
      <h3>Dr. John Doe</h3>
      <p>Specialty: Cardiology</p>
      <p>Experience: 10 years</p>
      <button class="select-button" onclick="selectDoctor('Dr. John Doe')">Select Doctor</button>
    </div>
    <div class="doctor">
      <h3>Dr. Jane Smith</h3>
      <p>Specialty: Pediatrics</p>
      <p>Experience: 8 years</p>
      <button class="select-button" onclick="selectDoctor('Dr. Jane Smith')">Select Doctor</button>
    </div>
    <div class="doctor">
  <h3>Dr. Michael Johnson</h3>
  <p>Specialty: Orthopedics</p>
  <p>Experience: 12 years</p>
  <button class="select-button" onclick="selectDoctor('Dr. Michael Johnson')">Select Doctor</button>
</div>

<div class="doctor">
  <h3>Dr. Sarah Adams</h3>
  <p>Specialty: Dermatology</p>
  <p>Experience: 9 years</p>
  <button class="select-button" onclick="selectDoctor('Dr. Sarah Adams')">Select Doctor</button>
</div>

<div class="doctor">
  <h3>Dr. Robert Williams</h3>
  <p>Specialty: Gastroenterology</p>
  <p>Experience: 15 years</p>
  <button class="select-button" onclick="selectDoctor('Dr. Robert Williams')">Select Doctor</button>
</div>

    <div class="doctor">
  <h3>Dr. Emily Davis</h3>
  <p>Specialty: Obstetrics and Gynecology</p>
  <p>Experience: 10 years</p>
  <button class="select-button" onclick="selectDoctor('Dr. Emily Davis')">Select Doctor</button>
</div>

<div class="doctor">
  <h3>Dr. Benjamin Wilson</h3>
  <p>Specialty: Neurology</p>
  <p>Experience: 12 years</p>
  <button class="select-button" onclick="selectDoctor('Dr. Benjamin Wilson')">Select Doctor</button>
</div>

<div class="doctor">
  <h3>Dr. Olivia Thompson</h3>
  <p>Specialty: Psychiatry</p>
  <p>Experience: 8 years</p>
  <button class="select-button" onclick="selectDoctor('Dr. Olivia Thompson')">Select Doctor</button>
</div>

  </div>
</div>

<script>
function selectDoctor(doctorName) {
  alert("Doctor selected: " + doctorName);
}
</script>

</body>
</html>
