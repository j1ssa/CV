<?php
		//Start session
		session_start();
		
		
		//Check whether the session variable $ESS_MEMBER_ID is present or not
		if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID'])==''))
		{
					header("location:access-denied.php");
					exit();
		}
?>
