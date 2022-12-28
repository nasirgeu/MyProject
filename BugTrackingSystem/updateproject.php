<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="newproject.css" />
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $databse="bugtrackingsystem";
        $connection = mysqli_connect($servername,$username,$password);
        $db = mysqli_select_db($connection,$databse);
        $s_nos=$_GET['s_no'];
        $query="SELECT * FROM `addproject` where s_no =$s_nos";
        $result=mysqli_query($connection,$query);
        $row =mysqli_fetch_array($result);
    ?>
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
        <p class="about">ADD NEW PROJECT</p>
        <hr/>
        <form action="updateprojectphp.php?s_no=<?php echo $row['s_no'];?>" method="post" class="form">
            <p class="username">Project Title &nbsp;&nbsp;</p>
            <input type="text" value="<?php echo $row['title']?>" name="title" id="" class="name" autocomplete="off" placeholder="Enter Project Title" required>
            <br>
            <p class="username">Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <!-- <input type="text" name="" id="" class="name" autocomplete="off" placeholder="Enter Username"> -->
            <select name="type" class="name" id="">
                 <option value="<?php echo $row['type']?>"><?php echo $row['type']?></option>
                <option  value="Maintenance">Maintenance Project</option>
                <option  value="New Project">New Project</option>
                <option  value="Web Dev">Web Development</option>
                <option  value="App Dev">App Development</option>
            </select>
            <br>
            <p class="username">Manager&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="manager" class="name" id="">
                <option value="<?php echo $row['manager']?>"><?php echo $row['manager']?></option>
                <option value="Mohd Nasir">Mohd Nasir</option>
                <option value="Arunima Gupta">Arunima Gupta</option>
                <option value="Naushad Zakir">Naushad Zakir</option>
                <option value="Karunesh Gupta">Karunesh Gupta</option>
            </select>
            <br>
            <p class="username">Frontend&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" value="<?php echo $row['frontend']?>" name="frontend" id="" class="name" autocomplete="off" placeholder="Enter Frontend Language" required>
            <br>
            <p id="password">Backend&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" value="<?php echo $row['backend']?>" name="backend" id="" autocomplete="off" class="name" placeholder="Enter Backend Language" required>
            <br>
            <p id="password">Client Name&nbsp;&nbsp;</p>
            <input type="text" value="<?php echo $row['client_name']?>" name="client_name" id="" autocomplete="off" class="name" placeholder="Enter Client Name" required>
            <br>
            <p class="username" id="message" >Description</p>
            <textarea name="descriptions" class="name" id="area" cols="30" rows="10" placeholder="Project Description"required><?php echo $row['descriptions']?></textarea >
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