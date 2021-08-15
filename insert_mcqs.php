<?php
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");
	session_start();
	if(!$_SESSION['user_email_address']){
            header('Location:index.php');
        } 

	if(isset($_POST['submitQuestion'])){
		if(isset($_POST['submitQuestionConformation'])){

			$userName = $_SESSION['user_email_address'];
			$examTitle = $_SESSION['examTitle'];
			$examType = $_SESSION['examType'];
			$numberOfQuestions = $_SESSION['numberOfQuestions'];

			$question = $_POST['question'];
			$option1 = $_POST['option1'];
			$option2 = $_POST['option2'];
			$option3 = $_POST['option3'];
			$option4 = $_POST['option4'];
			$answer = $_POST['answer'];

			mysqli_query($connection,"INSERT INTO mcq_master
				(username,exam_title,exam_type,question,option_1,option_2,option_3,option_4, answer) VALUES 
				('$userName','$examTitle','$examType','$question','$option1','$option2','$option3','$option4','$answer')");
			header('Location:MCQ.php');
		}
		$result = mysqli_query($connection,"SELECT * FROM mcq_master");
		if($count = mysqli_num_rows($result) >= $_SESSION['numberOfQuestions']){
			header('Location:SuccessPageForFaculty.php');
		}else{
			?>
			<script>
				alert("Please Enter All the Data And Check The Box For Conformation");
			</script>
			<?php
		}
	}
?>