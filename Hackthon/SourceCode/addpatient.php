<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="addpatient.css" />
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
            <li><a href="logoutphp.php" class="nava">Logout</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="details">
        <p class="about">ADD NEW PROJECT</p>
        <hr/>
        <form action="newprojectphp.php" method="post" class="form">
            <p class="username">Project Title &nbsp;&nbsp;</p>
            <input type="text" name="title" id="" class="name" autocomplete="off" placeholder="Title" required>
            <br>
            <p class="username">Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <!-- <input type="text" name="" id="" class="name" autocomplete="off" placeholder="Enter Username"> -->
            <select name="type" class="name" id="">
                <option  value="Maintenance">Asthma</option>
                <option  value="New Project">Tuberclosis</option>
                <option  value="Web Dev">Diabites</option>
                <option  value="App Dev">Other</option>
            </select>
            <br>
            <p class="username">patient&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="manager" class="name" id="">
                <option value="Mohd Nasir">Mohd Nasir</option>
                <option value="Arunima Gupta">Arunima Gupta</option>
                <option value="Naushad Zakir">Naushad Zakir</option>
                <option value="Karunesh Gupta">Karunesh Gupta</option>
            </select>
            <br>
            <p class="username">specilaist&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="frontend" id="" class="name" autocomplete="off" placeholder="Doctor Type" required>
            <br>
            <p id="password">Physcian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="backend" id="" autocomplete="off" class="name" placeholder="No?Yes" required>
            <br>
            <p id="password">patient name&nbsp;&nbsp;</p>
            <input type="text" name="client_name" id="" autocomplete="off" class="name" placeholder="Enter patient Name" required>
            <br>
            <p class="username" id="message" >Description</p>
            <textarea name="descriptions" class="name" id="area" cols="30" rows="10" placeholder="Patient Description"required></textarea >
            <input type="submit" name="submit" value="Submit" class="submit">
            <input type="reset" value="Reset"  class="reset">
        </form>
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