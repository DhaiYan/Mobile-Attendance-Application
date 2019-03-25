<?php

$Host = '';
$db = '';

$db = mysqli_connect('localhost','root','','attendance');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$id_number = $_POST['id_number'];
	$first_name = $_POST['first_name'];
	$middle_initial = $_POST['middle_initial'];
	$last_name = $_POST['last_name'];
	$name_extension = $_POST['name_extension'];
	
	$result = mysqli_query($db, "UPDATE student SET id_number='$id_number', first_name='$first_name',middle_initial='$middle_initial', last_name='$last_name', name_extension='$name_extension' WHERE id_number='$id'");
	if($result == true){
		header("Location: cstudent.php");
	}
}
?>
<?php
$id_number = $_GET['id_number'];

$result = mysqli_query($db, "SELECT * FROM student WHERE id_number='$id_number'");

while($res = mysqli_fetch_array($result))
{
	$id_number = $res['id_number'];
	$first_name = $res['first_name'];
	$middle_initial = $res['middle_initial'];
	$last_name = $res['last_name'];
	$name_extension = $res['name_extension'];
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
<<<<<<< HEAD
<<<<<<< HEAD
					<a href="edit.html" title="To-do-List"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete</a>
				</li>
				<li>
					<a href="edit.html" title="To-do-List"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
=======
					<a href="student_class.php" title="To-do-List"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student_Class</a>
				</li>
				<li>
					<a href="take_attendance.html" title="To-do-List"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take_Attendance</a>
>>>>>>> CRUD for student_class and take_attendance
=======
					<a href="student_class.php" title="To-do-List"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student_Class</a>
				</li>
				<li>
					<a href="take_attendance.php" title="To-do-List"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take_Attendance</a>
				</li>
				<li>
					<a href="general_reports.php" title="To-do-List"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Reports</a>
				</li>
				<li>
					<a href="take_attendance.html" title="To-do-List"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
>>>>>>> Updated
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
		<form method="post" action="estudent.php"> 
		<input name="id" type="hidden" value="<?php echo $id_number;?>"/>
			<center><h1><strong><font color="#ff80aa" face="Cooper Std Black">Student</font></strong></h1></center>
			<label>ID Number</label> 
			<input type="text" class="form-control" value="<?php echo $id_number;?>" id="id_number" placeholder="Enter ID Number" name="id_number" required>
			<label>First Name</label>
			<input type="text" class="form-control" value="<?php echo $first_name;?>" id="first_name" placeholder="Enter First Name" name="first_name" required>
			<label>Middle Initial</label> 
			<input type="text" class="form-control" value="<?php echo $middle_initial;?>" id="middle_initial" placeholder="Enter Middle Initial" name="middle_initial">
			<label>Last Name</label>
			<input type="text" class="form-control" value="<?php echo $last_name;?>" id="last_name" placeholder="Enter Last Name" name="last_name" required>
			<label>Name Extension</label>
			<select name="name_extension" class="form-control" >
			  <option value=""></option>
			  <option value="Junior">Jr.</option>
			  <option value="Senior">Sr.</option>
			  <option value="I">I</option>
			  <option value="II">II</option>
			  <option value="III">III</option>
			  <option value="Other">Other...</option>
			</select>
			<center><input class="btn btn-dark" name="update" type="submit" value="Save"></button></center>
		</form>
	</div>
	

</body>

</html>
