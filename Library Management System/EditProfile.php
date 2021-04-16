<?php
session_start();

 	$connection=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,"user_details");
	$query = "select * from users where Email= '$_SESSION[email]'";
	$query_run=mysqli_query($connection,$query);

  $name="";
  $email="";

  $phone="";
  $address="";
 
	while($row=mysqli_fetch_assoc($query_run))
	{
        $name=$row['Name'];
        $email=$row['Email'];
        $phone=$row['Phone'];
        $address=$row['Address'];

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">
	#side_bar{
		background-color: whitesmoke;
		padding:  15px;
		width: 200px;
		height: 300px
	}
</style>
</head>
<body style=" background-color: aqua">
	
		<nav class=" navbar navbar-expand-lg  navbar-dark bg-dark">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="signup.php" class="navbar-brand" style="font-size: 50px"> Library Management System</a>
				</div>
				<span>
					<strong>
						<font  style="color:white">Welcome :  <?php echo $_SESSION['name'];?>
				</font></strong></span>

				<span>
					<strong>
						<font style="color: white" ">Email :  <?php echo $_SESSION['email'];?>
				</font></strong></span>
				<ul class="nav navbar-nav navbar-right" style="font-size: 20px">


					<li class="nav-item">
						<a href="ViewProfile.php" class="nav-link">View Profile</a>

					</li>
					
					<li class="nav-item">
							<a href="EditProfile.php" class="nav-link">Edit Profile</a>

					</li>

						<li class="nav-item">
					<a href="ChangePassword.php" class="nav-link">Change password</a>

					</li>
					<li class="nav-item">
						<a href="LogOut.php" class="nav-link">LogOut</a>
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
			<div class="col-md-4 bg-warning text-primary" style="border-radius: 30px; border:  10px solid
		whitesmoke;border-top: 10px solid darkblue">
				
                    <form action="ProfileUpdate.php" method="POST" style="font-size: 30px">
                    	<legend style="font-size: 30px;margin-top: 30px;border-bottom: 10px solid
				         red"><center>Edit User Profile</center></legend>
                    	<div class="form-group"
                    		<label> Name:</label>
                    		
                    	    <input type="text" name="name"class="form-control"
                    	     value="<?php echo($name);?>">
                    	     <br>

                    	</div>

                    	<div class="form-group">
                    		<label>Email Id:</label>
                    	    <input type="text" name="email"class="form-control"
                    	     value="<?php echo($email);?>">
                               <br>
                    	</div>

                    	<div class="form-group">
                    		<label> Phone No:</label>
                    	    <input type="text" name="phone" class="form-control"
                    	     value="<?php echo($phone);?>">
  							<br>
                    	</div>

                    	<div class="form-group">
                    		<label> Address:</label>
                    	   <textarea rows="3" cols=" 40" name="address" class="form-control">
                    	   	<?php echo($address);?>
                    	   </textarea>

                    	</div>
                    	<center><button  type="submit"name="update" class="btn btn-primary" style="margin-bottom: 30px;margin-top: 20px"> Update</button></center>
                    </form>


			</div>
			<div class="col-md-4"></div>

				
			</div>
		</div>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>