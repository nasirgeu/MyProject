<script type="text/javascript">
	if(confirm("Are you sure want to delete ?"))
	{
		document.write("<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bugtrackingsystem");
        $query="DELETE FROM `addbug` WHERE `addbug`.`s_no` = $_GET[s_no]";
		$query_run = mysqli_query($connection,$query);
		?>");
	 	window.location.href = "bugreports.php";
	}
	else
	{
		window.location.href = "bugreports.php";
	}
</script>
