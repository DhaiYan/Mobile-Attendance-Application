<?php 

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "attendance";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM student";
$query = mysqli_query($conn,$sql);
$sql1 = "SELECT * FROM class";
$query1 = mysqli_query($conn,$sql1);

?>
<?php

$Host = '';
$db = '';

$db = mysqli_connect('localhost','root','','attendance');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$id_number = $_POST['id_number'];
	$class_id = $_POST['class_id'];
	
	$result = mysqli_query($db, "UPDATE student_class SET id_number='$id_number', class_id='$class_id' WHERE id_number='$id'");
	if($result == true){
		header("Location: student_class.php");
	}
}
?>
<?php
$id_number = $_GET['id_number'];

$result = mysqli_query($db, "SELECT * FROM student_class WHERE id_number='$id_number'");

while($res = mysqli_fetch_array($result))
{
	$id_number = $res['id_number'];
	$class_id = $res['class_id'];
}
?>
<!DOCTYPE html>


<head>
	<title>subject</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="picture/attendance.jpg" />

	
	
	<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	
    <link href="css/phonebook.css" rel="stylesheet">
	<script src="bootstrap-3.3.7/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="js/phonebook.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div id="wrapper">
		
       <!-- Sidebar -->
				<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<img src="img/attendance.png" />
				</li>
				<br>
				<li>
					<a href="index.php" title="Go to Class"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
				</li>
				<li>
					<a href="cclass.php" title="Go to Class"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class</a>
				</li>
				<li>
					<a href="csubject.php" title="Go to Subject"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject</a>
				</li>
				<li>
					<a href="cstudent.php" title="Go to Student"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student</a>
				</li>
				<li>
					<a href="edit.html" title="To-do-List"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete</a>
				</li>
				<li>
					<a href="edit.html" title="To-do-List"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
				</li>
				
			</ul>
		</div>

		
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
				<!-- Menu -->
				<nav class="navbar navbar-green">
					<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
							<span class="icon-bar"></span>                       
							</button>
							<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;<strong>Mobile Attendance Application</strong></a>
					</div>
					
					</div>
				</nav>

				
			</div>
        </div>

    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<div class="container" style="width:300px">
		<form method="post" action=""> 
		<input name="id" type="hidden" value="<?php echo $id_number;?>"/>
			<center><h1><strong><font color="#ff80aa" face="Cooper Std Black">Student Class</font></strong></h1></center>
			<label>ID Number</label>
			<select name="id_number" class="form-control" value="<?php echo $id_number;?>" required>
					<?php while($row = mysqli_fetch_array($query)):?>
			  <option value="<?php echo $row['id_number'] ?>"><?php echo $row['id_number'] ?></option>
					<?php endwhile;?>
			</select>
			<label>Class ID</label> 
			<select name="class_id" class="form-control" required>
					<?php while($row = mysqli_fetch_array($query1)):?>
			  <option value="<?php echo $row['class_id'] ?>"><?php echo $row['class_id'] ?></option>
					<?php endwhile;?>
			</select>
			<center><input class="btn btn-dark" name="update" type="submit" value="Save"></button></center>
		</form>
	</div>
	


</body>

</html>
