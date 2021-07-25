<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Info</title>
</head>
<body>
	<?php 
		session_start(); 
		echo $_SESSION['user_first_name']
	?>
</body>
</html>