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
	
	$query= "INSERT INTO teacherarea (teacherId,areaId) values('$last_id','".$carea[$j]."')";
	$conn->query($query);
	
	$conn->close();
	//echo "<script>window.location.href='executivepage.php'</script>";
?>