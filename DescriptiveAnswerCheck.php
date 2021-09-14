<!DOCTYPE html>
<html>
<head>
	<title> Descriptive Answer Check</title>
	<title>Faculty Panel</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="welcome.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
	<br>
	<h2> Descriptive Answer Check </h2>
	<br>
	<form method="POST">
		<input type="text" class="form-control" name="Username" aria-describedby="emailHelp" placeholder="Enter Username To Check Descriptive Answer">
		<br>
		<br>
		<input type="submit" name="checkAnswers" class="btn btn-primary" value="Check">
	</form>
	<br>
	<?php
				session_start();
		 		if(!$_SESSION['user_email_address']){
		 			header('Location:index.php');
		 		}
		 		$userName = "";
		 		if(isset($_POST['checkAnswers'])){
		 			$userName = $_POST['Username'];
		 		}

		 		$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

                $resultofAnswerMaster = mysqli_query($connection,"SELECT * FROM answer_master WHERE username = '$userName'");
                $conuntRowOfAnswerMaster = mysqli_num_rows($resultofAnswerMaster);

                if($conuntRowOfAnswerMaster > 0){
                	while ($dataofDescriptiveMaster = mysqli_fetch_array($resultofAnswerMaster)){
                	?>

                	Answer No.  <?php echo $dataofDescriptiveMaster['id']; ?>
                	<br>
                	Answer : <?php echo $dataofDescriptiveMaster['answer']; ?> <br>
                	<?php               		
                }
            }else{
            	echo "Exam Is Not Given By Entered Username..";
            }
                
	?>
</body>
</html>