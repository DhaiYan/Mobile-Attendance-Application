<?php

	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `class` WHERE CONCAT(`class_id`, `section`, `subject_code`, `semester`, `academic_year`, `schedule_day`, `schedule_time`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `class`";
		$search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "attendance");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}
?>
<!DOCTYPE html>


<head>
	<title>index</title>
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
							<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;<strong>Mobile Attendance Application</strong></a>
					</div>
					
					</div>
				</nav>

				
			</div>
        </div>

    </div>
	
	<div class="container">
			<center><h1><strong><font color="#ff80aa" face="Cooper Std Black">Class</font></strong></h1></center>
			<div class="container">          
  <table class="table">
    <thead>
      <tr>
<<<<<<< HEAD
		<th>Class_ID:</th>
        <th>Course, Year, and Section:</th>
		<th>Subject_Code:</th>
		<th>Semester:</th>
        <th>Academic_Year:</th>
		<th>Schedule_Day:</th>
		<th>Schedule_Time:</th>
=======
		<th>Class ID</th>
        <th>Course, Year, and Section</th>
		<th>Subject Code</th>
		<th>Semester</th>
        <th>Academic Year</th>
		<th>Schedule Day</th>
		<th>Schedule Time</th>
>>>>>>> Update for finalization
      </tr>
    </thead>
	<?php while($row = mysqli_fetch_array($search_result)):?>
    <tbody>
      <tr>
        <td><?php echo $row['class_id'];?></td>
		<td><?php echo $row['section'];?></td>
		<td><?php echo $row['subject_code'];?></td>
		<td><?php echo $row['semester'];?></td>
		<td><?php echo $row['academic_year'];?></td>
		<td><?php echo $row['schedule_day'];?></td>
		<td><?php echo $row['schedule_time'];?></td>
      </tr>
	  </tbody>
	  <?php endwhile;?>
	 </table>
	</div>	
	</div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	
	
</body>

</html>
