<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
  	 <?Php
// remove all session variables
session_unset(); 



// destroy the session 
session_destroy(); 


header("location:dashboard.php")
?>
</body>
</html>