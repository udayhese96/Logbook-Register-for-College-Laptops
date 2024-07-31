<?php
	require("functions.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Laptop Management System (LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="view_profile.php">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Laptops </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New laptop</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_book.php">Manage laptops</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Branch </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_cat.php">Add New Category</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_cat.php">Manage Category</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Faculty</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_author.php">Add New Faculty</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_author.php">Manage Faculty</a>
	        	</div>

		      </li>
	          <li class="nav-item">
		        <a class="nav-link" href="issue_book.php">Issue Laptop</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>This is Laptop mangement system. Lab opens at 8:00 AM and close at 4:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered User</div>
				<div class="card-body">
					<p class="card-text">No. total Users: <?php echo get_user_count();?></p>
					<a class="btn btn-danger" href="Regusers.php" target="_blank">View Registered Users</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Total Laptop</div>
				<div class="card-body">
					<p class="card-text">No of Laptops available: <?php echo get_book_count();?></p>
					<a class="btn btn-success" href="Regbooks.php" target="_blank">View All laptops</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Branch</div>
				<div class="card-body">
					<p class="card-text">No of Branch : <?php echo get_category_count();?></p>
					<a class="btn btn-warning" href="Regcat.php" target="_blank">View Branchs</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">No. of faculty</div>
				<div class="card-body">
					<p class="card-text">No of Faculty: <?php echo get_author_count();?></p>
					<a class="btn btn-primary" href="Regauthor.php" target="_blank">View Faculty</a>
				</div>
			</div>
		</div>
	</div><br><br>
	<div class="row">
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Laptop Issued</div>
				<div class="card-body">
					<p class="card-text">No of laptop issued: <?php echo get_issue_book_count();?></p>
					<a class="btn btn-success" href="view_issued_book.php" target="_blank">View Issued Laptops</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>
