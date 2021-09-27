<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Faculty</title>
  <link rel="stylesheet" type="text/css" href="styleForFacultyAuth.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <br>
    <form method="POST" action="insert_faculty.php">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Provide Username" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Provide Password" required>
      <input type="submit" class="fadeIn fourth" value="Add Faculty" name="add_faculty">
    </form>
  </div>
</div>
</body>
</html>