<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin_login.css">
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="" class="logo" width="80%">
        <div class="geu">
            <h3>GEU Student <br> Management System</h3>
        </div>
        <form action="" method="post" class="admin_form">
            <label for="email">Email </label>
            <div>
                <input type="email" name="email" id="email" required>
            </div>
            <label for="password">Password </label>
            <div>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" value="Admin Login" name="submit" id="submit">
        </form>
    </div>
    <?php
			session_start();
            if(isset($_POST['submit']))
            {
                $servername="localhost";
                $username="root";
                $password="";
                $connection=mysqli_connect($servername,$username,$password);
                $database=mysqli_select_db($connection,"project");
                $query="SELECT * FROM `login` where email = '$_POST[email]'";
                $result=mysqli_query($connection,$query);
                while($row= mysqli_fetch_assoc($result))
                {
                    if($row['email']==$_POST['email'])
                    {
                        if($row['password']==$_POST['password'])
                        {
                            $_SESSION['name']=$row['name'];
                            $_SESSION['email']=$row['email'];
                            header("Location: admin_dashboard.php");
                        }
                    }
                }
            }
		?>
</body>
</html>