<!DOCTYPE html>

<html>

<head>
	<title>CDN:CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/cdncrud.css">
</head>
	
<body>

	<div id="content">
		<h1>Item Table</h1>

		<?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
				die("Could not connect: " . mysql_error());
			}
			
			mysql_select_db("crud", $con);
			$result = mysql_query("SELECT * FROM item;");
			echo "<table class=\"itemtable\">";
			echo "<tr>";
			echo "<th>ID</th><th>Name</th><th colspan=\"2\">Controls</th>";
			echo "<tr>";
			while($row = mysql_fetch_array($result))
			{
			  echo "<td>" .$row["id"] . "</td><td>" . $row["name"] . "</td>";
			  echo " <td><a href=\"update-item.php?id=" . $row["id"] . "&" . "name=" . $row["name"] . "\">Update</a></td>";
			  echo " <td><a href=\"delete-item.php?id=" . $row["id"] . "\">Delete</a></td>";
			  echo "</tr>";
			}
			echo "</table>";
			mysql_close($con);
			
		?>

		<p><a href="add-item.php">Add Item</a></p>
	</div>

</body>

</html>