<?php
$id_number = filter_input(INPUT_POST, 'id_number');
$first_name = filter_input(INPUT_POST, 'first_name');
$middle_initial = filter_input(INPUT_POST, 'middle_initial');
$last_name = filter_input(INPUT_POST, 'last_name');
$name_extension = filter_input(INPUT_POST, 'name_extension');
if (!empty($id_number)){
	if (!empty($first_name)){
		if (!empty($last_name)){
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
  $sql = "INSERT INTO student (id_number, first_name, middle_initial, last_name, name_extension)
  values ('$id_number','$first_name','$middle_initial','$last_name','$name_extension')";
  if ($conn->query($sql)){
<<<<<<< HEAD
<<<<<<< HEAD
    header("location: index.php");
=======
    header("location: cstudent.php");
>>>>>>> updated
=======
    header("location: cstudent.php");
>>>>>>> CRUD for student_class and take_attendance
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Last Name should not be empty";
  die();
}
}
else{
  echo "First Name should not be empty";
  die();
}
 }
 else{
  echo "ID Number should not be empty";
  die();
 }
?>