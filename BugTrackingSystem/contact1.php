<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="contact1.css" />
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
    <div class="container">
      <div class="details">
        <p class="about">CONTACT ME</p>
        <p class="find">WHERE TO FIND US</p>
        <hr/>
        <form action="contactdetails.php" method="post" class="form">
            <p class="username">Name &nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="name" id="" class="name" autocomplete="off" placeholder="Enter Username">
            <br>
            <p class="username">Email Id&nbsp;</p>
            <input type="text" name="email" id="" class="name" autocomplete="off" placeholder="Enter Username">
            <br>
            <p class="username">Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="phone" id="" class="name" autocomplete="off" placeholder="Enter Username">
            <br>
            <p class="username">Address&nbsp;&nbsp;</p>
            <input type="text" name="address" id="" class="name" autocomplete="off" placeholder="Enter Username">
            <br>
            <p id="password">Gender&nbsp;&nbsp;</p>
            <!-- <input type="text" name="" id="" autocomplete="off" class="name" placeholder="Enter Password"> -->
            <select name="gender" id="" class="name">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
            <br>
            <p class="username" id="message">Message</p>
            <textarea name="message" class="name" id="area" cols="30" rows="10"></textarea>
            <input type="submit" value="Submit" class="submit">
            <input type="reset" value="Reset"  class="reset">
        </form>
      </div>
      <div class="image">
        <div class="box"><img src="map.jpg" class="bug3" alt="" /></div>
        <p class="address"><strong>&nbsp;&nbsp;&nbsp;Arunima Gupta</strong>  <br> <br> Graphic Era Deemed to be University <br> 566/6, Bell Road, Society Area <br> Clement Town, Dehradun, Uttarakhand 248002 <br><br>Phone:-9927836164 <br> Email:-mohdnasir4256@gmail.com</p>
        </div>
      </div>
    </div>
  </body>
</html>
