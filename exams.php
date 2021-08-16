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
            <div> <a href="index.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Parul University</span> </a>
                <div class="nav_list"> <a href="userinfo.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">User Info</span> </a> </i><a href="ContactUs.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Contact Us</span> </a>  </a></div>
            </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <br>
        <br>
        <br>
        <br>
            <?php
               $connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

                $result = mysqli_query($connection,"SELECT * FROM mcq_master");
                $row = mysqli_fetch_array($result);
                $count = mysqli_num_rows($result);
                if($count > 0){
            ?>
                <div class="card" style="width: 18rem;">
                <img src="pexels-photo-276452.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo $row['exam_title']; ?></h5>
                <p class="card-text"><?php echo $row['exam_type']; ?></p>
                <a href="giveExam.php" class="btn btn-primary">Enter Into Exam</a>
            <?php
            }else{
                echo "<h4>"."No Exam is Available To Show"."</h4>";   
             }
        ?>
  </div>
</div>
    </div>
</html>