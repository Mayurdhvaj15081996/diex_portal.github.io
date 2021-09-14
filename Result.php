<html>
<head>
    <link href = "style.css" rel="stylesheet">
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script type="text/javascript" src="welcome.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Result Page</title>
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
            </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <br><br>
        <br> 
        <h3>Welcome, <?php 
        $userNameofGmail = $_SESSION['user_first_name'];
        echo $userNameofGmail." ".$_SESSION['user_last_name']; ?></h3>
        <br>
        <br>
        <?php
            if(isset($_POST['enterUsername'])){

                $userName = $_POST['username'];

                $connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

                $queryForResultofAnswerMaster = mysqli_query($connection, "SELECT * FROM answer_master WHERE username = '$userName'");

                $queryForResultofMCQMaster = mysqli_query($connection, "SELECT * FROM mcq_master WHERE username = '$userName'");

                $result = 0;
                //This while loop is used to check how much answers are match from answer_master and mcq_master..
                while($rowsofAnswerMaster = mysqli_fetch_array($queryForResultofAnswerMaster) AND $rowsofMCQMaster = mysqli_fetch_array($queryForResultofMCQMaster)){

                    if($rowsofAnswerMaster['answer'] == $rowsofMCQMaster['answer']){
                        $result++;
                    }
                }       
            }
                echo "<h5> Your Marks : ".$result."</h5>";

                if($result == 0){
                    echo "I think you have not attempted exam yet if already attempted click on the below button.";
                    ?>
                    <form method="POST" action="ContactUS.php" id="ContactForm">
                        <br>
                        <br>
                         <input type="submit" name="goToContactUs" class="btn btn-primary" value="Contact Us" />
                    </form>
        <?php            
            }
        ?>

        <b>Note :</b>
            Please Click On The <b style="color: red"> Submit Marks </b> Button To Submit/Save Your Record/Marks Of Exam.
        <br> <br>
         <form method="POST" id="resultSubmit" action="submitMarks.php">
        <div class="form-group">
            <b> Username : </b>
            <input class="form-control" type="text" value="<?php echo $_SESSION['user_email_address']; ?>" aria-label="Disabled input example" disabled readonly>
            <input class="form-control" type="hidden" value="<?php echo $_SESSION['user_email_address']; ?>" name="usernameForSubmitMarks">
        </div> <br>
        <div class="form-group">
           <b> Marks: </b>
            <input class="form-control" type="text" value="<?php echo $result; ?>" aria-label="Disabled input example" disabled readonly>
            <input class="form-control" type="hidden" value="<?php echo $result; ?>" aria-label="Disabled input example" name="marksForSubmit">
        </div> <br>
         <div class="form-group">
           <b> Enter Semester: </b>
            <input class="form-control" type="text" aria-label="Disabled input example" placeholder="Enter Your Current Semester" name="semester">
        </div> <br>
        <div class="form-group">
           <b> Enter Course: </b>
            <input class="form-control" type="text" aria-label="Disabled input example" placeholder="Enter Your Current Course" name="course">
        </div> <br>
        <input type="submit" name="submitMarks" class="btn btn-primary" value="Submit Marks" />
    </form> 
    </div>
</body>
</html>