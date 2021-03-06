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
<body id="body-pd"> 
                  <?php 
                        session_start();
                        if(!$_SESSION['user_email_address']){
                        header('Location:index.php');
                      } 
                     ?>
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="<?php echo $_SESSION['user_image']; ?>" alt="Image Not Available"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="Welcome.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Parul University</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Create Exam</span> </a> <a href="deleteExam.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Delete Exam</span> </a> </a> <a href="deleteAnswers.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name"> Delete Answers </span> </a> <a href="DescriptiveAnswerCheck.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Check Descriptive</span> </a> </div>
            </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light"><br>
        <br> <br>
        <h2> Create Exam </h2>
        <br>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Exam Title</label>
    <input type="text" class="form-control" name="examTitle" aria-describedby="emailHelp" placeholder="Enter exam title">
  </div> <br>

  <select class="form-select" aria-label="Default select example" name="examType">
    <option selected>Select Exam Type</option>
    <option value="MCQ">MCQs</option>
    <option value="Descriptive">Descriptive</option>
  </select> <br>

  <div class="form-group">
    <label for="exampleInputPassword1">Enter Number of Questions</label>
    <input type="text" class="form-control" name="numberOfQuestions" placeholder="Enter number of questions">
  </div> <br>


  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="checkForConformation"> 
    <label class="form-check-label" for="exampleCheck1">Check me out for conformation</label>
  </div> <br>
  <input type="submit" name="createExam" class="btn btn-primary" value="Create an Exam">
</form>
<?php 

    if(isset($_POST['createExam'])){
        if(isset($_POST['checkForConformation'])){

            $examTitle = $_POST['examTitle'];
            $examType = $_POST['examType'];
            $numberOfQuestions = $_POST['numberOfQuestions'];
            $date = date("Y/m/d");
            $username = $_SESSION['user_email_address'];

             //Used Session for getting data of Exam
             $userName = $_SESSION['user_email_address'];
             $_SESSION['examType'] = $examType;
             $_SESSION['examTitle'] = $examTitle;
             $_SESSION['numberOfQuestions'] = $numberOfQuestions;

             $connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

<<<<<<< Updated upstream
=======

             //This logic is for getting count of mcq_master and descriptive_master to check any exam is available or not.. 
             $queryForGettingDataFromMCQMaster = mysqli_query($connection,"SELECT * FROM mcq_master");

             $countOfMCQMaster = mysqli_num_rows($queryForGettingDataFromMCQMaster);

             $queryForGettingDataFromDescriptiveMaster = mysqli_query($connection,"SELECT * FROM descriptive_master");

             $countOfDescriptiveMaster = mysqli_num_rows($queryForGettingDataFromDescriptiveMaster);

              if($countOfMCQMaster OR $countOfDescriptiveMaster > 0){
              ?>
                <script type="text/javascript">
                  alert("Any Exam Is Still Ongoing Please Wait Until its Finished");
                </script>
              <?php
              }else{

>>>>>>> Stashed changes
             $queryofExamMaster = mysqli_query($connection,"INSERT INTO exam_master(exam_title, exam_type, number_of_questions, date_of_examination, username) VALUES ('$examTitle', '$examType', '$numberOfQuestions', '$date', '$username')");

            if($examType == "MCQ"){
                header('Location:MCQ.php');
            }
            if($examType == "Descriptive"){
                header('Location:Descriptive.php');
            }
        }
      }
      ?>
        <script>
            alert("Please Fill All The Details And Check For Conformation");
        </script>
    <?php
    }
?>
</body>
</html>