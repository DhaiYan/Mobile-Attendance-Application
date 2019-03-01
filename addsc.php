<?php
$id_number = filter_input(INPUT_POST, 'id_number');
$class_id = filter_input(INPUT_POST, 'class_id');
if (!empty($id_number)){
	if (!empty($class_id)){
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
  $sql = "INSERT INTO student_class (id_number, class_id)
  values ('$id_number','$class_id')";
  if ($conn->query($sql)){
    header("location: student_class.php");
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Class ID should not be empty";
  die();
}
 }
 else{
  echo "ID Number should not be empty";
  die();
 }
?>