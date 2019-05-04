<?php
include('connect.php');
?>
<!doctype html>
<html lang="en">
<head>
	<title>Login</title>
</head>
<body>

<form action="check.php" method="POST">

User ID :@<input type = "text" name="uid">

Password : <input type="password" name="pwd">

<button type="submit" name="submit">LOG-IN</button>

</body>
</html>