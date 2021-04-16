<?php
include('functions.php');
session_start();

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"user_details");

$author_name="";

//  for joining the book and author table this is the query 
$query =" select * from authors";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Registerd Authors</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
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
		 box-shadow: 10px 10px 5px  black;
		 display: block;
	}

</style>
</head>
<body>
	
		<nav class=" navbar navbar-expand-lg  navbar-dark bg-dark ">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="" class="navbar-brand"> Library Management System</a>
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
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand text-white" href="admin_dashboard.php">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <ul class="navbar-nav collapse navbar-collapse" id="collapsibleNavbar">
 
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Book
      </a>
      <div class="dropdown-menu bg-dark">
        <a class="dropdown-item text-primary" href="addBook.php">Add Book</a>
        <a class="dropdown-item text-primary" href="manageBook.php">Manage Book</a>
        
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Category
      </a>
      <div class="dropdown-menu bg-dark">
        <a class="dropdown-item text-primary" href="addCategory.php">Add New Category</a>
        <a class="dropdown-item text-primary" href="managecategory.php">Manage New category</a>
      </div>
    </li>

	<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
	<div class="dropdown-menu bg-dark ">
		<a href="add_author.php" class="dropdown-item text-primary">Add New Author</a>
		<a href="manage_author.php" class="dropdown-item text-primary">Manage Authors</a>
	</div>
	</li>
	<li class="nav-item">
	<a href="issue_book.php" class="nav-link">Issue Book</a>
</li>
  </ul>
</nav>

		<br>
		<h1>

			<span> <marquee> This is the Libraray Management System .It opens at 8:00 Am and closes at 5:00 PM</marquee>
			 </span>
		</h1>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<table class="table table-dark table-hover text-center">
				<center >
			
		<legend style="font-size: 30px;color: cyan;background-color: black;font-style: italic;border-bottom: 10px solid red">View Registered Authors</legend>

		</center>
    <thead class="table table-primary">
      <tr>
        
        <th>Authors Name</th>
       

        <!-- <th>Address</th> -->

      </tr>
    </thead>

      <?php
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){

     
      $author_name=$row['author_name'];
      
     
		?>
		<tbody class="table table-warning text-primary">
					<tr>
			
			<td><?php  echo $author_name;?></td>

		</tr>
		</tbody>
		<?php
	}

      ?>
    
  </table>
	</div>
	<div class="col-md-2"></div>

</div>

<!-- <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->
</body>
</html>