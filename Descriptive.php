<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="welcome.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<title>Descriptive Exam Upload</title>
</head>
<body>
	<br>
	<h4>Desctiptive Exam Upload</h4>
	<br>
	<?php
		$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

		session_start();
		if(!$_SESSION['user_email_address']){
			header('Location:index.php');
		}

		$userName = $_SESSION['user_email_address'];
		$examTitle = $_SESSION['examTitle'];
		$examType = $_SESSION['examType'];
		$numberOfQuestions = $_SESSION['numberOfQuestions'];

		$result = mysqli_query($connection,"SELECT * FROM descriptive_master");

		$count = mysqli_num_rows($result);

		$questionNumber = $count + 1;

		echo "Exam Title :"." ".$examTitle."<br>";
		echo "Exam Type :"." ".$examType."<br>";
		echo "Number of Questions :"." ".$numberOfQuestions."<br><br>";  
		echo "Question Number :"." ".$questionNumber."<br><br>"; 
	?>
<form method="POST">
  <div class="form-group">
    <input class="form-control form-control-sm" type="text" placeholder="Enter Your Question" name="question">
  </div>
  <br>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="submitQuestionConformation">
    <label class="form-check-label" for="submitExam">Check me out for conformation</label>
  </div>
  <br>
  <input name="submitQuestion" type="submit" class="btn btn-primary"/>
</form>
<?php
	

	if(isset($_POST['submitQuestion'])){
		if(isset($_POST['submitQuestionConformation'])){

			$question = $_POST['question'];

			mysqli_query($connection,"INSERT INTO descriptive_master(username,exam_title,exam_type,question) VALUES ('$userName','$examTitle','$examType','$question')");

			header('Location:Descriptive.php');
		}
		$result = mysqli_query($connection,"SELECT * FROM descriptive_master");

		if($count = mysqli_num_rows($result) >= $_SESSION['numberOfQuestions']){
			header('Location:SuccessPageForFaculty.php');
		}else{
			?>
				<script>
					alert("Please Check The CheckBox To Submit The Answer");
				</script>
			</body>
			<?php
		}
	}
?>
</body>
</html>