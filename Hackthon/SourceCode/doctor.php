<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="doctor.css" />
  </head>
  <body>
    <div class="navigation">
      <ul>
          <li><a href="doctor.php" class="nava">Dashboard</a></li>
            <li><a href="addpatient.php" class="nava">Add Patient</a>
                <!-- <ul>a
                    <li><a href="addpatient.php" class="nava">Add New Project</a></li>
                    <li><a href="newbug.php" class="nava">Add Bug</a></li>
                    <li><a href="newuser.php" class="nava">Add User</a></li>
                </ul> -->
            </li>
            <li><a href="" class="nava">Report</a>
                <!-- <ul>
                    <li><a href="projectreports.php" class="nava">Project Report</a></li>
                    <li><a href="bugreports.php" class="nava">Bug Reports</a></li>
                    <li><a href="userreports.php" class="nava">User Reports</a></li>
                </ul> -->
            </li>
            <li><a href="" class="nava">More Options</a>
                <!-- <ul>
                    <li><a href="home1.php" class="nava">Home</a></li>
                    <li><a href="about1.php" class="nava">About Us</a></li>
                    <li><a href="contact1.php" class="nava">Contact Us</a></li>
                </ul> -->
            </li>
            <li><a href="login.php" class="nava">Logout</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="details">
        <p class="about">DASHBOARD</p>
        <hr/>
       <div class="form">
           <p class="para"><a href="addpatient.php" class="para1">Add New Patient</a></p>
           <p class="para"><a href="patientdetails.php" class="para1">Patient Details</a></p>
           <p class="para"><a href="prescription.php" class="para1">prescription</a></p>  
           <p class="para"><a href="deletepatient.php" class="para1">Delete Patient</a></p>
           <p class="para"><a href="editpatient.php" class="para1">Edit Patient Details</a></p>
           <p class="para"><a href="userreports.php" class="para1">User Reports</a></p>
       </div>
      </div>
      <div class="image">
        <div class="box"><img src="bug3.png" class="bug3" alt="" /></div>
        <div class="box" id="box2">
          <img src="bug4.png" class="bug3" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>
