<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="newuser.css" />
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
        <p class="about">USER REGISTRATION</p>
        <hr/>
        <form action="newuserphp.php" method="post" class="form">
            <p class="username">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
            <input type="text" name="name" id="" class="name" autocomplete="off" placeholder="Enter Name">
            <br>
            <p class="username">User Level&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <!-- <input type="text" name="" id="" class="name" autocomplete="off" placeholder="Enter Username"> -->
            <select name="level" class="name" id="">
                <option value="Expert">Expert</option>
                <option value="Beginners">Beginners</option>
                <option value="Normal">Normal</option>
            </select>
            <br>
            <p class="username">Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="username" id="" class="name" autocomplete="off" placeholder="Enter Username">
            <br>
            <p class="username">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="password" name="password" id="" class="name" autocomplete="off" placeholder="Enter Password">
            <br>
            <p id="password">Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="mobile" id="" autocomplete="off" class="name" placeholder="Enter Mobile Number">
            <br>
            <p id="password">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="email" name="email" id="" autocomplete="off" class="name" placeholder="Enter Email Id">
            <br>
            <p id="password">Date Of Birth&nbsp;</p>
            <input type="date" name="dob" id="" autocomplete="off" class="name" >
            <br>
            <p id="password">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="address" id="" autocomplete="off" class="name" placeholder="Enter Address">
            <br>
            <p class="username">City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="city" class="name" id="">
                <option value="Dehradun">Dehradun</option>
                <option value="Saharanpur">Saharanpur</option>
                <option value="Bijnor">Bijnor</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <p class="username">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="state" class="name" id="">
                <option value="Uttrakhand">Uttrakhand</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Bihar">Bihar</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <p class="username">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="country" class="name" id="">
                <option value="India">India</option>
                <option value="Japan">Japan</option>
                <option value="America">America</option>
                <option value="Nepal">Nepal</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <p class="username">Photo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="file" name="image" id="" autocomplete="off" class="name" placeholder="Enter Password">
            <br>
            <input type="submit" value="Submit" class="submit">
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
