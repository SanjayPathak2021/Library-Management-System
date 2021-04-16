<?php
session_start();
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"user_details");
$password="";
$query="select * from users where Email='$_SESSION[email]'";
$query_run=mysqli_query($connection,$query);


	while($row=mysqli_fetch_assoc($query_run))
	{
       $password=$row['Password'];
	}
	if ($password == $_POST['oldPassword']) {
		$query="update users set Password='$_POST[newPassword]' where Email='$_SESSION[email]'";
		$query_run=mysqli_query($connection,$query);
	} 

	?>
<script type="text/javascript">

	alert("Password Updated successfully.. !");
	window.location.href="user_dashboard.php";
</script>
