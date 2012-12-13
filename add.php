<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die("Could not connect: " . mysql_error());
	}
	
	mysql_select_db("crud", $con);

	mysql_query("INSERT INTO item (name) VALUES ('" . $_POST["name"] . "');");
	mysql_close($con);
	header("Location: index.php");
?>