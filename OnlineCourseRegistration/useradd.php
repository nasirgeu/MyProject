<?php
    include 'connection.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO `login` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$password')";
    $result=mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("your query has been submitted successfully.");
	window.location.href = "login.php";
</script>