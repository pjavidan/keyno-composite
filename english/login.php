<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Keyno Guidance  & Control</title>
<meta name="description" content="Keyno Guidance  & Control">
<meta name="keywords" content="Keyno Guidance  Control  smart  home automation PLC  Wifi ZigBee RF Network LAN Industrial Modern intelligenceEfficiency Simplicity connectivity Convenient IOT Internet of Thigs video streaming embed, کینو ، هدایت ، کنترل، رباتیک، خانه هوشمند، ساختمان هوشمند، کی نو، سنسور، اتوماسیون، کارخانه، کارگاه، وای فای، اینترنت، دوربین مداربسته">
<meta name="author" content="Keyno Guidance  & Control">
<link href="../kgc.ico" rel="shortcut icon" type="image/x-icon">
<style type="text/css">
body
{
   background-color: transparent;
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
#hhgfd
{
   border: 0px #000000 solid;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#Image1
{
   border: 0px #000000 solid;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#wb_Form1
{
   background-color: transparent;
   border: 0px #000000 double;
}
#Table1
{
   border: 1px #000000 solid;
   background-color: transparent;
   border-spacing: 0px;
}
#Table1 td
{
   padding: 0px 0px 0px 0px;
}
#Table1 td div
{
   white-space: nowrap;
}
#Table1 .cell0
{
   background-color: #000000;
   border: 1px #2953C1 solid;
   text-align: center;
   vertical-align: middle;
   height: 22px;
}
#Table1 .cell1
{
   background-color: transparent;
   border: 1px #FFFFFF solid;
   text-align: left;
   vertical-align: top;
   height: 116px;
}
#wb_Text1 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#wb_Text1 div
{
   text-align: left;
}
#wb_Text2 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#wb_Text2 div
{
   text-align: left;
}
#Editbox1
{
   border: 1px #000000 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#Editbox2
{
   border: 1px #000000 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#AdvancedButton1
{
   border: 1px #000000 solid;
   background-color: #FFFFFF;
}
#Image2
{
   border-width: 0;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#wb_Text3 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#wb_Text3 div
{
   text-align: left;
}
</style>
</head>
<body>
<div id="wb_hhgfd" style="position:absolute;left:520px;top:153px;width:317px;height:53px;z-index:6;">
<img src="../images/Picture1.png" id="hhgfd" alt=""></div>
<div id="wb_Image1" style="position:absolute;left:598px;top:1px;width:157px;height:157px;z-index:7;">
<img src="../images/icono.png" id="Image1" alt=""></div>
<div id="wb_Form1" style="position:absolute;left:468px;top:246px;width:403px;height:226px;z-index:8;">
<form name="LoginForm" method="post" action="verify.php" id="Form1">
<table style="position:absolute;left:33px;top:37px;width:334px;height:144px;z-index:0;" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td class="cell0"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;line-height:16px;"><strong>Login</strong></span></td>
</tr>
<tr>
<td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span></td>
</tr>
</table>
<div id="wb_Text1" style="position:absolute;left:46px;top:86px;width:77px;height:15px;z-index:1;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:12px;">Username:</span></div>
<div id="wb_Text2" style="position:absolute;left:46px;top:115px;width:78px;height:15px;z-index:2;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:12px;">Password:</span></div>
<input type="text" id="Editbox1" style="position:absolute;left:122px;top:83px;width:232px;height:18px;line-height:18px;z-index:3;" name="username" value="">
<input type="password" id="Editbox2" style="position:absolute;left:122px;top:112px;width:232px;height:18px;line-height:18px;z-index:4;" name="password" value="">
<button id="AdvancedButton1" type="submit" style="position:absolute;left:285px;top:142px;width:71px;height:22px;z-index:5;" name="sent_data" value="Login">
<div style="text-align:center"><span style="color:#000000;font-family:Arial;font-size:13px">Login</span></div>
</button>
</form>
</div>
<!-- Display 'Password is wrong' message -->
<div id="Html1" style="position:absolute;left:507px;top:204px;width:332px;height:61px;z-index:9">
<?php
if(isset($_GET["login_error"]))
{
echo("<b>Username or password is incorrect!<br />Please try again.</b>");
}
?>
</div>
<div id="wb_Image2" style="position:absolute;left:642px;top:450px;width:76px;height:89px;z-index:10;">
<a href="./../index.html"><img src="../images/img0046.png" id="Image2" alt=""></a></div>
<div id="wb_Text3" style="position:absolute;left:662px;top:538px;width:40px;height:16px;z-index:11;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Home</span></div>
</body>
</html>