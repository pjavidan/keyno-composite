<?php
  if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Refresh: 0; URL=/index.html');
    exit;
  }

  $mailto  = "q@keyno-gc.com";
  $subject = "Feedback form";
  $message = "Values submitted from web site form:";
  $name    = Valid_Input($_POST['name']);
  $email   = Valid_Email($_POST['email']);
  foreach ($_POST as $key => $value){
    if (!is_array($value)){
      $message .= "\n".$key." : ".$value;
    }
    else{
      foreach ($_POST[$key] as $itemvalue){
        $message .= "\n".$key." : ".$itemvalue;
      }
    }
  }
  $header  = "From: ".$name." <".$email.">\n";
  $header .= "Reply-To: ".$email."\n";
  $header .= "MIME-Version: 1.0\n";
  $header .= "Content-Type: text/plain; charset=utf-8\n";
  $header .= "Content-Transfer-Encoding: 8bit\n";
  $header .= "X-Mailer: PHP v".phpversion();

  mail($mailto, $subject, stripslashes($message), $header) or exit('Fatal Mail Error!');

  function Valid_Input($data){
    list($data) = preg_split('/\r|\n|%0A|%0D|0x0A|0x0D/i',ltrim($data));
    return $data;
  }
  function Valid_Email($data){
    $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
    if (preg_match($pattern,$data)){
      return $data;
    }
    else{
      return $GLOBALS['mailto'];
    }
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Keyno Composite Structure</title>
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
<div id="wb_Text1" style="position:absolute;left:276px;top:103px;width:382px;height:51px;text-align:center;z-index:0;">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>Thanks for your feedback!<br></strong><br></span><span style="color:#000000;font-family:Arial;font-size:11px;"><a href="./index.html">Click here to go back</a></span></div>
</body>
</html>