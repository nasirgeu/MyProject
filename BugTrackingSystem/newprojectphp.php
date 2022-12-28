<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bugtrackingsystem");
    $title=$_POST['title'];
    $type=$_POST['type'];
    $manager=$_POST['manager'];
    $frontend=$_POST['frontend'];
    $backend=$_POST['backend'];
    $client_name=$_POST['client_name'];
    $descriptions=$_POST['descriptions'];
    $query="INSERT INTO `addproject` (`s_no`, `title`, `type`, `manager`, `frontend`, `backend`, `client_name`, `descriptions`) VALUES (NULL, '$title', '$type', '$manager', '$frontend', '$backend', '$client_name', '$descriptions')";
	$result=mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "newproject.php";
</script>