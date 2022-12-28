<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bugtrackingsystem");
    $sn=$_GET['s_no'];
    $title=$_POST['title'];
    $type=$_POST['type'];
    $manager=$_POST['manager'];
    $frontend=$_POST['frontend'];
    $backend=$_POST['backend'];
    $client_name=$_POST['client_name'];
    $descriptions=$_POST['descriptions'];
    // $query="INSERT INTO `addproject` (`s_no`, `title`, `type`, `manager`, `frontend`, `backend`, `client_name`, `descriptions`) VALUES (NULL, '$title', '$type', '$manager', '$frontend', '$backend', '$client_name', '$descriptions')";
    // '$email', '$dob', '$address', '$city', '$state', '$country', 'nasir')";
    $query= $query="UPDATE `addproject` SET `title` = '$title',`type` = '$type',`manager` = '$manager',`frontend` = '$frontend',`backend` = '$backend',`client_name` = '$client_name',`descriptions` = '$descriptions' WHERE `addproject`.`s_no` = $sn";
	$result=mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "projectreports.php";
</script>