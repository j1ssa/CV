<?php
session_start();
?>
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title> CETHub Register </title>
		<link rel="stylesheet" title="formal" href="../login/css/Style2.css"> 
		<link href="../login/css/text.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<table align="center">
<tr>
<td rowspan="2" align="center">
<img src="../login/images/header2.png"  width="590" height="150" alt=""></td>
</tr>
</table>
<?php
If (isset($_SESSION ['ERRMSG_ARR'])&& is_array($_SESSION['ERRMSG_ARR'])&&count($_SESSION['ERRMSG_ARR'])>0) {
echo'<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo'<li>', $msg,'</li>';
}
echo'</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?>
<br/>
<form id="loginForm" name="loginForm" method="post" action="../login/register-exec.php">

<table width="430" border="0" align="center" cellpadding="2" cellspacing="0">

<tr>

<td><font color="white">First Name</font></td>

<td> <input name="fname" type="text" class="textfield" id="fname"/></td>

</tr>

<tr>

<td><font color="white">Last Name</font></td>

<td> <input name="lname" type="text" class="textfield" id="lname"/></td>

</tr>

<tr>

<td><font color="white">Username</font></td>

<td width="168"> <input name="login" type="text" class="textfield" id="login"/></td>

</tr>

<tr>

<td><font color="white">Password</font></td>

<td> <input name="password" type="password" class="textfield" id="password"/></td>

</tr>

<tr>

<td><font color="white">Confirm Password</font></td>

<td> <input name="cpassword" type="password" class="textfield" id="cpassword"/></td>

</tr>

<tr>

<td width="150px">&nbsp;</td>

<td><input type="submit" name="Submit" value="Register">
</td>

</tr>

</table>

</form>
</body>

</html>