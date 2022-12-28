<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="newbug.css" />
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
        <p class="about">ADD NEW BUG</p>
        <hr/>
        <form action="newbugphp.php" method="post" class="form">
            <p class="username">Project Title&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="title" id="" class="name" autocomplete="off" placeholder="Enter Project Title" required>
            <br>
            <p class="username">select project&nbsp;&nbsp;&nbsp;</p>
            <!-- <input type="text" name="" id="" class="name" autocomplete="off" placeholder="Enter Username"> -->
            <select name="project" class="name" id="">
                <option value="Student Management System">Student Management System</option>
                <option value="Attendence Tracking ">Attendence Tracking </option>
                <option value="Web Development">Web Development</option>
                <option value="App Development">App Development</option>
            </select>
            <br>
            <p class="username">select type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="type" class="name" id="">
                <option value="Bug">Bug</option>
                <option value="New Functionality">New Functionality</option>
                <option value="Maintenance">Maintenance</option>
            </select>
            <br>
            <p class="username">Assigned To&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="assign" class="name" id="">
                <option value="Mohd Nasir">Mohd Nasir</option>
                <option value="Arunima Gupta">Arunima Gupta</option>
                <option value="Naushad Zakir">Naushad Zakir</option>
                <option value="Karunesh Gupta">Karunesh Gupta</option>
            </select>
            <br>
            <p id="password">Bug status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="status" class="name" id="">
                <option value="Pending">Pending</option>
                <option value="Solve">Solve</option>
                <option value="In Progress">In Progress</option>
            </select>
            <br>
            <p id="password">Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="date" name="startdate" id="" autocomplete="off" class="name" placeholder="Select Date" required>
            <br>
            <p class="username">Due Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="date" name="duedate" id="" class="name" autocomplete="off" placeholder="Select Date" required>
            <br>
            <p class="username">Total Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="time" id="" class="name" autocomplete="off" placeholder="Enter Total Time" required>
            <br>
            <p class="username" id="message">Description</p>
            <textarea name="descriptions" class="name" id="area" cols="30" rows="10" placeholder="Write About Project"></textarea>
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
