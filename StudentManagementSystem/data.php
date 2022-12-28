<?php
    $servername="localhost";
    $username="root";
    $password="";
    $DATABASE="nasir";
    $connection=mysqli_connect($servername, $username,$password, $DATABASE);
    if($connection)
    {
        echo "Succesfull.";
        echo "<br>";
    }
   /* $sql1="CREATE DATABASE Nasir";
    $result = mysqli_query($connection, $sql1);
    echo var_dump($result);*/
?>