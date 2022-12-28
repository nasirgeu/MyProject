<?php
    include 'connection.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contactnumber=$_POST['contactnumber'];
    $address=$_POST['address'];
    $subject=$_POST['subject'];
    $gender=$_POST['gender'];
    $occuptaion=$_POST['occupation'];
    $query1=$_POST['query'];
    $query="INSERT INTO `contact` (`name`, `email`, `contactnumber`, `address`, `subject`, `gender`, `occupation`, `query`) VALUES ('$name', '$email', '$contactnumber', '$address', '$subject', '$gender', '$occuptaion', '$query1')";
    $result=mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("your query has been submitted successfully.");
	window.location.href = "contact.php";
</script>