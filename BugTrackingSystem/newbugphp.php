<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bugtrackingsystem");
    $title=$_POST['title'];
    $project=$_POST['project'];
    $type=$_POST['type'];
    $assign=$_POST['assign'];
    $status=$_POST['status'];
    $startdate=$_POST['startdate'];
    $duedate=$_POST['duedate'];
    $time=$_POST['time'];
    $descriptions=$_POST['descriptions'];
    $query="INSERT INTO `addbug` (`s_no`, `title`, `project`, `type`, `assign`, `status`, `startdate`, `duedate`, `time`, `descriptions`) VALUES (NULL, '$title', '$project', '$type', '$assign', '$status', '$startdate', '$duedate', '$time', '$descriptions')";
	$result=mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Bug Added successfully.");
	window.location.href = "newbug.php";
</script>