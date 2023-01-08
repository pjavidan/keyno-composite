<?php
$usernames = array("user1", "user2", "user3", "admin");
$passwords = array("password1", "password2", "password3", "admin");
$page = "protected_page.php";

for($i=0;$i<count($usernames);$i++)
{
  $logindata[$usernames[$i]]=$passwords[$i];
}

$found = 0; 
for($i=0;$i<count($usernames);$i++) 
{ 
   if ($usernames[$i] == $_POST["username"]) 
   { 
   $found = 1; 
   } 
} 
if ($found == 0) 
{ 
   header('Location: login.php?login_error=1'); 
   exit; 
}

if($logindata[$_POST["username"]]==$_POST["password"])
{
   session_start();
   $_SESSION["username"]=$_POST["username"];
   header('Location: '.$page);
   exit;
}
else
{
   header('Location: login.php?login_error=1');
   exit;
}
?> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Keyno Guidance  & Control</title>
<meta name="description" content="Keyno Composite Structure">
<meta name="keywords" content="Keyno Composite Structure">
<meta name="author" content="Keyno Composite Structure">
<link href="Untitled-1.ico" rel="shortcut icon" type="image/x-icon">
<style type="text/css">
body
{
   background-color: #FFFFFF;
   background-image: url(images/honey_comb_patern-1100.jpg);
   background-attachment: fixed;
   background-position: center center;
   background-repeat: no-repeat;
   color: #000000;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   line-height: 1.1875;
   margin: 0;
   padding: 0;
}
a
{
   color: #87CEFA;
   text-decoration: underline;
}
a:visited
{
   color: #0000FF;
}
a:active
{
   color: #9370DB;
}
a:hover
{
   color: #0000CD;
   text-decoration: underline;
}
</style>
</head>
<body>
</body>
</html>