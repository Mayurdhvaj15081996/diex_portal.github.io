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
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Parul University</span> </a>
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
        ?> 
    </div>
</html>