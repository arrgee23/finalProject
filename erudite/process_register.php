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
	session_start();
	$id= $_SESSION['id'];
	$userId_query="select * from executive_table where ex_user_id='$id'";
	/*$result1= $conn-> query($userId_query);
	if ($result1->num_rows > 0) {

	while($rowval1= $result1->mysql_fetch_assoc()){
		$doneby= $rowval1['ex_name'];
		}
	}
	else {
		 echo "!!Connection Error!!";
	   }*/
	$result1=mysqli_query($conn,$userId_query);
	while($rowval1=mysqli_fetch_assoc($result1)){
		$doneby= $rowval1['ex_name'];
	}
	//...............................................................
	move_uploaded_file($_FILES['timg']['tmp_name'],"Photos/".$_FILES['timg']['name']);
		$img = "Photos/".$_FILES['timg']['name'];
		$nm=$_POST['name'];
		$dob=$_POST['dob'];
		$age=$_POST['age'];
		$gen=$_POST['gen'];
		$married=$_POST['married'];
		$ph=$_POST['ph'];
		$aph=$_POST['aph'];
		$email=$_POST['email'];
		$padd=$_POST['padd'];
		$cadd=$_POST['cadd'];
		$area=$_POST['area'];
		$carea=$_POST['carea'];
		$hqua=$_POST['hqua'];
		$sub=$_POST['sub'];
		$ins=$_POST['ins'];
		$exp=$_POST['exp'];
		$cact=$_POST['cact'];
		move_uploaded_file($_FILES['cv']['tmp_name'],"CVs/".$_FILES['cv']['name']);
		$cv = "CVs/".$_FILES['cv']['name'];
		$registration_time = date("Y-m-d");
		$data_source=$_POST['source_detail'];
		$chk=$_POST['chk'];

			$insertion1= "INSERT INTO teacher_details(t_id,t_img,t_nm,t_dob,t_age,t_gen,t_married,t_ph,t_aph,t_email,t_padd,t_cadd,t_area,t_hqua,t_sub,t_ins,t_exp,t_cact,t_cv,t_time,t_source,t_doneby)
	    values('00','$img','$nm','$dob','$age','$gen','$married','$ph','$aph','$email','$padd','$cadd','$area','$hqua','$sub','$ins','$exp','$cact','$cv','$registration_time','$data_source','$doneby')";
			$con=$conn->query($insertion1);


		if ($con === TRUE) {
		    $last_id = $conn->insert_id;
		    echo "New record created successfully. Last inserted ID is: " . $last_id;
		} else {
		    echo "Error: " . $insertion1 . "<br>" . $conn->error;
		}








		/*$getcurrentId="select * from executive_table where ex_user_id='$id'";
		$result2= $conn-> query($getcurrentId);
		while($rowval2= $result2->fetch__assoc()){
		$currentId= $rowval2['t_id'];
		}
		
		$result2=mysqli_query($conn,$getcurrentId);
		while($rowval2=mysqli_fetch_assoc($result2)){
		$currentId= $rowval2['ex_id'];
		}
			if (!$result2) {
        echo 'MySQL Error: ' . mysqli_error($result2);
        exit;
    }*/


	for ($i=0; $i<sizeof($chk);$i++){
		 	/*$query= "INSERT INTO teachersegmentsubject (teacherId,segmentsubjectId) values('$last_id','".$chk[$i]."')";
			$conn->query($query);*/
			include 'suse.php';
			}
	for($j=0; $j<sizeof($carea);$j++){
		include 'tear.php';
	}
echo "<script>alert('Data stored successfully!')</script>";
	$conn->close();
	echo "<script>window.location.href='executivepage.php'</script>";
	
?>