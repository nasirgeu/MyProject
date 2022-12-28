<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="patientdetails.css" />
    <script src="https://kit.fontawesome.com/bea6ecd1c7.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <div>
        <a href="doctor.php" class="back">
            <div class="backbtn">Back</div>
        </a>
    </div>
    <p class="records">PATIENT DETAILS</p>
    <table>
      <thead>
        <tr>
          <th class="SN">Sr. No.</p></th>
          <th class="title">Unique Id</p></th>
          <th>Name</p></th>
          <th class="type">Father Name</p></th>
          
          <th>Mobile</p></th>
          <th class="Email1">Email</p></th>
        </tr>
      </thead>
      <tbody>
      <?php
        $servername="localhost";
        $username="root";
        $password="";
        $databse="project";
        $connection = mysqli_connect($servername,$username,$password);
        $db = mysqli_select_db($connection,$databse);
        $query="SELECT * FROM `students`";
        $result=mysqli_query($connection,$query);
        $row =mysqli_num_rows($result);
        $count=1;
        while($row = mysqli_fetch_array($result)){
        ?>
          <tr>
          <td class="SN"><p class="home1"><?php echo "$count";$count=$count+1; ?></p></td>
          <td class="title"><p class="home1"><?php echo $row['roll_no'] ?></p></td>
          <td><p class="home1"><?php echo $row['name'] ?></p></td>
          <td class="type"><p class="home1"><?php echo $row['father_name'] ?></p></td>
         
          <td><p class="home1"><?php echo $row['mobile'] ?></p></td>
          <td class="Email1"><p class="home1"><?php echo $row['email'] ?></p></td>
        </tr>
      <?php
        }
   ?>
      </tbody>
    </table>
  </body>
</html>
