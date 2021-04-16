<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Change Password</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<style type="text/css">
	#side_bar{
		background-color: whitesmoke;
		padding:  15px;
		width: 200px;
		height: 300px
	}
.navbar-brand:hover{
		background: magenta;
		border-radius: 10px;
	}

	
</style>
</head>
<body>
	
		<nav class=" navbar navbar-expand-lg  navbar-dark bg-dark">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="admin_dashboard.php" class="navbar-brand" style="font-size: 30px;font-weight: bold;"> Library Management System(LMS)</a>
				</div>
				<span>
					<strong>
						<font  style="color:white">Welcome :  <?php echo $_SESSION['name'];?>
				</font></strong></span>

				<span>
					<strong>
						<font style="color: white" ">Email :  <?php echo $_SESSION['email'];?>
				</font></strong></span>
				<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
						<a href="adminViewProfile.php" class="nav-link">View Profile</a>

					</li>
					<li class="nav-item">
							<a href="AdminEditProfile.php" class="nav-link">Edit Profile</a>

					</li>
						<li class="nav-item">
					<a href="AdminChangePassword.php" class="nav-link">Change Password</a>

					</li>
					<li class="nav-item">
						<a href="../LogOut.php" class="nav-link">LogOut</a>
					</li>
				</ul>
			</div>
		</nav>

		<br>
		<h1>

			<span> <marquee> This is the Libraray Management System .It opens at 8:00 Am and closes at 5:00 PM</marquee>
			 </span>
		</h1>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="border-radius: 30px;background-color:cyan;border: 10px solid
			blue ">
				
            <form  action="AdminUpdatePassword.php " method="POST">
            	<legend style="font-size: 30px;margin-top: 30px;border-bottom: 10px solid
				         red"><center>Change Admin Password</center></legend>
            	<div class="form-group">
            	<label style="font-weight: bold;"> Old Password:</label>
            	<input type="password" name="oldPassword" class="form-control" focused >
            	</div>

            	<div class="form-group">
            	<label style="font-weight: bold;"> New Password:</label>
            	<input type="password" name="newPassword" class="form-control" focused>
            	</div>
            	<br>
            	<center><button type="submit" class="btn btn-warning" name="update" style="font-weight: bold;margin-bottom: 30px">Update Password </button></center>

            </form>


			</div>
			<div class="col-md-4"></div>

		</div>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>