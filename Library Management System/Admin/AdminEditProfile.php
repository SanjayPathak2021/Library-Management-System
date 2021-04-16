<?php
session_start();

 	$connection=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,"user_details");
	$query = "select * from admins where email= '$_SESSION[email]'";
	$query_run=mysqli_query($connection,$query);

  $name="";
  $email="";

  $phone="";


	while($row=mysqli_fetch_assoc($query_run))
	{
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
       

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Edit Profile</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<style type="text/css">
	#side_bar{
		background-color: whitesmoke;
		padding:  15px;
		width: 200px;
		height: 300px
	}
		.navbar-brand:hover{
color: black
font-size: 30px;
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
						<a href="adminViewProfile.php" class="nav-link" >View Profile</a>

					</li>
					
					<li class="nav-item">
							<a href="AdminEditProfile.php" class="nav-link">Edit Profile</a>

					</li>

						<li class="nav-item">
					<a href="AdminChangePassword.php" class="nav-link">Change password</a>

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
			<div class="col-md-4" style=" background-color: blue; border-radius: 30px">
				
                    <form action="AdminProfileUpdate.php" method="POST" style="color: white">
                    	<legend style="font-size: 30px;margin-top: 30px;border-bottom: 10px solid
				         red"><center>Edit Admin Profile</center></legend>
                    	<div class="form-group"
                    
                    		<label style="font-weight: bold;"> Name:</label>
                    		
                    	    <input type="text" name="name"class="form-control"
                    	     value="<?php echo($name);?>">
                    	     <br>

                    	</div>

                    	<div class="form-group">
                    		<label style="font-weight: bold;">Email:</label><br>
                    	    <input type="text" name="email"class="form-control"
                    	     value="<?php echo($email);?>">
                               <br>
                    	</div>

                    	<div class="form-group">
                    		<label style="font-weight: bold;"> Phone No:</label>
                    	    <input type="text" name="phone" class="form-control"
                    	     value="<?php echo($phone);?>">
  							<br>
                    	</div>

                    	<center><button  type="submit"name="update" class="btn btn-warning" style="font-weight: bold;margin-bottom: 30px"> Update</button></center>
                    </form>


			</div>
			<div class="col-md-4"></div>

				
			</div>
		</div>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>