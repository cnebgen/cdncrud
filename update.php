<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die("Could not connect: " . mysql_error());
	}
	
	mysql_select_db("crud", $con);

	mysql_query("UPDATE item SET name='" . $_POST["name"] . "' WHERE id='" . $_POST["id"] . "';");
	mysql_close($con);
	header("Location: index.php");
?>