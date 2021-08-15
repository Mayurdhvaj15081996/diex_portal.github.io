<?php
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

	if(isset($_POST['submitQuestion'])){
		if(isset($_POST['submitQuestionConformation'])){
			$question = $_POST['question'];
			$option1 = $_POST['option1'];
			$option2 = $_POST['option2'];
			$option3 = $_POST['option3'];
			$option4 = $_POST['option4'];
			$answer = $_POST['answer'];

			mysqli_query($connection,"INSERT INTO mcq_master(question, option_1, option_2, option_3, option_4, answer) VALUES ('$question', '$option1', 'option2', 'option3', 'option4', 'answer')");
			header('Location:MCQ.php');
		}else{
			?>
			<script>
				alert("Please Enter All the Data And Check The Box For Conformation");
			</script>
			<?php
		}
	}
?>