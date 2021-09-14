<!DOCTYPE html>
<html>
<head>
	<title> Give Descriptive Exam </title>
	<link href = "style.css" rel="stylesheet">
	    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
	    </script>
	    <script type="text/javascript" src="welcome.js"></script>
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
	<h2> Descriptive Exam </h2> <br>
	<?php
				session_start();
		 		if(!$_SESSION['user_email_address']){
		 			header('Location:index.php');
		 		}
		 		$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

                $resultofAnswerMaster = mysqli_query($connection,"SELECT * FROM answer_master");
                $countOfAnswerMaster = mysqli_num_rows($resultofAnswerMaster);

                $questionNumber = $countOfAnswerMaster + 1;

                $resultofDescriptiveMasterAll = mysqli_query($connection,"SELECT * FROM descriptive_master WHERE id='$questionNumber'");
                $resultofDescriptiveMaster = mysqli_query($connection,"SELECT * FROM descriptive_master");

                $countofDescriptiveMaster = mysqli_num_rows($resultofDescriptiveMaster);

                $dataofDescriptiveMaster = mysqli_fetch_array($resultofDescriptiveMasterAll);
                	?>
                    <h4> Subject : <?php echo $dataofDescriptiveMaster['exam_title']; ?></h4> <br>
                	Question Number : <?php echo $dataofDescriptiveMaster['id']; ?>
                	<br> 
                	<?php echo "<h3>".$dataofDescriptiveMaster['question']."</h3>"; ?>
                	<br>
                	<form method="POST" action="submitDescriptiveAnswer.php">
                		<div class="form-group">
    					<label for="exampleFormControlTextarea1"><?php echo "Answer No. ".$dataofDescriptiveMaster['id']; ?></label>
    						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="answer"></textarea>
  						</div>
  						<br>
  						<input type="submit" name="submit" class="btn btn-primary" value="Submit Answer">
  						<br>
  						<br>
                	</form>
                <?php

                if($countofDescriptiveMaster == $countOfAnswerMaster){
                    header('Location:examSubmissionSuccess.php');
                }	
    ?>
</body>
</html>