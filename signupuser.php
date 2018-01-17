<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>
body{

background-image: url("image/ucm.png");
}
</style>
<title>Student Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysql_query("select * from mst_user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$id = (rand(500, 99999));

$rs=mysql_query("insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$id','$lid','$pass','$name','$address','$city','$phone','$email')");
if($rs)
{
    echo "<br><br><br><div class=head1>Your Student Login ID  $lid Created Sucessfully</div>";
    echo "<br><div class=head1>Please Student Login using your Login ID to take Quiz</div>";
    echo "<br><div class=head1><a href=index.php>Login</a></div>";

}
else
{
    die(mysql_error());    
}
