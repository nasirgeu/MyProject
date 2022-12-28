<?php
    include 'connection.php';
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $mobilenumber=$_POST['mobilenumber'];
    $occuptaion=$_POST['occupation'];
    $email=$_POST['email'];
    $branch=$_POST['branch'];
    $date=$_POST['date'];
    $course=$_POST['course'];
    $address=$_POST['address'];
    $query="INSERT INTO `student` (`name`, `contactnumber`, `gender`, `occupation`, `emailid`, `brach`, `course`, `dob`, `address`) VALUES ('$name', '$mobilenumber', '$gender', '$occuptaion', '$email', '$branch', '$course', '$date', '$address');";
    $result=mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("your query has been submitted successfully.");
	window.location.href = "apply.html";
</script>