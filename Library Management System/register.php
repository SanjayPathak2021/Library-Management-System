
<!-- this is for the database of registration  page or form -->

<?php

$connection=mysqli_connect("localhost","root","");# this line is for connecting the database to localhost
$db=mysqli_select_db($connection,"user_details");# providing table name 
$query="insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[phone]','$_POST[address]')";
# matching and getting the name value for the users from form of signup.php file
$query_run=mysqli_query($connection,$query);



?>
<!-- making alert message for the  -->
<script type="text/javascript">
	alert("Registration done successfully ...");
	//as soon as the user register it will redurect to login.php
	window.location.href="login.php"

</script>