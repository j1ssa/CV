<?php

session_start ();

require_once('config.php');

$errmsg_arr=array ();

$errflag=false;


$link=mysql_connect(DB_HOST, DB_USER);
if(!$link) {
	
die('Failed to connect to server:'.mysql_error());
}

$db=mysql_select_db(sample);
if(!$db){
die("Unable to select database");
}


function clean($str){
	
$str=@trim ($str);
if(get_magic_quotes_gpc()) {
	
$str=stripslashes($str);
}
return mysql_real_escape_string($str);
}

$fname=clean($_POST['fname']);
$lname=clean($_POST['lname']);
$login=clean($_POST['login']);
$password=clean($_POST['password']);
$cpassword=clean($_POST['cpassword']);


if ($fname==''){
$errmsg_arr[]='First name missing';
$errflag=true;
}


if ($lname==''){
$errmsg_arr[]='Last name missing';
$errflag=true;
}

if ($login==''){
$errmsg_arr[]='Login ID missing';
$errflag=true;
}

if ($password==''){
$errmsg_arr[]='Password missing';
$errflag=true;
}

if ($cpassword==''){
$errmsg_arr[]='Confirm password missing';
$errflag=true;
}

if(strcmp($password,$cpassword)!=0){

$errmsg_arr[]='Passwords do not match';
$errflag=true;
}


if ($login !='') {
$qry="SELECT * FROM members WHERE login='$login'";
$result=mysql_query ($qry);
if($result) {
if (mysql_num_rows ($result) >0) {
$errmsg_arr[]='Login ID already in use';
$errflag=true;
}
@mysql_free_result($result);
}
else
{
die ("Query failed");
}

}

if ($errflag) {
$_SESSION ['ERRMSG_ARR']=$errmsg_arr;
session_write_close ();
header ("location:register-form.php");
exit ();
}

//create INSERT query
$qry="INSERT INTO members (firstname, lastname, login, passwd)
VALUES ('$fname','$lname','$login','".md5 ($_POST ['password'])."')";
$result=@mysql_query ($qry);


if ($result){
header ("location:register-success.php");
exit();
}else{
die ("Query Failed");
}

?>

