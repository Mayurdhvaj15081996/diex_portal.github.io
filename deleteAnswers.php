<?php
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Error While Establishing The Connection");

	$query = mysqli_query($connection,"TRUNCATE TABLE answer_master");

	header('Location:FacultyPanel.php');
?>