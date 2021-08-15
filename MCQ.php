<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="welcome.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<title>MCQs Exam Upload</title>
</head>
<body>
	<br>
		<h4>MCQ Exam Upload</h4>
	<?php 
		//Retrived Session Data
		session_start();
		if(!$_SESSION['user_email_address']){
            header('Location:index.php');
        } 

		$examType = $_SESSION['examType'];
		$examTitle = $_SESSION['examTitle'];
		$numberOfQuestions = $_SESSION['numberOfQuestions'];
		$username = $_SESSION['user_email_address'];

		//Printed the name of Exam, type of Exam and number of questions
		echo "Exam Title :"." ".$examTitle."<br>";
		echo "Exam Type :"." ".$examType."<br>";
		echo "Number of Questions :"." ".$numberOfQuestions."<br><br>";

		//Database Connection For Fetching The Data For ID..
		$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

		$result = mysqli_query($connection,"SELECT * FROM mcq_master");
		$count = mysqli_num_rows($result);

		$questionNumber = $count + 1;

		echo "Question Number :"." ".$questionNumber."<br>";		
	?>
		<form method="POST" action="insert_mcqs.php">
			<input class="form-control form-control-sm" type="text" placeholder="Enter Your Question" name="question">
			<br>
			Options :
			<br>
			<input type="text" name="option1" placeholder="Option 1" class="form-control form-control-sm"><br>
			<input type="text" name="option2" placeholder="Option 2" class="form-control form-control-sm"><br>
			<input type="text" name="option3" placeholder="Option 3" class="form-control form-control-sm"><br>
			<input type="text" name="option4" placeholder="Option 4" class="form-control form-control-sm">
			Answer :
			<input type="text" name="answer" placeholder="Enter Right Answer Here.." class="form-control form-control-sm">
				<br>
					<div class="form-group form-check">
			    		<input type="checkbox" class="form-check-input" id="exampleCheck1" name="submitQuestionConformation">
			    		<label class="form-check-label" for="submitExam">Check me out for conformation</label>
			  		</div>
  				<br>
  						<input type="submit" name="submitQuestion" class="btn btn-primary" value="Submit Question" />
		</form>
</body>
</html>