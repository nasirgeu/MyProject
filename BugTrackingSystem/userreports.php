<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://kit.fontawesome.com/bea6ecd1c7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="userreports.css" />
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
    <p class="records">USER REPORTS</p>
    <table>
      <thead>
        <tr>
          <th class="SN">Sr. No.</p></th>
          <th class="img">Image</p></th>
          <th>Name</p></th>
          <th>Mobile</p></th>
          <th class="Email">Email</p></th>
          <th>DOB</p></th>
          <th>Action</p></th>
        </tr>
      </thead>
      <tbody>
      <?php
        $servername="localhost";
        $username="root";
        $password="";
        $databse="bugtrackingsystem";
        $connection = mysqli_connect($servername,$username,$password);
        $db = mysqli_select_db($connection,$databse);
        $query="SELECT * FROM `adduser`";
        $result=mysqli_query($connection,$query);
        $row =mysqli_num_rows($result);
        while($row = mysqli_fetch_array($result)){
        ?>
          <tr>
              <td class="SN"><p class="home1"><?php echo $row['s_no'];?></p></td>
              <td class="img"><p class="home1"> <img src="bug1.jpg"  class= "image" alt=""> </p></td>
              <td><p class="home1"><?php echo $row['name'];?></p></td>
              <td><p class="home1"><?php echo $row['mobile'];?></p></td>
              <td class="Email"><p class="home1"><?php echo $row['email'];?></p></td>
              <td><p class="home1"><?php echo $row['dob'];?></p></td>
              <td><p class="home1"><a href="userupdate.php?s_no=<?php echo $row['s_no'];?>" class="btn" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fas fa-edit" area-hidden="true"></i></a><a href="deleteuser.php?s_no=<?php echo $row['s_no'];?>" class="btn" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fas fa-user-minus"></i></a></p></td>
          </tr>
      <?php
        }
   ?>
      </tbody>
    </table>
  </body>
</html>
