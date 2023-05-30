
<!DOCTYPE html>

<html>
<fieldset>
     
     <head>
         <title> DASHBOARD </title>
         <link rel="stylesheet" href="style.css">
       
     </head>
         
     <body>
    <fieldset>
     <div>  
        <p><h1 align="center">
           <span style="color:indianred"> Hospital Management System </span>
           </h1>
        </p>
        <hr>  
    </div> 
        
         <style>
    .button {
      display: inline-block;
      padding: 12px 24px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      background-color: #4CAF50;
      color: #ffffff;
      border-radius: 4px;
      border: none;
      transition: background-color 0.3s ease;
      cursor: pointer;
    }
    
    .button:hover {
      background-color: #45a049;
    }
    
    .button::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.2);
      transition: width 0.3s ease;
      z-index: -1;
    }
    
    .button:hover::before {
      width: 100%;
    }
  </style>
</head>

  



    <div>
        <fieldset>
            <hr>
            <h1 align="center">
                Welcome to Admin Dashboard ! 
            <legend align="center" style="font-size:4vw;"><marquee direction="left">We Belive in Humanity  </marquee></h1>
                <h1> <marquee style="font-size:4vw;" direction="right"> 24 /7days for you</marquee> </h1></legend>
            <hr>
            <div align="right"><a href="login_interface.php" class="button">Home</a></div>
            <div class="container">
            <div class="button-container">
            <a href="add_doctor.php" class="dashboard-button">Add Doctor</a> <br>
            <a href="show_doctor.php" class="dashboard-button">Show Doctor</a> <br>
            <a href="search_doctor.php" class="dashboard-button">Search Doctor</a><br>
            <a href="update_doctor.php" class="dashboard-button">Update Doctor</a><br>
            <a href="delete_doctor.php" class="dashboard-button">Delete Doctor</a><br>
            <a href="search_patient.php" class="dashboard-button">Search Patient</a><br>
            <a href="see_all_patient.php" class="dashboard-button">See All Patient</a>
    </div>
</div>
            <br>
            <br>
    </fieldset>
    </fieldset>
    </div>
</h1>
</body> 
     </fieldset>
</html>  