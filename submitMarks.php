<?php 
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

	$date = date("Y/m/d");

	if(isset($_POST['submitMarks'])){
		$userName = $_POST['usernameForSubmitMarks'];
		$marks = $_POST['marksForSubmit'];
		$course = $_POST['course'];
		$semester = $_POST['semester'];
	}

	$queryForInsertMarks = mysqli_query($connection,"INSERT INTO result_master(username,course,semester,marks,date_of_marks_submit) VALUES ('$userName','$course','$semester','$marks','$date')");

	header('Location:Welcome.php');
?>

