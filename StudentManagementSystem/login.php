<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="" class="logo" width="80%">
        <div class="geu">
            <h3>GEU Student <br> Management System</h3>
        </div>
        <div>
            <form action="" method="post">
            <input type="submit" value="Student Login" name="student_login" class="submit" id="submit1">
            <br>
            <input type="submit" value="Admin Login" name="admin_login" class="submit" id="submit2">
            </form>
        </div>
    </div>
    <?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
</body>
</html>