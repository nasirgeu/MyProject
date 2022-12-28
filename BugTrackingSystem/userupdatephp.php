<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bugtrackingsystem");
    $sn=$_GET['s_no'];
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
    echo $name;
    echo $level;
    echo $username;
    echo $password;
    echo $mobile;
    echo $email;
    echo $dob;
    echo $address;
    // $query="INSERT INTO `adduser` (`s_no`, `name`, `level`, `username`, `password`, `mobile`, `email`, `dob`, `address`, `city`, `state`, `country`, `image`) VALUES (NULL, '$name', '$level', '$username', '$password', '$mobile', '$email', '$dob', '$address', '$city', '$state', '$country', 'nasir')";
    $query= $query="UPDATE `adduser` SET `name` = '$name',`level` = '$level',`username` = '$username',`password` = '$password',`mobile` = '$mobile',`email` = '$email',`dob` = '$dob',`address` = '$address',`city` = '$city',`state` = '$state',`country` = '$country' WHERE `adduser`.`s_no` = $sn";
    // $query="SELECT * FROM `adduser`";
	$result=mysqli_query($connection,$query);
    if($result)
        echo "YES";
    else    
        echo " no";
?>
<script type="text/javascript">
	alert("User Edit successfully.");
	window.location.href = "userreports.php";
</script>