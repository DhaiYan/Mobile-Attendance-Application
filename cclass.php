<?php 

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "attendance";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM subject";
$query = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>


<head>
	<title>Add</title>
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
					<a href="csubject.html" title="Go to Subject"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject</a>
				</li>
				<li>
					<a href="cstudent.html" title="Go to Student"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student</a>
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
		<form method="post" action="addclass.php"> 
			<center><h1><strong><font color="#ff80aa" face="Cooper Std Black">Class</font></strong></h1></center>
			<label>Course, Year, and Section</label> 
			<input type="text" class="form-control" id="cys" placeholder="Enter Course, Year, and Section" name="cys" required>
			<label>Subject Code</label>
			<select name="subject_code" class="form-control" required>
					<?php while($row = mysqli_fetch_array($query)):?>
			  <option value="<?php echo $row['subject_code'] ?>"><?php echo $row['subject_title'] ?></option>
			  	  <?php endwhile;?>
			</select>
			<label>Semester</label>
			<select name="semester" class="form-control" required>
			  <option value="1">First Semester</option>
			  <option value="2">Second Semester</option>
			  <option value="3">Summer</option>
			</select>
			<label>Academic Year</label> 
			<input type="text" class="form-control" id="academic_year" placeholder="Enter Subject Description" name="academic_year" required>
			<label>Schedule Day</label> 
			<input type="text" class="form-control" id="schedule_day" placeholder="Enter Subject Description" name="schedule_day" required>
			<label>Schedule Time</label> 
			<input type="text" class="form-control" id="schedule_time" placeholder="Enter Subject Description" name="schedule_time" required>
			<br/>
			<center><input class="btn btn-dark" type="submit" value="Save"></button></center>
		</form>
	</div>
	


</body>

</html>