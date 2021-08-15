<?php
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");
	session_start();

	if(isset($_POST['createExam'])){
		if(isset($_POST['checkForConformation'])){
			
			$username = $_SESSION['user_email_address'];
			$examType = $_SESSION['examType'];
			$examTitle = $_SESSION['examTitle'];
			$numberOfQuestions = $_SESSION['numberOfQuestions'];
		
			$query = mysqli_query($connection,"INSERT INTO exam_master(username, title_of_exam, 	type_of_exam	, number_of_questions) VALUES ('$username','$examTitle','$examType','$numberOfQuestions')");
			if($examType == "MCQ"){
				header('Location:MCQ.php');
			}
			if($examType == "Descriptive"){
				header('Location:Descriptive.php');
			}
		}
	}
?>