<?php
	$con = mysqli_connect("localhost","root","","attendance");
	
	if (mysqli_connect_errno()) {
		echo "Failedto connect to MySQL: " . mysqli_connect_error();
	}
<<<<<<< HEAD
	$id_number = $_GET['id_number'];
	$query = "DELETE FROM student_class where id_number='$id_number'";
=======
	$number = $_GET['number'];
	$query = "DELETE FROM student_class where number='$number'";
>>>>>>> Updated
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: student_class.php");
?>