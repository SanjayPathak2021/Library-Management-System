

<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
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
<body style="background-color: green">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="" style="font-size: 30px;">Library Management System(LMS)</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="Admin/AdminLogin.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span style="font-size: 30px; color: white;font-style: bold"><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row" style="margin-bottom: 30px">
		<div class="col-md-4 bg-success text-warning" id="side_bar" style="border-radius: 20px;border-left: 10px solid magenta;margin-left: 50px;border-right: 10px solid black;">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Sunday off)</li>
			</ul>
			<h5>What we provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>		
		<div class="col-md-4 bg-dark text-white" id="main_content" style="border-radius: 30px;margin-left: 30px;border: 5px solid whitesmoke;border-top: 10px solid yellow;">
			
			<form action="register.php" method="post">
				
				<div class="a">
                            <legend><h1 style="font-size: 30px;" class="text-white text-center mt-3">User Registration Form</h1></legend>
							<div class="form-group">
							<label for="name">Full Name:</label>
							<input type="text" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="name">Email ID:</label>
							<input type="text" name="email" class="form-control " required>
						</div>
						<div class="form-group">
							<label for="name">Password:</label>
							<input type="password" name="password" class="form-control " required>
						</div>
						<div class="form-group">
							<label for="name">Phone Number:</label>
							<input type="text" name="phone" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="name">Address:</label>
							<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
						</div>
						<center> <button type="submit" class="btn btn-warning " style=" margin-bottom: 30px">Register</button></center>

				</div>
				
			</form>
	</div>
	<div class="col-md-4">

	</div>
	
</body>
</html>

