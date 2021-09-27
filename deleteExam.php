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

 
<?php
  session_start();
    if(!$_SESSION['user_email_address']){
      header('Location:index.php');
  }
  $userName = $_SESSION['user_email_address'];
  $connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

  $queryForGettingUserNameFromMCQMaster = mysqli_query($connection,"SELECT * FROM mcq_master WHERE username = '$userName'");  
  $countOfQuery = mysqli_num_rows($queryForGettingUserNameFromMCQMaster);

<<<<<<< Updated upstream
   if($examType == "MCQ"){
      mysqli_query($connection,"TRUNCATE TABLE mcq_master");
      header('Location:FacultyPanel.php');
    } 

    if($examType == "Descriptive"){
      mysqli_query($connection,"TRUNCATE TABLE descriptive_master");
      header('Location:FacultyPanel.php');
=======
  $queryForGettingUserNameFromDescriptiveMaster = mysqli_query($connection,"SELECT * FROM descriptive_master WHERE username = '$userName'");
  $countOfQueryDescriptiveMaster = mysqli_num_rows($queryForGettingUserNameFromDescriptiveMaster);

  if($countOfQuery OR $countOfQueryDescriptiveMaster > 0){
    ?>
      <body>
        <div class="wrapper fadeInDown">
        <div id="formContent">
        <br>
      <form method="POST">
        <input type="text" id="examType" class="fadeIn third" name="exam_type" placeholder="Enter Type of Exam That You Want to Delete">
        <input type="submit" class="fadeIn fourth" value="DELETE" name="deleteExam">
      </form>
    </div>
    </div>
    <?php
      if(isset($_POST['deleteExam'])){
      $examType = $_POST['exam_type'];
      
     if($examType == "MCQ"){
          mysqli_query($connection,"TRUNCATE TABLE mcq_master");
          header('Location:FacultyPanel.php');
      }  
         
      if($examType == "Descriptive"){
          mysqli_query($connection,"TRUNCATE TABLE descriptive_master ");
          header('Location:FacultyPanel.php');
      }
>>>>>>> Stashed changes
    }
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

 <!-- if(isset($_POST['deleteExam'])){
    $examType = $_POST['exam_type'];
    
   if($examType == "MCQ"){
        mysqli_query($connection,"TRUNCATE TABLE mcq_master");
        header('Location:FacultyPanel.php');
    }  
       
    if($examType == "Descriptive"){
        mysqli_query($connection,"TRUNCATE TABLE descriptive_master ");
        header('Location:FacultyPanel.php');
    }
  }-->