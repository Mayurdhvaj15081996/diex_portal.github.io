<?php
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

	session_start();

	if(isset($_POST['submitMCQAnswer'])){
        	$answers = $_POST['flexRadioDefault'];
            $userName = $_SESSION['user_email_address'];

   			mysqli_query($connection,"INSERT INTO answer_master(username,answer) VALUES ('$userName','$answers')");
   			header('Location:giveExam.php');
   		}
?>