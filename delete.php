<?php
	$con = mysqli_connect("localhost","root","","attendance");
	
	if (mysqli_connect_errno()) {
		echo "Failedto connect to MySQL: " . mysqli_connect_error();
	}
	$subject_code = $_GET['subject_code'];
	$query = "DELETE FROM subject where subject_code='$subject_code'";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: csubject.php");
?>