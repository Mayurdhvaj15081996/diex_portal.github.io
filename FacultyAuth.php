<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Faculty Authentication</title>
  <link rel="stylesheet" type="text/css" href="styleForFacultyAuth.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <br>

    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Enter Your Username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Enter Your Password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="login">
    </form>
<?php
  //All the password and usernames is defined constant..
  $username = "Faculty";
  $password = "Faculty@1234";
  $usernameForEC = "Admin";
  $passwordForEC = "Admin@1234";
  if(isset($_POST['login'])){
    $getUsername = $_POST['username'];
    $getPassword = $_POST['password'];

    if($username == $getUsername && $password == $getPassword){
      header("Location:FacultyPanel.php");
    }
    if($usernameForEC == $getUsername && $passwordForEC == $getPassword){
      header('Location:ECPanel.php');
    }
    else
    {
     ?>
     <script>
       alert("You Entered Wrong Username or Password");
     </script>
     <?php
    }
  }

?>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="ContactUs.php">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>

