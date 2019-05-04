<?php ob_start(); ?>
<html>
<head>
<title>Profile checking...</title>
</head>
<body>
<?php
session_start();
include 'connect.php';
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM users WHERE username='$uid' AND password='$pwd'";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc())
{
    echo "<center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><font color='red' size='5'>UserID or Password used for LOGIN is Invalide !</font></center>";
}
else
{

	$_SESSION['name'] = $row['name'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['emailid'] = $row['emailid'];
	$_SESSION['status'] = $row['status'];
	
    echo "<div style='
	    position:absolute;
	    top:3%;
	    left:10%;
	    height:10%;
	    width:90%;
    '>Name : <font size='2%' color='red'>".$_SESSION['name']." ".$_SESSION['password']."</font><br>";
	echo "User ID : "."<font size='2%' color='red'>@".$_SESSION['emailid']."</font></div><br>";
	echo "User Status : "."<font size='2%' color='red'>@".$_SESSION['status']."</font></div>";
	
	
	header("refresh:1; url=user.php");

}
?>
</body>
</html>