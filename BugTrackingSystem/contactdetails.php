<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="bugtrackingsystem";
    $connection=mysqli_connect($servername,$username,$password);
    $db= mysqli_select_db($connection,$database);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $message=$_POST['message'];
    $query="INSERT INTO `contact` (`s_no`, `name`, `email`, `phone`, `address`, `gender`, `message`) VALUES (NULL, '$name', '$email', '$phone', '$address', '$gender', '$message')";
    $result=mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("your query has been submitted successfully.");
	window.location.href = "contact.php";
</script>