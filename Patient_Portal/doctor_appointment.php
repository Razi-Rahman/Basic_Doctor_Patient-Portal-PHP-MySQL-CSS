


<!DOCTYPE html>
<html>
<head>
<title>Doctor Appointment</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<h1>Doctor Appointment</h1>
<div class="container">
  <div class="doctor-list">
    <div class="doctor">
      <h3>Dr. John Doe</h3>
      <p>Specialty: Cardiology</p>
      <p>Experience: 10 years</p>
      <h4>Available Appointments:</h4>
      <ul>
        <li>Date: <span id="date1">May 22, 2023</span>, Time: <span id="time1">10:00 AM</span></li>
        <li>Date: <span id="date2">May 24, 2023</span>, Time: <span id="time2">2:00 PM</span></li>
        <!-- Add more appointment slots here -->
      </ul>
      <button class="select-button" onclick="selectAppointment('Dr. John Doe', 'May 22, 2023', '10:00 AM')">Select Appointment</button>
    </div>
    <div class="doctor">
      <h3>Dr. Jane Smith</h3>
      <p>Specialty: Pediatrics</p>
      <p>Experience: 8 years</p>
      <h4>Available Appointments:</h4>
      <ul>
        <li>Date: <span id="date3">May 23, 2023</span>, Time: <span id="time3">9:30 AM</span></li>
        <li>Date: <span id="date4">May 25, 2023</span>, Time: <span id="time4">3:00 PM</span></li>
        <!-- Add more appointment slots here -->
      </ul>
      <button class="select-button" onclick="selectAppointment('Dr. Jane Smith', 'May 23, 2023', '9:30 AM')">Select Appointment</button>
    </div>
    <div class="doctor">
  <h3>Dr. Emily Johnson</h3>
  <p>Specialty: Dermatology</p>
  <p>Experience: 12 years</p>
  <h4>Available Appointments:</h4>
  <ul>
    <li>Date: <span id="date5">May 26, 2023</span>, Time: <span id="time5">11:00 AM</span></li>
    <li>Date: <span id="date6">May 28, 2023</span>, Time: <span id="time6">3:30 PM</span></li>
  </ul>
  <button class="select-button" onclick="selectAppointment('Dr. Emily Johnson', 'May 26, 2023', '11:00 AM')">Select Appointment</button>
</div>

<div class="doctor">
  <h3>Dr. Michael Anderson</h3>
  <p>Specialty: Orthopedics</p>
  <p>Experience: 15 years</p>
  <h4>Available Appointments:</h4>
  <ul>
    <li>Date: <span id="date7">May 27, 2023</span>, Time: <span id="time7">2:30 PM</span></li>
    <li>Date: <span id="date8">May 29, 2023</span>, Time: <span id="time8">9:00 AM</span></li>
  </ul>
  <button class="select-button" onclick="selectAppointment('Dr. Michael Anderson', 'May 27, 2023', '2:30 PM')">Select Appointment</button>
</div>
<div class="doctor">
  <h3>Dr. Sarah Thompson</h3>
  <p>Specialty: Gynecology</p>
  <p>Experience: 9 years</p>
  <h4>Available Appointments:</h4>
  <ul>
    <li>Date: <span id="date9">May 30, 2023</span>, Time: <span id="time9">10:30 AM</span></li>
    <li>Date: <span id="date10">June 1, 2023</span>, Time: <span id="time10">4:00 PM</span></li>
  </ul>
  <button class="select-button" onclick="selectAppointment('Dr. Sarah Thompson', 'May 30, 2023', '10:30 AM')">Select Appointment</button>
</div>

<div class="doctor">
  <h3>Dr. Robert Davis</h3>
  <p>Specialty: Neurology</p>
  <p>Experience: 13 years</p>
  <h4>Available Appointments:</h4>
  <ul>
    <li>Date: <span id="date11">June 2, 2023</span>, Time: <span id="time11">1:30 PM</span></li>
    <li>Date: <span id="date12">June 4, 2023</span>, Time: <span id="time12">11:00 AM</span></li>
  </ul>
  <button class="select-button" onclick="selectAppointment('Dr. Robert Davis', 'June 2, 2023', '1:30 PM')">Select Appointment</button>
</div>
  </div>
</div>
<script>
function selectAppointment(doctorName, date, time) {
  alert("Appointment selected:\nDoctor: " + doctorName + "\nDate: " + date + "\nTime: " + time);
}
</script>
</body>
</html>