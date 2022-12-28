<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="onlinecourse";
    $connection=mysqli_connect($servername,$username,$password);
    $db= mysqli_select_db($connection,$database);
?>