<?php
error_reporting(E_ALL ^ E_DEPRECATED);

 session_start();
if(empty($_POST))
{
	exit;
}

if(empty($_POST['password']))
{
	echo "You must enter Password";
}
else
	{

	$link = mysql_connect("localhost","root","") or die("Cannot Connect");
	mysql_select_db("erudite",$link) or die("Can't select db");
	
	$q = "select * from executive_table where ex_user_id='".$_POST['id']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['password']==$row['ex_password'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['id']=$row['ex_user_id'];
			$_SESSION['password']=$row['ex_password'];
			echo "<script>alert('LOGIN SUCCESSFULL!')</script>";
			header("Location:executivepage.php");
		}
		else
		{
			echo "Wrong Password";
		}
	}
	else
	{
		echo "No Such User";
	}
	
}

	
?>