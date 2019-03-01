<?php
	$con = mysqli_connect("localhost","root","","attendance");
	
	if (mysqli_connect_errno()) {
		echo "Failedto connect to MySQL: " . mysqli_connect_error();
	}
	$subject_code = $_GET['class_id'];
	$query = "DELETE FROM class where class_id='$class_id'";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: cclass.php");
?>