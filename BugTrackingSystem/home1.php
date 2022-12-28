<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="home1.css" />
  </head>
  <body>
    <div class="navigation">
    <ul>
          <li><a href="dashboard.php" class="nava">Dashboard</a></li>
            <li><a href="" class="nava">Administration</a>
                <ul>
                    <li><a href="newproject.php" class="nava">Add New Project</a></li>
                    <li><a href="newbug.php" class="nava">Add Bug</a></li>
                    <li><a href="newuser.php" class="nava">Add User</a></li>
                </ul>
            </li>
            <li><a href="" class="nava">Report</a>
                <ul>
                    <li><a href="projectreports.php" class="nava">Project Report</a></li>
                    <li><a href="bugreports.php" class="nava">Bug Reports</a></li>
                    <li><a href="userreports.php" class="nava">User Reports</a></li>
                </ul>
            </li>
            <li><a href="" class="nava">More Options</a>
                <ul>
                    <li><a href="home1.php" class="nava">Home</a></li>
                    <li><a href="about1.php" class="nava">About Us</a></li>
                    <li><a href="contact1.php" class="nava">Contact Us</a></li>
                </ul>
            </li>
            <li><a href="logoutphp.php" class="nava">Logout</a></li>
      </ul>
    </div>
    <div class="contain">
      <img src="bug.jpg" alt="" class="bug" />
    </div>
    <div class="contain1">
      <p class="about">ABOUT BUG TRACKING SYSTEM</p>
      <p class="features">FEATURES</p>
      <hr />
      <div class="box">
        <p class="Manage">Manage Bugs</p>
        <div class="divimg"><img src="bug1.jpg" class="imgbug1" alt="" /></div>
        <p>
          Ability to define special Event days (days where employees cannot
          request time-off, are warned or notified on the calender)
        </p>
        <hr />
        <a href="#" class="more">Read More</a>
      </div>
      <div class="box">
        <p class="Manage">Manage Bugs</p>
        <div class="divimg"><img src="bug2.png" class="imgbug1" alt="" /></div>
        <p>
          Ability to define special Event days (days where employees cannot
          request time-off, are warned or notified on the calender)
        </p>
        <hr />
        <a href="#" class="more">Read More</a>
      </div>
      <div class="box" id="box1">
        <img src="bug3.png" class="bug3" alt="" />
      </div>
      <div class="box">
        <p class="Manage">Manage Bugs</p>
        <div class="divimg"><img src="bug2.png" class="imgbug1" alt="" /></div>
        <p>
          Ability to define special Event days (days where employees cannot
          request time-off, are warned or notified on the calender)
        </p>
        <hr />
        <a href="#" class="more">Read More</a>
      </div>
      <div class="box">
        <p class="Manage">Manage Bugs</p>
        <div class="divimg"><img src="bug2.png" class="imgbug1" alt="" /></div>
        <p>
          Ability to define special Event days (days where employees cannot
          request time-off, are warned or notified on the calender)
        </p>
        <hr />
        <a href="#" class="more">Read More</a>
      </div>
      <div class="box" id="box2">
        <img src="bug4.png" class="bug3" alt="" />
      </div>
    </div>
  </body>
</html>
