<?php

session_start();

require_once('config.php');

$errmsg_arr=array();

$errflag=false;

$link= mysql_connect(DB_HOST,DB_USER);

if (!$link){

	die('Failed to connect to server: '.mysql_error());

}

$db = mysql_select_db(sample);

if(!$db){

	die("Unable to select to database");
	
}

function clean($str){

	$str=@trim($str);
	
	if(get_magic_quotes_gpc()){
	
	$str=stripsplashes($str);
	
	}
	
		return mysql_real_escape_string($str);
		
}

	$login=clean($_POST['login']);
	$password=clean($_POST['password']);
	
	if($login==''){


	$errmsg_arr[]='Login ID missing';
	$errflag=true;
	
}
	if($password==''){


	$errmsg_arr[]='Password missing';
	$errflag=true;
	
}

	if($errflag){

	$_SESSION['ERRMSG_ARR']=$errmsg_arr;
	
	session_write_close();
	
	header("location:login-form.php");
	
	exit();
}

	$qry="SELECT * FROM members WHERE login='$login' AND passwd='".md5($_POST['password'])."'";
	
	$result=mysql_query($qry);
	
	if($result){

	if(mysql_num_rows($result)==1){
		
		session_regenerate_id();
		$member=mysql_fetch_assoc($result);
		$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
		$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
		$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
		
		session_write_close();
		
		header("location:member-index.php");
		
		exit();
		
		}
		else
		{
		
		header("location:login-failed.php");
		
		exit();
		}
}
		else
		{
		
			die("Query failed");
		}
?>
		
		