<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bugtrackingsystem");
    $name=$_POST['name'];
    $level=$_POST['level'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $image=$_POST['image'];
    $query="INSERT INTO `adduser` (`s_no`, `name`, `level`, `username`, `password`, `mobile`, `email`, `dob`, `address`, `city`, `state`, `country`, `image`) VALUES (NULL, '$name', '$level', '$username', '$password', '$mobile', '$email', '$dob', '$address', '$city', '$state', '$country', 'nasir')";
	$result=mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("User Added successfully.");
	window.location.href = "newuser.php";
</script>