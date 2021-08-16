<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Remove Faculty</title>
  <link rel="stylesheet" type="text/css" href="styleForFacultyAuth.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <br>
    <form method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Provide Username To Delete Faculty" required>
      <input type="submit" class="fadeIn fourth" value="Remove Faculty" name="remove_faculty">
    </form>
  </div>
</div>
<?php
    $connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

    if(isset($_POST['remove_faculty'])){
      $userName = $_POST['username'];

      $query = mysqli_query($connection,"DELETE FROM faculty_master WHERE username = '$userName'");

      if($query >= 1){
      ?>
        <script>
            alert("Faculty Removed From Record");
        </script>
      <?php
      header('Location:ECPanel.php');
  }else{
      ?>
        <script>
          alert("Entered Faculty is Not Available");
        </script>
      <?php
    }
  }
  ?>
</body>
</html>