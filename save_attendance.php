<?php
$con = mysqli_connect('localhost', 'root', '', 'attendance');
$class_id = isset($_GET['class_id']) ?  $_GET['class_id'] : null;
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
	
<<<<<<< HEAD
		<button type="button" class="btn btn-primary" id="save_attendance">Save Attendance</button> 
		<input type="hidden" id="class_id" value="<?php echo isset($_GET['class_id']) ? $_GET['class_id'] : null?>">
		<div class="form-group">
			<label for="time">Time</label>
=======
		<button type="button" class="btn btn-dark" id="save_attendance">Save Attendance</button> 
		<input type="hidden" id="class_id" value="<?php echo isset($_GET['class_id']) ? $_GET['class_id'] : null?>">
		<div class="form-group">
			<label for="time">Time Stamp</label>
>>>>>>> Update for finalization
			<input type="text" class="form-control" id="time">
		</div>
		<table  class="table">
			<tr>
			  <th>ID Number</th>
<<<<<<< HEAD
			  <th>Last Name</th>
			  <th>First Name</th>
			  <th>Middle Initial</th>
=======
			  <th>First Name</th>
			  <th>Middle Initial</th>
			  <th>Last Name</th>
>>>>>>> Update for finalization
			  <th>Name Extension</th> 
			  <th>Status</th>
			</tr>
			<?php
			$code = $_GET['class_id'];
			$query = "
				SELECT
					student.id_number, 
					student.last_name, 
					student.first_name,
					student.middle_initial , 
					student.name_extension 
				FROM 
					class,
					student_class, 
					student 
			WHERE
				class.class_id = student_class.class_id and 
				student_class.id_number = student.id_number AND
				class.class_id = " . $class_id;
			$result = mysqli_query ($con,$query);
			while($row = mysqli_fetch_array($result))
			{
			?>
			<tr>
				<td><?php echo $row['id_number'];?></td>
				<td><?php echo $row['first_name'];?></td>
<<<<<<< HEAD
				<td><?php echo $row['last_name'];?></td>
				<td><?php echo $row['middle_initial'];?></td>
=======
				<td><?php echo $row['middle_initial'];?></td>
				<td><?php echo $row['last_name'];?></td>
>>>>>>> Update for finalization
				<td><?php echo $row['name_extension'];?></td>
				<td>
					<label class="radio-inline">
						<input class="fornm-control" type="radio" id="Present" value="<?php echo $row['id_number'];  ?>" name="<?php echo $row['id_number'];  ?>" /> Present 
					</label>
					<label class="radio-inline">
						<input class="fornm-control" type="radio" id="Absent"  value="<?php echo $row['id_number'];  ?>" name="<?php echo $row['id_number'];  ?>" />Absent 
					</label>
					<label class="radio-inline">
						<input class="fornm-control" type="radio" id="Late"  value="<?php echo $row['id_number'];  ?>" name="<?php echo $row['id_number'];  ?>" />Late 
					</label>
					<label class="radio-inline">
						<input class="fornm-control" type="radio" id="Excuse"  value="<?php echo $row['id_number'];  ?>" name="<?php echo $row['id_number'];  ?>" />Excuse 
					</label> 
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
	<script src="bootstrap-3.3.7/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="js/attendance.js"></script>
	<script  src="jquery-3.3.1.min.js"></script>

	<script>
	
	$( 'document' ).ready(function() { 

		$('#save_attendance').click(function(){ 
			var selected=[];
			var current= 0;
			$('input[type="radio"]:checked').each(function(){
				selected[current]=[$(this).attr('id'), $(this).val() ];
				current++;
			});  

			var class_id = $('#class_id').val();
			var time = $('#time').val();   
			
			$.ajax({
			  url: 'attendance_process.php',
			  type: 'POST',
			  data:{
				'save_attendance':1,
				'studID_and_Status':selected,
				'class_id':class_id,
				'time':time
			  },
			  async: true,
			  dataType: 'JSON',
			  success: function(response,data){
					window.location.replace('takeview.php?class_id=' + class_id)
			  }, 
			  error: function(xhr, textStatus, error){
					console.info(xhr.responseText);
			  }

			});
		});
	});
	</script>
</body>
</html>