<html>
	<head>
		<link href = "style.css" rel="stylesheet">
	    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
	    </script>
	    <script type="text/javascript" src="welcome.js"></script>
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
		<title>
			List of Faculties
		</title>
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
        <div class="header_img"> <img src="<?php echo $_SESSION['user_image'];?>" alt="Image not available"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="Welcome.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Parul University</span> </a>
            </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
    	<br>
    	<br>
    	<br>
        <h4>
        	<font color="red">List of Faculties</font></h4> <br>
    <?php
    	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

		$result = mysqli_query($connection,"SELECT * FROM faculty_master");

		while($data = mysqli_fetch_array($result)){
		?>
			<div class="card" style="width: 18rem;">
                <img src="<?php echo $_SESSION['user_image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo $data['username']; ?></h5>
                <p class="card-text">Faculty</p> 
              </div>
              <br>
              <a href="ECPanel.php" class="btn btn-primary">Go To EC Panel</a>
		<?php
		}
    ?>
    </div>
</body>
</html>