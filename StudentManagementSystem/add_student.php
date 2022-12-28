<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project");
	$roll_no=$_POST['roll_no'];
	$name=$_POST['name'];
	$father_name=$_POST['father_name'];
	$class=$_POST['class'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$remark=$_POST['remark'];
	$query="INSERT INTO `students` (`s_no`, `roll_no`, `name`, `father_name`, `class`, `mobile`, `email`, `password`, `remark`) VALUES (NULL, '$roll_no', '$name', '$father_name', '$class', '$mobile', '$email', '$password', '$remark')";
	$result=mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_dashboard.php";
</script>