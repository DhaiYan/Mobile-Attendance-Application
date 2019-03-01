<?php
$subject_code = filter_input(INPUT_POST, 'subject_code');
$subject_title = filter_input(INPUT_POST, 'subject_title');
if (!empty($subject_code)){
	if (!empty($subject_title)){
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
  $sql = "INSERT INTO subject (subject_code, subject_title)
  values ('$subject_code','$subject_title')";
  if ($conn->query($sql)){
<<<<<<< HEAD
    header("location: index.php");
=======
    header("location: csubject.php");
>>>>>>> updated
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Subject Title should not be empty";
  die();
}
 }
 else{
  echo "Subject Code should not be empty";
  die();
 }
?>