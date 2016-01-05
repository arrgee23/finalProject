<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("erudite",$link) or die("can not select database");
		$id= $_SESSION['id'];
		$p=$_POST['update_pass'];
		$res = mysql_query("UPDATE executive_table SET ex_password='$p' WHERE ex_user_id='$id'");
		mysql_query($res,$link)or die(mysql_error());
		mysql_close($link);
		echo "<script>alert('Password Updated!')</script>";
		echo "<script>window.location.href='executive.php'</script>";

?>