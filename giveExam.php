<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Give MCQ Exam
	</title>
	<link href = "style.css" rel="stylesheet">
	    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
	    </script>
	    <script type="text/javascript" src="welcome.js"></script>
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
	<br>
<h3><!-- Title --></h3> <br>
	<?php
		 		session_start();
		 		if(!$_SESSION['user_email_address']){
		 			header('Location:index.php');
		 		}
		 		$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");
             
                $resultofAnswerMaster = mysqli_query($connection,"SELECT * FROM answer_master");

                //Here i fetch the data from answer_master to get the questions one by one	
                //Because initially answer_master is 0 and below i define variable $questionNumber with count of answer_master + 1.
                //After every answer submission question number will be incremented by 1.

                $countofAnswerMaster = mysqli_num_rows($resultofAnswerMaster);

                $questionNumber = $countofAnswerMaster + 1;

                $resultofMCQMaster = mysqli_query($connection,"SELECT * FROM mcq_master WHERE id='$questionNumber'");

                $resultofMCQMasterAll = mysqli_query($connection,"SELECT * FROM mcq_master");
                $countofMCQMaster = mysqli_num_rows($resultofMCQMasterAll);

                if($countofMCQMaster > 0){
                $dataofMCQMaster = mysqli_fetch_array($resultofMCQMaster);
                //while($dataofMCQMaster = mysqli_fetch_array($resultofMCQMaster)){         
                	?>
                		<h4> Subject : <?php echo $dataofMCQMaster['exam_title']; ?> </h4> <br>
                		<h4><?php echo $dataofMCQMaster['id']."."." ".$dataofMCQMaster['question']; ?> </h4> <br>
                		<form method="POST" action="insert_answers.php">
                			<div class="form-check">
							  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value=" <?php echo $dataofMCQMaster['option_1']; ?>">
							  <label class="form-check-label" for="flexRadioDefault1">
							    <?php echo $dataofMCQMaster['option_1']; ?>
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?php echo $dataofMCQMaster['option_2']; ?>">
							  <label class="form-check-label" for="flexRadioDefault1">
							    <?php echo $dataofMCQMaster['option_2']; ?>
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?php echo $dataofMCQMaster['option_3']; ?>
">
							  <label class="form-check-label" for="flexRadioDefault1">
							    <?php echo $dataofMCQMaster['option_3']; ?>
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?php echo $dataofMCQMaster['option_4']; ?>">
							  <label class="form-check-label" for="flexRadioDefault1">
							    <?php echo $dataofMCQMaster['option_4']; ?>
							  </label>
							</div> <br>
							<input type="Submit" name="submitMCQAnswer" class="btn btn-primary" value="Submit"> <br> <br>
                	<?php
                }
                if($countofMCQMaster == $countofAnswerMaster){
                    header('Location:examSubmissionSuccess.php');
                }	
	?>	
</form>
</html>