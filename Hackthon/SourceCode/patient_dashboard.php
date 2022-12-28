<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard Dashboard</title>
    <link rel="stylesheet" href="patient_dashboard.css">
    <?php
        session_start();
        $name="";
        $servername="localhost";
        $username="root";
        $password="";
        $connection=mysqli_connect($servername,$username,$password);
        $database=mysqli_select_db($connection,"project");
    ?>
</head>
<body>
    <div class="header">
        <span class="navbar">
            <span class="welcome">Welcome <?php echo $_SESSION['name'];?> </span>
            <span class="welcome">Name: <?php echo $_SESSION['name'];?></span>
            <span class="welcome">Email: <?php echo $_SESSION['email'];?></span>
            <span class="welcome">Year: 2021-2022</span>
        </span>
        <a href="login.php" class="logout">Logout</a>
    </div>
    <div><marquee behavior="" direction="" class="marquee"><strong>Patient Details</strong></marquee></div>
    <form action="contactdetails.php" method="post">
        <div class="contact">
            <div class="me">
                PATIENT DETAILS
            </div>
            <div class="map">
                WHERE TO FIND US
            </div>
        </div>
        <hr class="line">

        <div class="details">
            <div class="personal">
                <input  name="name" type="text" class="name" placeholder="Patient Unique Id" required>
                <input  name="email" type="email" class="name" placeholder="Patient Name">
                <input  name="contactnumber" type="text" class="name" placeholder="Email Id">
                <input  name="address" type="text" class="name" placeholder="Contact Number">
                <input  name="contactnumber" type="text" class="name" placeholder="Address">
                <input  name="address" type="text" class="name" placeholder="Address">
                <input  name="subject" type="text" class="name" id="subject" placeholder="subject">
                
                <select  name="gender" class="name" id="subject">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <select name="occupation" class="name" id="subject">
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Other">Other</option>
                </select>
                <textarea name="query" class="name" id="textarea" placeholder="Desease"></textarea>
                <!-- <div class="button">
                    <input type="submit" class="submit" value="Submit">
                    <input type="reset" class="submit reset" value="Reset"></div> -->
            </div>
            <div class="imagedetails">
                <div class="image">
                    <img src="map.jpg" width="210px" height="220px" alt="">
                </div>

                <div class="contactnumber">
                    <div class="heading">Contact Number</div>
                    <hr> +91 9927836164 <br>
                    <div class="heading">Email Id</div>
                    <hr> mohdnasir4257@gmail.com <br>
                    <div class="heading">Address</div>
                    <hr> Lane No 4C,post office road climent town Dehradun Uttarkhand 248002.
                </div>
            </div>
        </div>
    </form>
    <?php
        if(isset($_POST['logout']))
        {
            header("Location: login.php");
        }
    ?>
    <div class="containers">
    <div class="demo">
            <?php
                if(isset($_POST['Show']))
                {
                   /* $query="SELECT * FROM `login` where email = '$_POST[email]'";*/
                    $query="SELECT * FROM `students` where email = '$_SESSION[email]'";
                    $result=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                       
                        ?>
                                <div class="geu">
                                    <h3 class="a">Roll No</h3>
                                    <h3 class="a">Name</h3>
                                    <h3 class="a">Father's Name</h3>
                                    <h3 class="a">Class</h3>
                                    <h3 class="a">Mobile</h3>
                                    <h3 class="a">Email</h3>
                                    <h3 class="a">Password</h3>
                                    <h3 class="a">Remark</h3>
                                </div>
                                <div class="geu1">
                                    <input type="text" value="<?php echo $row['roll_no'];?>" name="" class="t" disabled>
                                    <input type="text" value="<?php echo $row['name'];?>" name="" class="t"disabled>
                                    <input type="text" value="<?php echo $row['father_name'];?>"name="" class="t"disabled>
                                    <input type="text" value="<?php echo $row['email'];?>" name="" class="t"disabled>
                                    <input type="text" value="<?php echo $row['class'];?>" name="" class="t"disabled>
                                    <input type="text" value="<?php echo $row['mobile'];?>" name="" class="t"disabled>
                                    <input type="text" value="<?php echo $row['password'];?>" name="" class="t"disabled>
                                    <input type="text" value="<?php echo $row['remark'];?>" name="" class="t"disabled>
                                </div>
                        <?php
                    }
                }
            ?>
         <?php
              if(isset($_POST['Edit']))
              {
                 /* $query="SELECT * FROM `login` where email = '$_POST[email]'";*/
                  $query="SELECT * FROM `students` where email = '$_SESSION[email]'";
                  $result=mysqli_query($connection,$query);
                  while($row=mysqli_fetch_assoc($result))
                  {
                     
                      ?>
                      <form action="student_edit.php" method="post" >
                          <div class="geu">
                                  <h3 class="a">Roll No</h3>
                                  <h3 class="a">Name</h3>
                                  <h3 class="a">Father's Name</h3>
                                  <h3 class="a">Email Id</h3>
                                  <h3 class="a">Class</h3>
                                  <h3 class="a">Mobile</h3>
                                  <h3 class="a">Password</h3>
                                  <h3 class="a">Remark</h3>
                              </div>
                              <div class="geu1">
                                  <input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>"  class="t" >
                                  <input type="text" name="name" value="<?php echo $row['name'];?>"  class="t">
                                  <input type="text" name="father_name" value="<?php echo $row['father_name'];?>" class="t">
                                  <input type="text" name = "email" value="<?php echo $row['email'];?>"  class="t">
                                  <input type="text" name="class" value="<?php echo $row['class'];?>"  class="t">
                                  <input type="text" name="mobile" value="<?php echo $row['mobile'];?>"  class="t">
                                  <input type="text" name="password" value="<?php echo $row['password'];?>"  class="t">
                                  <input type="text" name="remark" value="<?php echo $row['remark'];?>"  class="t">
                                  <br>
                                  <input type="submit" value="Save" value="Save" class="save">
                              </div>
                      </form>
                      <?php
                  }
              }
          ?>
    </div>
</body>
</html>