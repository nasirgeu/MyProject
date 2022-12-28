<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="bugreports.css" />
    <script src="https://kit.fontawesome.com/bea6ecd1c7.js" crossorigin="anonymous"></script>
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
    <p class="records">BUG REPORTS</p>
    <table>
      <thead>
        <tr>
          <th class="SN">Id</th>
          <th class="title">Title</th>
          <th>Assign To</th>
          <th class="project">Project</th>
          <th>Type</th>
          <th>Status</th>
          <th>Start Date</th>
          <th>Due Date</th>
          <th>Action</th>
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
        $query="SELECT * FROM `addbug`";
        $result=mysqli_query($connection,$query);
        $row =mysqli_num_rows($result);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
          <td class="SN"><p class="home1"> <?php echo $row['s_no']?></p></td>
          <td class="title"><p class="home1"><?php echo $row['title']?></p></td>
          <td><p class="home1"><?php echo $row['assign']?></p></td>
          <td class="project"><p class="home1"><?php echo $row['project']?></p></td>
          <td><p class="home1"><?php echo $row['type']?></p></td>
          <td ><p class="home1"><?php echo $row['status']?></p></td>
          <td><p class="home1"><?php echo $row['startdate']?></p></td>
          <td><p class="home1"><?php echo $row['duedate']?></p></td>
          <!-- <td><p class="home1"><a href="" class="btn"><i class="fas fa-edit"></i></a><a href="" class="btn"><i class="fas fa-trash"></i></a></p></td> -->
          <td><p class="home1"><a href="updatebug.php?s_no=<?php echo $row['s_no'];?>" class="btn" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fas fa-edit" area-hidden="true"></i></a><a href="deletebug.php?s_no=<?php echo $row['s_no'];?>" class="btn" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fas fa-user-minus"></i></a></p></td>
        </tr>
      <?php
        }
   ?>
      </tbody>
    </table>
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
  </body>
</html>
