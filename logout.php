<?php 
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Keyno Guidance  & Control</title>
<meta name="description" content="Keyno Composite Structure">
<meta name="keywords" content="Keyno Composite Structure">
<meta name="author" content="Keyno Composite Structure">
<link href="kgc.ico" rel="shortcut icon" type="image/x-icon">
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
#wb_Text1 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: center;
}
#wb_Text1 div
{
   text-align: center;
}
</style>
</head>
<body>
<div id="wb_Text1" style="position:absolute;left:219px;top:52px;width:322px;height:54px;text-align:center;z-index:0;">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>You are now logged out!<br><br></strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><a href="./login.php">back to login</a></span></div>
</body>
</html>