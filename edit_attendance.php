<?php
$con = mysqli_connect('localhost', 'root', '', 'attendance');
$id_number = isset($_GET['id_number']) ?  $_GET['id_number'] : null;
?>

<!DOCTYPE html>

<html>
	<head>
	<title>Class View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="picture/attendance.jpg" />

	
	
	<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	
    <link href="css/phonebook.css" rel="stylesheet">
	<script src="bootstrap-3.3.7/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="js/phonebook.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<style>
		body	
		{
			background-image: url("picture/web.jpg");
			background-size: cover
		}
	</style>
</head>
<body>
<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<img src="picture/qq1.png" />
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
	<div class="container">
	
		<button type="button" class="btn btn-primary" id="save_attendance">Save Attendance</button> 
		<input type="hidden" id="class_id" value="<?php echo isset($_GET['class_id']) ? $_GET['class_id'] : null?>">
		<div class="form-group">
			<label for="time">Time</label>
			<input type="text" class="form-control" id="time">
		</div>
		<table  class="table">
			<tr>
			  <th>ID Number</th>
			  <th>Last Name</th>
			  <th>First Name</th>
			  <th>Middle Initial</th>
			  <th>Name Extension</th> 
			  <th>Status</th>
			</tr>
			<?php 
			$query = "
            SELECT 
                student.id_number, 
                student.last_name, 
                student.first_name, 
                student.middle_initial, 
                student.name_extension, 
                take_attendance.status
            FROM 
                `take_attendance`, 
                student, 
                class
            WHERE
                take_attendance.id_number = student.id_number AND
                class.class_id = take_attendance.class_id AND
                take_attendance.id_number = ".$id_number." and 
                student.id_number = ".$id_number;
			$result = mysqli_query ($con,$query);
			while($row = mysqli_fetch_array($result))
			{
			?>
			<tr>
				<td><?php echo $row['id_number'];?></td>
				<td><?php echo $row['first_name'];?></td>
				<td><?php echo $row['last_name'];?></td>
				<td><?php echo $row['middle_initial'];?></td>
				<td><?php echo $row['name_extension'];?></td>

				<td>
					<label class="radio-inline">
						<input class="fornm-control" type="radio" id="Present" value="<?php echo $row['id_number'];  ?>" name="<?php echo $row['id_number'];   ?>" <?php echo $row["status"] == "Present" ? "checked" : false ?>> Present 
					</label>
					<label class="radio-inline">
						<input class="fornm-control" type="radio" id="Absent"  value="<?php echo $row['id_number'];  ?>" name="<?php echo $row['id_number'];  ?>" <?php echo $row["status"] == "Absent" ? "checked" : false ?> />Absent 
					</label>
					<label class="radio-inline">
						<input class="fornm-control" type="radio" id="Late"  value="<?php echo $row['id_number'];  ?>" name="<?php echo $row['id_number'];  ?>" <?php echo $row["status"] == "Late" ? "checked" : false ?> />Late 
					</label>
					<label class="radio-inline">
						<input class="fornm-control" type="radio" id="Excuse"  value="<?php echo $row['id_number'];  ?>" name="<?php echo $row['id_number'];  ?>" <?php echo $row["status"] == "Excuse" ? "checked" : false ?> />Excuse 
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