<?php
	$con = mysqli_connect("localhost","root","","attendance");
	
	if (mysqli_connect_errno()) {
		echo "Failedto connect to MySQL: " . mysqli_connect_error();
	}
	$number = $_GET['number'];
	$query = "DELETE FROM student_class where number='$number'";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: student_class.php");
?>