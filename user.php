
<!doctype html>
<html lang="en">
<head>
	<title>My Profile</title>
</head>
<body>

<?php	
session_start();
	
    echo "<div style='
	    position:absolute;
	    top:340px;
	    left:80px;
	    height:25px;
	    width:;
    '><a href='detailed.php'><font color='black'>Name :</font> <font size='4%' color='red'>".$_SESSION['username']." ".$_SESSION['password']."</font><br>";
	echo "<font color='black'>User ID :</font> "."<font size='4%' color='red'>@".$_SESSION['info']."</font></a></div>";
	echo "User Status : "."<font size='2%' color='red'>@".$_SESSION['status']."</font></div>";
	
?>

</body>
</html>