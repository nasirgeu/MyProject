x   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/6a7c8c22ae.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div class="image"><img class="i" src="doctor.jpg" alt=""></div>
        <div class="details">
            <div class="login">
                <div class="login1">Login</div>
            </div>
            <div class="name"><input name="email" autocomplete="off" class="nameinput" type="text" placeholder="Unique Id" required> </div>
            <div class="eye"><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i></div>
            <div class="name"><input name="password" id="pass" class="nameinput" type="password" placeholder="Password" required> </div> <br>

            <span class="new">
                <select name="" class="user" id="">
                    <option value="Doctot">Doctor</option>
                    <option value="Patient">Patient</option>
                    <option value="Patient">Hospital</option>
                </select>
            </span> <br>
            <input class="btn" type="submit" name="submit" value="Login">
        </div>
    </form>

    <script>
        var state = false;

        function toggle() {
            if (state) {
                document.getElementById("pass").setAttribute("type", "password");
                state = false;
            } else {
                document.getElementById("pass").setAttribute("type", "text");
                state = true;
            }
        }
    </script>
    
    <?php
			session_start();
            if(isset($_POST['submit']))
            {
                $servername="localhost";
                $username="root";
                $password="";
                $connection=mysqli_connect($servername,$username,$password);
                $database=mysqli_select_db($connection,"onlinecourse");
                $query="SELECT * FROM `login` where email = '$_POST[email]'";
                $result=mysqli_query($connection,$query);
                $temp=1;
                while($row= mysqli_fetch_assoc($result))
                {
                    $temp=0;
                    if($row['email']==$_POST['email'])
                    {
                        if($row['pass']==$_POST['password'])
                        {
                            $_SESSION['name']=$row['name'];
                            $_SESSION['email']=$row['email'];
                            header("Location: doctor.php");
                        }
                        
                    }
                }
                function function_alert($message) {
                    echo "<script>alert('$message');</script>";
                }
                if($temp==0){
                    function_alert("Email or Pasword is Wrong.");
                }
            }
		?>
</body>

</html>
