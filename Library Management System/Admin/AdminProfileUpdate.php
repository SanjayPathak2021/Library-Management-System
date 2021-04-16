<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"user_details");
$query="update admins set name='$_POST[name]',email='$_POST[email]',
phone='$_POST[phone]'";
$query_run=mysqli_query($connection,$query);


?> 
<script type="text/javascript">
	alert(" Admin Profile Updated successfully !");
	window.location.href="admin_dashboard.php";
</script>