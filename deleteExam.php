<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Delete Exam
  </title>
  <link rel="stylesheet" type="text/css" href="styleForFacultyAuth.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <br>

    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="examType" class="fadeIn third" name="exam_type" placeholder="Enter Type of Exam That You Want to Delete">
      <input type="submit" class="fadeIn fourth" value="DELETE" name="deleteExam">
    </form>
  </div>
 </div>
<?php

  $connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

  if(isset($_POST['deleteExam'])){
    $examType = $_POST['exam_type'];

   if($examType == "MCQ"){
      mysqli_query($connection,"TRUNCATE TABLE mcq_master");
    } 

    if($examType == "Descriptive"){
      mysqli_query($connection,"TRUNCATE TABLE descriptive_master");
    }
  }
?>
 </body>
 </html> 