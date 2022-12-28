<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <link rel="stylesheet" href="studentdetails.css">
    <script src="https://kit.fontawesome.com/6a7c8c22ae.js" crossorigin="anonymous"></script>
    <title>Course Details</title>
</head>

<body>
<div class="top">
        <div class="top_text">
            Online Course <br> Registration
        </div>
    </div>
    <div class="navbar">
        <div class="navbarin">
            <a href="Course.html"> <span><div class="a" >HOME</div></span></a>
            <a href="about.html"><span class="Semester"><div class="a">ABOUT US</div></span></a>
            <a href="coursedetails.html"><span class="Department"><div class="a">ALL PROGRAMS</div></span></a>
            <a href="contact.php"><span class="contactus"><div class="a">CONTACT US</div></span></a>
            <a href="careersupport.html"><span class="Registration"><div class="a">CAREER SUPPORT</div></span></a>
            <a href="studentdeatils.php"><span class="ManageStudents"><div class="a">STUDENTS DETAILS</div></span></a>
            <a href="logout.php"> <span><div class="a">LOGOUT</div></span></a>
        </div>
    </div>
    <p class="records">STUDENTS DETAILS</p>
    <table>
      <thead>
        <tr>
          <th class="SN">Name</p></th>
          <th class="img">Mobile</p></th>
          <th>Gender</p></th>
          <th>Type</p></th>
          <th class="EmailId">Email Id</p></th>
          <th>Branch</p></th>
          <th>Course</p></th>
          <th class="add">Address</p></th>
        </tr>
      </thead>
      <tbody>
      <?php
        $servername="localhost";
        $username="root";
        $password="";
        $databse="onlinecourse";
        $connection = mysqli_connect($servername,$username,$password);
        $db = mysqli_select_db($connection,$databse);
        $query="SELECT * FROM `student`";
        $result=mysqli_query($connection,$query);
        $row =mysqli_num_rows($result);
        while($row = mysqli_fetch_array($result)){
        ?>
          <tr>
              <td class="SN"><p class="home1"><?php echo $row['name'];?></p></td>
              <td><p class="home1"><?php echo $row['contactnumber'];?></p></td>
              <td class="gender"><p class="home1"><?php echo $row['gender'];?></p></td>
              <td class="Email"><p class="home1"><?php echo $row['occupation'];?></p></td>
              <td class="EmailId"><p class="home1"><?php echo $row['emailid'];?></p></td>
              <td class="branch"><p class="home1"><?php echo $row['brach'];?></p></td>
              <td class="course"><p class="home1"><?php echo $row['course'];?></p></td>
              <td class="add"><p class="home1"><?php echo $row['address'];?></p></td>
      <?php
        }
   ?>
      </tbody>
    </table>
</body>

</html>