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
	<br>
	<?php 
		//Retrived Session Data
		session_start();

		$examType = $_SESSION['examType'];
		$examTitle = $_SESSION['examTitle'];
		$numberOfQuestions = $_SESSION['numberOfQuestions'];

		//Printed the name of Exam, type of Exam and number of questions
		echo "Exam Title :"." ".$examTitle."<br>";
		echo "Exam Type :"." ".$examType."<br>";
		echo "Number of Questions :"." ".$numberOfQuestions."<br><br>";

		$questionNumber = 1;

		echo "Question Number :"." ".$questionNumber."<br>";		
	?>
		<form method="POST">
			<input class="form-control form-control-sm" type="text" placeholder="Enter Your Question">
			<br>
			Answers :
			<br>
			<input type="text" name="option1" placeholder="Option 1" class="form-control form-control-sm"><br>
			<input type="text" name="option2" placeholder="Option 2" class="form-control form-control-sm"><br>
			<input type="text" name="option3" placeholder="Option 3" class="form-control form-control-sm"><br>
			<input type="text" name="option4" placeholder="Option 4" class="form-control form-control-sm">
				<br>
					<div class="form-group form-check">
			    		<input type="checkbox" class="form-check-input" id="exampleCheck1" name="submitExamConformation">
			    		<label class="form-check-label" for="submitExam">Check me out for conformation</label>
			  		</div>
  				<br>
  						<input type="submit" name="submit_exam" class="btn btn-primary" value="Submit Question" />
  			<?php
				if(isset($_POST['submit_exam'])){
					if(isset($_POST['submitExamConformation'])){
						//Code of insert in database comes here....
					}
				}
			?>
		</form>
</body>
</html>