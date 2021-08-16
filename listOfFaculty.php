<html>
	<head>
		<link href = "style.css" rel="stylesheet">
	    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
	    </script>
	    <script type="text/javascript" src="welcome.js"></script>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
		<title>
			List of Faculties
		</title>
		<style type="text/css">
			body{
    background-color: #f7f7ff;
    margin-top:20px;
}
.btn-white {
    background-color: #fff;
    border-color: #e7eaf3;
}
.radius-15 {
    border-radius: 15px;
}
.contacts-social a {
    font-size: 16px;
    width: 36px;
    height: 36px;
    line-height: 36px;
    background: #ffffff;
    border: 1px solid #eeecec;
    text-align: center;
    border-radius: 50%;
    color: #2b2a2a;
}
.bg-info {
    background-color: #0dcaf0!important;
}
.bg-primary {
    background-color: #008cff!important;
}
.bg-danger {
    background-color: #fd3550!important;
}
.bg-warning {
    background-color: #ffc107!important;
}
		</style>
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
                <div class="nav_list"> <a href="Welcome.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="listOfFaculty.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Available Faculties</span> </a> <a href="addFaculty.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Add Faculty</span> </a> </div>
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
                <p class="card-text">Faculty</p> <br>
              </div>
		<?php
		}
    ?>
    </div>
</body>
</html>