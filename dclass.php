<?php
	$con = mysqli_connect("localhost","root","","attendance");
	
	if (mysqli_connect_errno()) {
		echo "Failedto connect to MySQL: " . mysqli_connect_error();
	}
<<<<<<< HEAD
<<<<<<< HEAD
	$subject_code = $_GET['class_id'];
=======
	$class_id = $_GET['class_id'];
>>>>>>> CRUD for student_class and take_attendance
=======
	$class_id = $_GET['class_id'];
>>>>>>> Updated
	$query = "DELETE FROM class where class_id='$class_id'";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: cclass.php");
?>