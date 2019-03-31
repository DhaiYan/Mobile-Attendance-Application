<?php
	$con = mysqli_connect('localhost', 'root', '', 'attendance');
	$class_id = isset($_GET['class_id'])? $_GET['class_id']:null;
	$query = '
	Select 
		student.id_number,  
		class.class_id, 
		CONCAT(student.last_name, " ", student.first_name," ",student.middle_initial, " ", student.name_extension ) as Name, 
		take_attendance.time_stamp, 
		take_attendance.status
	FROM
		student, take_attendance , class
	WHERE
		student.id_number = take_attendance.id_number AND
			take_attendance.class_id = class.class_id AND
			class.class_id ='. $class_id; 
	$result = mysqli_query($con, $query);



?>

<!DOCTYPE html>
<html>

<style>
body	{
	background-image: url("picture/web.jpg");
	background-size: cover
}
</style>

<head>
	<title>Take View</title>
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
					<a href="home.php" title="Go to Class"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
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
							<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;Mobile Attendance</a>
					</div>
					
					</div>
				</nav>

				
			</div>
        </div>

    </div>
	<div class ="container">
	<table class="table">
		<thead>
			<tr>
				<th>ID Number</th>
				<th>Class ID</th>
				<th>Name</th>
				<th>Timestamp</th> 
				<th>Remarks</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row = mysqli_fetch_assoc($result)){
			?>
				<tr>
					<td><?php echo $row["id_number"] ?></td>
					<td><?php echo $row["class_id"] ?></td>
					<td><?php echo $row["Name"] ?></td>
					<td><?php echo $row["time_stamp"] ?></td>
					<td><?php echo $row["status"] ?></td>
				</tr>

			<?php
				}
			?>
		</tbody>
	</table> 
</body>

</html>
