<<<<<<< Updated upstream
<?php
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Error While Establishing The Connection");

	$query = mysqli_query($connection,"TRUNCATE TABLE answer_master");

	header('Location:FacultyPanel.php');
?>
=======
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Faculty Panel</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="welcome.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<?php
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Error While Establishing The Connection");

	//This code is for delete answer of created exam.
	session_start();
		if(!$_SESSION['user_email_address']){
			header('Location:index.php');
		}
	$userName = $_SESSION['user_email_address'];

	$queryForGettingUserNameFromMCQMaster = mysqli_query($connection,"SELECT * FROM mcq_master WHERE username = '$userName'");	
	$countOfQuery = mysqli_num_rows($queryForGettingUserNameFromMCQMaster);

	$queryForGettingUserNameFromDescriptiveMaster = mysqli_query($connection,"SELECT * FROM descriptive_master WHERE username = '$userName'");
	$countOfQueryDescriptiveMaster = mysqli_num_rows($queryForGettingUserNameFromDescriptiveMaster);

	if($countOfQuery OR $countOfQueryDescriptiveMaster > 0){
	$query = mysqli_query($connection,"TRUNCATE TABLE answer_master");
	header('Location:FacultyPanel.php');
	}else{
		?>
		<br>
          <div class="alert alert-danger" role="alert">
                You Are Not Creator of This Exam.
          </div>
          <a href="FacultyPanel.php" class="btn btn-primary">Go To Faculty Panel</a> 
		<?php
	}
?>
</body>
</html>
>>>>>>> Stashed changes
