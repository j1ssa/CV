<?php
      //Start session
	  session_start();
	  
	  //Unset the variables stored in session
	  unset($_SESSION['SES_MEMEBER_ID']);
	  unset($_SESSION['SES_FIRST_NAME']);
	  unset($_SESSION['SES_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitonal//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>CETHub Logged Out</title>
		<link rel="stylesheet" title="formal" href="../login/css/Style2.css"> 
		<link href="../login/css/text.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<br><br><br><br>
<h1 align="center" style="font-size: 2em;">Logout</h1>
<p align="center">&nbsp;</p>
<h4 align="center" class="err">You have been logged out.</h4>
		<p align="center"><font color="white">Click here to <a href="login-form.php" font-size="50px">Login</a></font></p>
</body>
</html>