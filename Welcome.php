<html>
<head>
    <link href = "style.css" rel="stylesheet">
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script type="text/javascript" src="welcome.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Parul University</title>
</head>
 <body id="body-pd">  
<?php
        session_start();          
?>
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="<?php echo $_SESSION['user_image']; ?>" alt="Image Not Available"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Parul University</span> </a>
                <div class="nav_list"> <a href="userinfo.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">User Info</span> </a> <a href="FacultyAuth.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Faculty And EC Login</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Exams</span> </a> <a href="ContactUs.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Contact Us</span> </a>  </a></div>
            </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <br><br>
        <br> 
        <h3>Welcome To The Department's Examination Portal</h3>      
        <h4 style="color:red;">Instructions</h4>
        <ul>
            <li>For Students</li>
            <ol>
                <li>Please log In with your college's gmail ID.</li>
                <li>Log in only you exam is scheduled.</li>
                <li>If you are already logged in with your college's gmail id please go to <b>Exam</b> section to appear exam.</li>
            </ol>
        </ul>
        <br>
         <ul>
            <li>For Faculties</li>
            <ol>
                <li>To create an exam you need to login with your given faculty credentials.</li>
                <li>To log in with you faculty credentials go to <b>Faculty Login</b> sectoion.</li>
            </ol>
        </ul>
    </div>
</html>