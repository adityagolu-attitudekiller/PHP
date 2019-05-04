<html>
	<head>
		<title> Sign- Up </title>
	</head>
	<body>
		<center>
		<form action="" method="POST">
		<table>
			<tr><td>Name</td><td><input type="text" name="name" required></td></tr>
			<tr><td>User Name</td><td><input type="text" name="username" required></td></tr>
			<tr><td>Password</td><td><input type="password" name="userpass" required></td></tr>
			<tr><td>Email Id</td><td><input type="email" name="userid" required></td></tr>
			<tr><td>Status</td><td><select name="userstatus" required><option value="Fresher">Fresher</option><option value="Web-Developer">Web-Developer</option></td></tr>
		</table>
		<button type="submit" name="reg">Register</button>
		</form>
	</body>
</html>
<?php
include("connect.php");	
	if(isset($_POST['reg']))
	{
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['userpass'];
		$email = $_POST['userid'];
		$status = $_POST['userstatus'];
		
		$checkemail = $email;
		$checkusername = $username;
		
		$a = "SELECT * FROM users WHERE emailid='$checkemail' AND username='$checkusername' ";
		$b = mysqli_query($conn,$a);
		if($row = mysqli_fetch_assoc($b))
		{
			$existemail = $row['emailid'];
			$existusername = $row['username'];
		}
		
		if(!$existemail = $email && $existusername = $username)
		{
		$sql = "INSERT INTO users (name, username, password, emailid, status) VALUES ('$name', '$username', '$password', '$email', '$status')";
		
		$result = $conn->query($sql);
		
		echo "Registered";
		}
		else
		{
			echo "Email-Id or Username Already Exist";
		}
		
	}
?>