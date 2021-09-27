<?php

include('config.php');

$login_button = '';

if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 if(!isset($token['error']))
 {
  $google_client->setAccessToken($token['access_token']);

  $_SESSION['access_token'] = $token['access_token'];

  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

if(!isset($_SESSION['access_token']))
{
 $login_button ='<a href="'.$google_client->createAuthUrl().'"><img src="GoogleSignIn.png" height = "100" width = "250"/></a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Parul University</title>
  <link href = "style.css" rel="stylesheet">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 </head>
 <body class="body">
  <div class="container">
   <div className = "Header">
            <div class = "Parul">
               Parul &reg;<br/>
            </div>
            <div class = "University">
               University
            </div>   
      <img src = "forMainPage.png" class="Image">
   </div>
   <div class="GButton">
    <font style="color: grey;padding-left: 110px;font-family: system-ui"> Login to Awesomeness !!</font> <br> <br>
   <font style="font-family: system-ui">Login with your Parul University Google Email ONLY. Sign out <br>
   of any other google account on your Chrome browser <br>
   before clicking on the <font style="font-weight: bold; font-style: italic;">Sign in with Google </font> button.</font>
<?php
   if($login_button == '')
   {
	   header('Location:Welcome.php');
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
?>
   </div>
  </div>
 </body>
</html>
	