<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="navigation">
      <ul>
      <li><a href="home.php" class="nava">Home</a></li>
        <li><a href="about.php" class="nava">About Us</a></li>
        <li><a href="login.php" class="nava">Login</a>
          <!-- <ul>
                <li>Home</li>
                <li>Home</li>
                <li>HOme</li>
          </ul> -->
       </li>
        <li><a href="contact.php" class="nava">Contact Us</a></li>
        <li><a  href="https://en.wikipedia.org/wiki/Bug_tracking_system#:~:text=A%20bug%20tracking%20system%20or,type%20of%20issue%20tracking%20system.&text=Typically%20bug%20tracking%20systems%20are%20integrated%20with%20other%20project%20management%20software." target="_blank" class="nava">More Details </a></li>
      </ul>
    </div>
    <div class="container">
      <div class="details">
        <p class="about">LOGIN YOUR ACCOUNT</p>
        <hr/>
        <form action="" method="post" class="form">
            <p class="username">Username</p>
            <input type="text" name="username" id="" class="name" autocomplete="off" placeholder="Enter Username">
            <br>
            <p id="password">Password</p>
            <input type="password" name="password" id="" autocomplete="off" class="name" placeholder="Enter Password">
            <br>
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
    <?php
			session_start();
            if(isset($_POST['submit']))
            {
                $servername="localhost";
                $username="root";
                $password="";
                $connection=mysqli_connect($servername,$username,$password);
                $database=mysqli_select_db($connection,"bugtrackingsystem");
                $query="SELECT * FROM `login` where username = '$_POST[username]'";
                $result=mysqli_query($connection,$query);
                while($row= mysqli_fetch_assoc($result))
                {
                    if($row['username']==$_POST['username'])
                    {
                        if($row['password']==$_POST['password'])
                        {
                            $_SESSION['name']=$row['name'];
                            $_SESSION['email']=$row['email'];
                            header("Location: dashboard.php");
                        }
                        else{
                          echo "Wrong password";
                        }
                    }
                }
            }
		?>
  </body>
</html>
