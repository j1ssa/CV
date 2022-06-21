<html>

<head>

			<script src="../System/js/Header.js"></script>


		<title>CETHub</title>
		

	<link rel="stylesheet" type="text/css" href="..login/css/ivs.css" title="formal" />

	<link rel="stylesheet" title="formal" href="../login/css/Style2.css">  

	
	

			<script type="text/javascript">

	function login(){
	
		if(document.loginFrm.username.value == null ||

		document.loginFrm.username.value.length == 0)
		
	{
	 
			alert('Username is a mandatory field.’);

		document.loginFrm.username.focus();

			return;
	}

		if(document.loginFrm.password.value == null || document.loginFrm.password.value.length ==0)
	{
	
		
		alert('Password is a mandatory field.');

		document.loginFrm.password.focus();
 
			return;

	}
	
		document.loginFrm.submit();
	}

		</script>
		

		</head>
		
		<body>
		<br><br>
		
	<form id="loginForm" name="loginForm" method="post" action="../login/login-exec.php">
	
<table width="1024" align="center" cellpadding="0" cellspacing="0">
 
	<tr>
 
		<td>

		<table width="1024" align="center" cellpadding="0" cellspacing="0">
		
	<tr>
	
		<td>&nbsp;</td>
	</tr>
	
	<tr>
	
		<td>&nbsp;</td>
	</tr>

	<tr>
	
		<td align="center" class="header1">

		<table id="Table_01" width="594" height="350" border="0" cellpadding="0" cellspacing="0">

	<tr>
	
		<td>

<img src="../login/images/header2.png" width="594" height="150" alt=""></td>

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
	</tr>
	
	<tr>
 

		<td width="298" height="69"> 

	<table border="0" cellspacing="0" cellpadding="0" width="100%">
	
	<tr>
		
		<td class="leftText" align="right" width="250px"><font color="white">Username : &nbsp; </font></td>
		
		<td><input name="login" type="text" class="textfield" size="25" id="login"></td>
		
	</tr>
	
	<tr>
	
		<td class="leftText" align="right" width="250px"><font color="white">Password : &nbsp; </font></td>
		
		<td><input name="password"type="password"size="25"id="password"></td>
		
	</tr>
	
	
	</table>
	
		</td>
	
	</tr> 
	
	<tr>
	
			<td align="center"><a href="javascript:login();" target="_self"> <input type="submit" name="Submit" value="Login"/></a>
			</td>
	<tr>
		
	<tr>
		<td align="center">
		
			<a href="../login/register-form.php" target="_self"> <img src="../login/images/register.png" width="130" height="25" border="0" alt=""></a></td> 
		
	</tr>
	
	</table>
	
		</td>
		
	</tr>
	
	<tr>
	
		<td>&nbsp;</td>

	</tr>
	
	<tr>
	
		<td>&nbsp;</td>
		
	</tr>
	
	</table>
	
		</td>
		
	</tr>
	
	</table>
	
</form>
</body>
</html>
