<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"user_details");
	$name = "";
	$email = "";
	$phone = "";
	$address = "";
	$query = "select * from users where Email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['Name'];
		$email = $row['Email'];
		$phone = $row['Phone'];
		$address = $row['Address'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body style=" background-color: aqua">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php">Library Management System(LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">

				<li class="nav-item"><a class="nav-link" href="ViewProfile.php">View Profile</a></li>
				<li class="nav-item"><a class="nav-link" href="EditProfile.php">Edit Profile</a></li>
				<li class="nav-item"><a class="nav-link" href="ChangePassword.php">Change Password</a></li>

				<li class="nav-item"><a class="nav-link" href="LogOut.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 bg-dark text-white" style="border-radius: 30px; border:  10px solid
		whitesmoke;border-top: 10px solid darkblue">
			<form >

				<legend style="font-size: 30px;margin-top: 30px;border-bottom: 10px solid
				 red"><center>View  User Profile</center></legend>
				<div class="form-group" style="margin-top: 50px">
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
				</div>
				<div class="form-group">
					<label>Email Id:</label>
					<input type="text" class="form-control" value="<?php echo $email;?>" disabled>
				</div>
				<div class="form-group">
					<label>Phone Number:</label>
					<input type="text" class="form-control" value="<?php echo $phone;?>" disabled>
				</div>
				<div class="form-group" style="margin-bottom: 50px">
					<label>Address:</label>
					<textarea rows="3" cols="40" disabled="" class="form-control"><?php echo $address;?></textarea>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>