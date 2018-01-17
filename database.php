<?php
error_reporting(1);
$connection=mysql_connect("localhost","root","") 
or die("Could not Connect to database");
mysql_select_db("quiz_new",$connection)  
or die("Could connect to My sql Database");
?>
