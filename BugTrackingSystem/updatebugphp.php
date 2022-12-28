 <?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bugtrackingsystem");
    $id=$_GET['s_no'];
    $title=$_POST['title'];
    $project=$_POST['project'];
    $type=$_POST['type'];
    $assign=$_POST['assign'];
    $status=$_POST['status'];
    $startdate=$_POST['startdate'];
    $duedate=$_POST['duedate'];
    $time=$_POST['time'];
    $descriptions=$_POST['descriptions'];
    $query="UPDATE `addbug` SET `title` = '$title',`project` = '$project',`type` = '$type',`assign` = '$assign',`status` = '$status',`startdate` = '$startdate',`duedate` = '$duedate',`time` = '$time',`descriptions` = '$descriptions' WHERE `addbug`.`s_no` = $id";
	$result=mysqli_query($connection,$query);
?> 
<script type="text/javascript">
	alert("Bug Report Edit successfully.");
	window.location.href = "bugreports.php";
</script>