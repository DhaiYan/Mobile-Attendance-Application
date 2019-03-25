<?php
	$con = mysqli_connect("localhost","root","","attendance");
	
	if (mysqli_connect_errno()) {
		echo "Failedto connect to MySQL: " . mysqli_connect_error();
	}
	$subject_code = $_GET['subject_code'];
	$query = "DELETE FROM subject where subject_code='$subject_code'";
	$result = mysqli_query($con,$query) or die (mysqli_error());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	header("location: index.php");
=======
	header("location: csubject.php");
>>>>>>> updated
=======
	header("location: csubject.php");
>>>>>>> CRUD for student_class and take_attendance
=======
	header("location: csubject.php");
>>>>>>> Updated
?>