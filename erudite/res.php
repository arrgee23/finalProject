
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="javascript">

function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57)) { return false; }
  return true;
}

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
function checkid1(str)
{ if (str=="")
    { document.getElementById("subject").innerHTML="";
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
      document.getElementById("subject1").innerHTML=xmlhttp.responseText;
        //document.getElementById("email").value=xmlhttp.responseText;
      }
      }
  xmlhttp.open("GET","getSubjectFromSegmentId.php?id="+str,true);
  xmlhttp.send();
}
function checkid2(str)
{ if (str=="")
    { document.getElementById("subject").innerHTML="";
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
      document.getElementById("subject2").innerHTML=xmlhttp.responseText;
        //document.getElementById("email").value=xmlhttp.responseText;
      }
      }
  xmlhttp.open("GET","getSubjectFromSegmentId.php?id="+str,true);
  xmlhttp.send();
}
function checkid3(str)
{ if (str=="")
    { document.getElementById("subject").innerHTML="";
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
      document.getElementById("subject3").innerHTML=xmlhttp.responseText;
        //document.getElementById("email").value=xmlhttp.responseText;
      }
      }
  xmlhttp.open("GET","getSubjectFromSegmentId.php?id="+str,true);
  xmlhttp.send();
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tutor's Corner</title>
<meta name="keywords" content="free css templates, education, school, college, university" />
<meta name="description" content="Education template is for academic related websites" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body><div id="content"></div>


<div id="templatemo_content_wrapper">
      <h2 style="margin-left:20px;">Tutors Corner</h2>
       <div id="templatemo_content_wrapper_about">
           <div class="message">
           </div>
         <!--<h2>Dynamic Pages................</h2>-->
                 <form class="form-inline" name="form1" id="testform2" method="post" enctype="multipart/form-data" role="form" action="process_register.php">
                    <table width="529" height="469" border="0" class="registration-table">
                        <tr>
                          <td width="210" class="label">Source Details »</td>
                          <td>
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
                            </select>
                          </td>
                        </tr>
                        <tr>
                            <td width="210" class="label">Full Name »</td>
                            <td width="309"><input type="text" id="name" name="name" placeholder="Amit Kumar" /></td>
                        </tr>
                        <tr>
                          <td class="label">Upload Image »</td>
                          <td><input id="img" name="timg" class="file" type="file" required/></td>
                          <script>
                                $(document).on('ready', function(){$("#img").fileinput();});
                          </script>
                        </tr>
                        <tr>
                            <td class="label">Contact no. »</td>
                            <td><input type="text" name="ph" id="phone" placeholder="00-0000-0000"  min="7000000000" max="9990000000" required/></td>
                        </tr>
                         <tr>
                            <td class="label">Alternative no. »</td>
                            <td><input type="text" name="aph" id="phone" placeholder="00-0000-0000" maxlength="10" /></td>
                        </tr>
                        <tr>
                            <td class="label">Email ID »</td>
                            <td><input type="email" name="email" id="email" placeholder="example@email.com" required="required"/></td>
                        </tr>
                         <tr>
                            <td class="label">Date of Birth »</td>
                            <td><input type="text" name="dob" id="datepicker" class="text-box" required="required" /> </td>
                        </tr>
                        <tr>
                          <td class="label">Age »</td>
                          <td><input type="number" id="age" name="age" placeholder="e.g 30" required="required" /></td>
                        </tr>
                        <tr>
                            <td class="label">Gender »</td>
                            <td class="label"><select name="gen" required><option disabled="disabled">Choose one</option><option>Male</option><option>Female</option></select></td>
                        </tr>
                        <tr>
                          <td class="label">Marital Status »</td>
                          <td><select name="married" required><option disabled="disabled" >Choose one</option><option>Unmarried</option><option>Married</option></select></td>
                        </tr>
                          <tr>
                            <td class="label">Permanent Address »</td>
                            <td><textarea id="paddress" name="padd" placeholder="Enter permanent address" style="width:336px; height:50px;" required="required"></textarea></td>
                        </tr>
                        <tr>
                            <td class="label">Current Address »</td>
                            <td><textarea id="paddress" name="cadd" placeholder="Enter permanent address" style="width:336px; height:50px;" required="required"></textarea></td>
                        </tr>
                        <tr>
                            <td class="label">Pin »</td>
                            <td> <input type="text" name="pin" placeholder="" min="700001" max="700999" required="required"> </td>
                        </tr>
                         <tr>
                            <td class="label">Area »</td>
                            <td><input type="text" name="area" placeholder="your locality" required="required"> </td>
                        </tr>
                        
                        <tr>
                            <td class="label">Segment Category1 »</td>
                           
                                <td>
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
	                                </select>
                            	</td>
                              <!---->
                        </tr>
                       
                        <tr>
                            <td class="label">Subjects »</td>
                            <td id="subject" class="label"><!--<input type="text" name="subject" class="text-box" required="required" />--> </td>
                        </tr>
                        <tr>
                              <td class="label">Segment Category2 »</td> 
                           
                                <td>
                                  <select name="category" onchange="checkid1(this.value);">
                                 
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
                                  </select>
                              </td>
                              <!---->
                        </tr>
                        <tr>
                          <td class="label">Subjects »</td>
                          <td id="subject1" class="label"></td>
                        </tr>
                        <tr>
                              <td class="label">Segment Category3 »</td>
                           
                                <td>
                                  <select name="category" onchange="checkid2(this.value);">
                                 
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
                                  </select>
                              </td>
                              <!---->                                                  
                        </tr>
                        <tr>
                          <td class="label">Subjects »</td>
                          <td id="subject2" class="label"></td>
                        </tr>
                        <tr>
                                <td class="label">Segment Category4 »</td>
                           
                                <td>
                                  <select name="category" onchange="checkid3(this.value);">
                                 
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
                                  </select>
                              </td>  
                        </tr>
                        <tr>
                          <td class="label">Subjects »</td>
                          <td id="subject3" class="label"></td>
                        </tr>
                        <tr>
                            <td class="label">Qualification Details »</td>
                            <td><input type="text" id="qualification" name="hqua" placeholder="e.g. Diploma, M.sc" required="required" /> </td>
                        </tr>
                        <tr>
                            <td class="label">Stream »</td>
                            <td><input type="text" name="sub" id="subject" placeholder="e.g. Math, Physics,Computer Science" required="required" /></td>
                        </tr>
                        <tr>
                            <td class="label">Institute Name »</td>
                            <td><input type="text" name="ins" id="institute" placeholder="where you have done your course" required="required" /> </td>
                        </tr>
                        <tr>
                            <td class="label">Teaching Experience »</td>
                            <td><input type="text" name="exp" id="experience" placeholder="e.g. 1 year 4 month" required="required" /> </td>
                        </tr>
                         <tr>
                            <td class="label">Covering Areas »</td>
                            <td><textarea name="carea" placeholder="places can be reached, e.g. Saltlake,Goria" style="width:400px; height:60px;" required="required"></textarea></td>
                        </tr>
                        <tr>
                          <td class="label">Current Working Status »</td>
                          <td><input type="text" name="cact" id="c_activity" placeholder="Current working status" required="required" /> </td>
                        </tr>
                        <tr>
                        <td class="label">Upload CV</td>
                        <td><input id="cv" name="cv" class="file" type="file" required/>
                        <script>
                              $(document).on('ready', function(){$("#cv").fileinput();});
                        </script></td>
                        </tr>
                        <tr class="label"><td colspan="4" align="center">
                        <input type="submit" name="submit" id="submit" value="SUBMIT"  style="width:130px; height:40px; float:left; margin-left:205px;"/></td>				
                        </tr>
                    </table>                   
                    </form>       
       </div>
      
</div>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd'});
  });
  </script>
  
</body>
</html>