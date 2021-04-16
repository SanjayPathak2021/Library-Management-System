<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"user_details");
$query="update users set Name='$_POST[name]',Email='$_POST[email]',
Phone='$_POST[phone]',Address='$_POST[address]'";
$query_run=mysqli_query($connection,$query);


?> 
<script type="text/javascript">
	alert("Profile Updated successfully !");
	window.location.href="user_dashboard.php";
</script>