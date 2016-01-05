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
	
	$query= "SELECT segment.name,subject.name 
FROM teachersegmentsubject 
JOIN segmentSubject ON segmentsubject.id= teachersegmentsubject.segmentsubjectId 
JOIN segment ON segment.id=segmentsubject.segmentId 
JOIN subject ON subject.id=segmentsubject.subjectId 
JOIN teacher_details ON teacher_details.t_id=teachersegmentsubject.teacherId 
WHERE teacher_details.t_id=31";
	$conn->query($query);
	
	$conn->close();
	
?>