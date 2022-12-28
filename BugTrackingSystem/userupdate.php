<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="newuser.css" />
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $databse="bugtrackingsystem";
        $connection = mysqli_connect($servername,$username,$password);
        $db = mysqli_select_db($connection,$databse);
        $s_nos=$_GET['s_no'];
        $query="SELECT * FROM `adduser` where s_no =$s_nos";
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
        <p class="about">USER REGISTRATION</p>
        <hr/>
        <form action="userupdatephp.php?s_no=<?php echo $row['s_no'];?>" method="post" class="form">
            <p class="username">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
            <input type="text" value=" <?php echo $row['name'];?>" name="name" id="" class="name" autocomplete="off" placeholder="Enter Name">
            <br>
            <p class="username">User Level&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <!-- <input type="text" name="" id="" class="name" autocomplete="off" placeholder="Enter Username"> -->
            <select name="level" class="name" id="">
                <option value=" <?php echo $row['level'];?>"> <?php echo $row['level'];?></option>
                <option value="Expert">Expert</option>
                <option value="Beginners">Beginners</option>
                <option value="Normal">Normal</option>
            </select>
            <br>
            <p class="username">Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" value=" <?php echo $row['username'];?>" name="username" id="" class="name" autocomplete="off" placeholder="Enter Username">
            <br>
            <p class="username">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="password" value=" <?php echo $row['password'];?>"  name="password" id="" class="name" autocomplete="off" placeholder="Enter Password">
            <br>
            <p id="password">Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text"  value=" <?php echo $row['mobile'];?>" name="mobile" id="" autocomplete="off" class="name" placeholder="Enter Mobile Number">
            <br>
            <p id="password">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="email" name="email" value=" <?php echo $row['email'];?>"  id="" autocomplete="off" class="name" placeholder="Enter Email Id">
            <br>
            <p id="password">Date Of Birth&nbsp;</p>
            <input type="date" value="<?php echo $row['dob'];?>" name="dob"   id="" autocomplete="off" class="name" >
            <br>
            <p id="password">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="address" value=" <?php echo $row['address'];?>"  id="" autocomplete="off" class="name" placeholder="Enter Address">
            <br>
            <p class="username">City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="city" class="name" id="">
                <option value=" <?php echo $row['city'];?>"> <?php echo $row['city'];?></option>
                <option value="Dehradun">Dehradun</option>
                <option value="Saharanpur">Saharanpur</option>
                <option value="Bijnor">Bijnor</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <p class="username">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="state" class="name" id="">
                <option value=" <?php echo $row['state'];?>"> <?php echo $row['state'];?></option>
                <option value="Uttrakhand">Uttrakhand</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Bihar">Bihar</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <p class="username">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <select name="country" class="name" id="">
            <option value=" <?php echo $row['country'];?>"> <?php echo $row['country'];?></option>
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
