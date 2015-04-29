<?php

$con = mysql_connect("50.62.209.14","meghna","Nocloud@15");
if(!$con)
	die(mysql_error().'could not connect');

$db = mysql_select_db("brainstormer");
if(!$db)
	die(mysql_error().'could not select');

$name = $_POST['name'];
$email = $_POST['email'];
$team = $_POST['team'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$institute = $_POST['institute'];

$qry = "insert into register_db values(null, '$name','$email', '$team', '$phone', '$type', '$institute')";

$res = mysql_query($qry);
if($res)
	header("location:index.php?msg=1");
else
	header("location:index.php?msg=0");
?>