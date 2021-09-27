e<html>
	<head>
		<link href = "style.css" rel="stylesheet">
	    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
	    </script>
	    <script type="text/javascript" src="welcome.js"></script>
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
		<title>
			Examination Cordinator Panel
		</title>
	</head>
	<body id="body-pd">
		<?php
        if(isset($_GET["alt"]) && $_GET["alt"] == "T"){
            ?>
            <script type="text/javascript">
                    alert(" Entered User Is Available");
                </script>
        <?php
        header('Location:ECPanel.php');
    }
    		session_start();
			if(!$_SESSION['user_email_address']){
            header('Location:index.php');
        }
		?>
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="<?php echo $_SESSION['user_image'];?>" alt="Image not available"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="Welcome.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Parul University</span> </a>
            <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="listOfFaculty.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Available Faculties</span> </a> <a href="addFaculty.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Add Faculty</span> </a> <a href="RemoveFaculty.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Remove Faculty</span> </a> <a href="dataFromContactUS.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Support</span> </a> </div>
            </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
    	<br>
    	<br>
    	<br>

        <h4>
        	<font color="red">Click on Add Faculty To </font> <b> Add Faculty </b> <br> <br>
        </h4>
        <ul>
        	<li>
        		After click on add faculty you will be able to see a pop up to add faculty
        	</li>
        	<li>
        		Enter email id of that faculty and provide unique password to her/him.
        	</li>    
    	</ul>
    </div>
</html>