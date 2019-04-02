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

	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query2 = "SELECT * FROM `student_class` WHERE CONCAT(`id_number`,`class_id`) LIKE '%".$search."%'";
		$search_result = filterTable($query2);
    
	}
	else {
		$query2 = "SELECT * FROM `student_class`";
		$search_result = filterTable($query2);
	}

	// function to connect and execute the query
	function filterTable($query2)
	{
		$connect = mysqli_connect("localhost", "root", "", "attendance");
		$filter_Result = mysqli_query($connect, $query2);
		return $filter_Result;
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
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<div class="container" style="width:300px">
		<form method="post" action="addsc.php"> 
			<center><h1><strong><font color="#ff80aa" face="Cooper Std Black">Student Class</font></strong></h1></center>
			<label>ID Number</label>
			<select name="id_number" class="form-control" multiple="multiple">
					<?php while($row = mysqli_fetch_array($query)):?>
			  <option value="<?php echo $row['id_number'] ?>"><?php echo $row['first_name'] . " " . $row['middle_initial']. " " . $row['last_name']. " " . $row['name_extension']?></option>
					<?php endwhile;?>
			</select>
			<label>Class ID</label> 
			<select name="class_id" class="form-control" required>
					<?php while($row = mysqli_fetch_array($query1)):?>
			  <option value="<?php echo $row['class_id'] ?>"><?php echo $row['section'] . ' ' . '(' . $row['subject_code'] . ')'?></option>
					<?php endwhile;?>
			</select>
			<center><input class="btn btn-dark" type="submit" value="Save"></button></center>
		</form>
	</div>
	
	<div class="container">
			<center><h1><strong><font color="#ff80aa" face="Cooper Std Black">Student Class</font></strong></h1></center>
			<div class="container">          
  <table class="table">
    <thead>
      <tr>
<<<<<<< HEAD
		<th>ID Number:</th>
        <th>Class Number:</th>
		<th>Action:</th>	
=======
		<th>ID Number</th>
        <th>Class Number</th>
>>>>>>> Update for finalization
      </tr>
    </thead>
	<?php while($row = mysqli_fetch_array($search_result)):?>
    <tbody>
      <tr>
        <td><?php echo $row['id_number'];?></td>
		<td><?php echo $row['class_id'];?></td>
		<td><div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="False">
<<<<<<< HEAD
      Dropdown
=======
      Action
>>>>>>> Update for finalization
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="dsc.php?number=<?php echo $row["number"]; ?>">Delete</a>
      <a class="dropdown-item" href="esc.php?id_number=<?php echo $row["id_number"]; ?>">Update</a>
    </div>
  </div></td>
        
      </tr>
	  </tbody>
	  <?php endwhile;?>
	 </table>
	</div>	
	</div>
	
	


</body>

</html>
