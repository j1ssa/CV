<?php
require_once ('auth.php');
?>
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>CETHub Member Index</title>
		<link rel="stylesheet" title="formal" href="../login/css/Style2.css"> 
		<link href="../login/css/text.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<center>
<img src="../login/images/header2.png" width="590" height="150" alt=""></td>

</center>
<br>
<h1>Welcome &nbsp<?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<a href="member-profile.php">My Profile</a> | <a href="logout.php">Logout</a>

<br><br><br>
<h6><font color="white"> This is a password protected area only accessible to members. </font></h6>

</body>
</html>

