<?php
$section = filter_input(INPUT_POST, 'section');
$subject_code = filter_input(INPUT_POST, 'subject_code');
$semester = filter_input(INPUT_POST, 'semester');
$academic_year = filter_input(INPUT_POST, 'academic_year');
$schedule_day = filter_input(INPUT_POST, 'schedule_day');
$schedule_time = filter_input(INPUT_POST, 'schedule_time');
if (!empty($section)){
	if (!empty($subject_code)){
		if (!empty($semester)){
			if (!empty($academic_year)){
				if (!empty($schedule_day)){
					if (!empty($schedule_time)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "attendance";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO class (section, subject_code, semester, academic_year, schedule_day, schedule_time)
  values ('$section','$subject_code','$semester','$academic_year','$schedule_day','$schedule_time')";
  if ($conn->query($sql)){
    header("location: cclass.php");
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Schedule Time should not be empty";
  die();
}
}
else{
  echo "Schedule Day should not be empty";
  die();
}
}
else{
  echo "Academic Year should not be empty";
  die();
}
}
else{
  echo "Semester should not be empty";
  die();
}
}
else{
  echo "Subject Code should not be empty";
  die();
}
 }
 else{
  echo "Course, Year, and Section should not be empty";
  die();
 }
?>