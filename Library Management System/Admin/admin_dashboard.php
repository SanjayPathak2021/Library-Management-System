<?php
include('functions.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin DashBoard</title>

  	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#side_bar{
		background-color: whitesmoke;
		padding:  15px;
		width: 200px;
		height: 300px
	}
	.abc :hover{
		 box-shadow: 10px 10px 5px  magenta;
		 display: block;
	}
		.navbar-brand:hover{
color: black
font-size: 30px;
background: magenta;
border-radius: 10px;
	}

</style>
</head>
<body style=" background-color: aqua">
	
		<nav class=" navbar navbar-expand-lg  navbar-dark bg-dark ">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="" class="navbar-brand" style="font-size: 30px;"> Library Management System(LMS)</a>
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
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand text-white" href="admin_dashboard.php">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <ul class="navbar-nav collapse navbar-collapse" id="collapsibleNavbar">
 
      <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" >
        Book
      </a>
      <div class="dropdown-menu bg-dark ">
        <a class="dropdown-item text-primary" href="AddBook.php">Add Book</a>
        <a class="dropdown-item text-primary" href="ManageBook.php">Manage Book</a>
        
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Category
      </a>
      <div class="dropdown-menu bg-dark">
        <a class="dropdown-item text-primary" href="AddCategory.php">Add New Category</a>
        <a class="dropdown-item text-primary" href="Managecategory.php">Manage New category</a>
      </div>
    </li>

	<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
	<div class="dropdown-menu bg-dark ">
		<a href="AddAuthor.php" class="dropdown-item text-primary">Add New Author</a>
		<a href="ManageAuthor.php" class="dropdown-item text-primary">Manage Authors</a>
	</div>
	</li>
	<li class="nav-item">
	<a href="IssueBook.php" class="nav-link">Issue Book</a>
</li>
  </ul>
</nav>

		<br>
		<h1>

			<span> <marquee> This is the Libraray Management System .It opens at 8:00 Am and closes at 5:00 PM</marquee>
			 </span>
		</h1>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="card bg-light abc " style="width: 300px;">
						<div class="card-header bg-info" style="font-weight: bold;font-style: italic;font-size: 30px">Registered User</div>
						<div class="card-body">
							<p class="card-text text-black ">Total numbers of users : <?php echo get_user_count();?></p>
							<a href="RegisteredUser.php" class="btn btn-primary" target="_blank"> View Registered User</a>
						</div>
					</div>
				</div>
<!-- second card view -->
				<div class="col-md-3">
					<div class="card bg-light abc " style="width: 300px">
						<div class="card-header bg-info"style="font-weight: bold;font-style: italic;font-size: 30px"">Registered Books</div>
						<div class="card-body">
							<p class="card-text text-black ">Total numbers of availabe books : <?php echo get_book_count();?></p>
							<a href="RegisteredBook.php" class="btn btn-success" target="_blank"> View Registered Books</a>
						</div>
					</div>
				</div>

<!-- third card view -->

				<div class="col-md-3">
					<div class="card bg-light abc " style="width: 300px">
						<div class="card-header bg-info" style="font-weight: bold;font-style: italic;font-size: 30px">Registered Category</div>
						<div class="card-body">
							<p class="card-text text-black ">Total numbers of category : <?php echo get_category_count();?></p>
							<a href="RegisteredCategory.php" class="btn btn-secondary" target="_blank"> View Category</a>
						</div>
					</div>
				</div>


<!-- 
		// fourth card -->
				<div class="col-md-3">
					<div class="card bg-light abc  " style="width: 300px">
						<div class="card-header bg-info"style="font-weight: bold;font-style: italic;font-size: 30px">Registered Authors</div>
						<div class="card-body">
							<p class="card-text text-black ">Total number of Authors : <?php echo get_author_count();?></p>
							<a href="RegisteredAuthors.php" class="btn btn-warning" target="_blank"> View Registered Authors</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
					<!-- 
		// fifth card -->
				<div class="col-md-3 mt-3">
					<div class="card bg-light abc  " style="width: 300px">
						<div class="card-header bg-info"style="font-weight: bold;font-style: italic;font-size: 30px">Issued Books</div>
						<div class="card-body">
							<p class="card-text text-black ">Total numbers of Issued Books : <?php echo get_issued_book_count();?></p>
							<a href="IssuedBook.php" class="btn btn-success" target="_blank"> View Issued Books</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	
</div>



</body>
</html>