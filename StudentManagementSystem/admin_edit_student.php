<?php
   /* session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project");
    /*$sql="SELECT * FROM `students`";
    $res=mysqli_query($connection,$sql);
    $result =mysqli_num_rows($res);
    echo $result;
    $sql="UPDATE `students` SET `name` = 'YES' WHERE `students`.`s_no` = 1";
    $res=mysqli_query($connection,$sql);
    if($res){
        echo " Yes";
    }
    else{
        echo "No";
    }*/
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project");
    if($connection and $db){
        echo " Yes";
    }
    else{
        echo "No";
    }
    $sql="UPDATE `students` SET `name` = '$_POST[name]' ,father_name='$_POST[father_name]',`class` = '$_POST[class]', 
    `mobile` ='$_POST[mobile]',`email` ='$_POST[email]',`password` ='$_POST[password]',`remark` ='$_POST[remark]' WHERE `students`.`roll_no` = '$_POST[roll_no]'";
    $res=mysqli_query($connection,$sql);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>
