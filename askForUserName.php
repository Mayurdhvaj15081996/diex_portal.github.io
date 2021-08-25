<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Faculty or EC Authentication
  </title>
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
    <form method="POST" action="Result.php">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Enter Username To Know Result">
      <input type="submit" class="fadeIn fourth" value="CHECK" name="enterUsername">
    </form>
  </div>
</div>
</body>
</html>