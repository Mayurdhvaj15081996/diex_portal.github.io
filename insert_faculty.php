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
<body>
<?php
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

	if(isset($_POST['add_faculty'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $queryForSelect = mysqli_query($connection,"SELECT username FROM faculty_master WHERE username='$username'");

        $countOfQueryForSelect = mysqli_num_rows($queryForSelect);

        if($countOfQueryForSelect > 0){
        	?>
          <br>
          <div class="alert alert-danger" role="alert">
                Faculty Already Available.
          </div>
          <form method="POST" action="ECPanel.php">
            <input type="submit" name="createExam" class="btn btn-primary" value="Go To EC Panel">
          </form>       		
       	<?php  			
       }else{
        	 $query = mysqli_query($connection,"INSERT INTO faculty_master(username,password) VALUES ('$username','$password')");

        	 header('Location:ECPanel.php');
        }       
    }
?>
</body>
</html>