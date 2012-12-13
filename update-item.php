<!DOCTYPE html>

<html>

<head>
	<title>CDN:CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/cdncrud.css">
</head>
	
<body>
	
	<div id="content">
		<h1>Update Item</h1>
		<?php
			$itemname= $_GET["name"];
			$itemid= $_GET["id"];
		?>
		<form action="update.php" method="post">
		<input type="hidden" name="id" value=<?php echo $itemid ?>>
		Item Name: <input type="text" name="name" value=<?php echo $itemname ?>>
		<input type="submit">
		</form>
	</div id="content">
</body>

</html>