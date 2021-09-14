<?php
				$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

                $userName = $_SESSION['user_email_address'];
                if(isset($_POST['submit'])){

                	$answer = $_POST['answer'];

                	$queryForInsertAnswer = mysqli_query($connection,"INSERT INTO answer_master(username,answer) VALUES ('$userName','$answer')");

                	header('Location:GiveDescriptiveExam.php');
                }
?>