<html>
<head><center>Student Information Form</center></head><br>
<body>
<form action="" method="POST">
Gender <br> <input type="radio" name="Gender" value="1">MALE</input>
       <input type="radio" name="Gender" value="2">FEMALE</input>
       <input type="radio" name="Gender" value="3">Transe</input>
       <input type="radio" name="Gender" value="4">Dont Know</input><br><br>
Hobbies <br> <input type="checkbox" name="Hobbies" value="1">Read</input>
       <input type="checkbox" name="Hobbies" value="2">Play</input>
	   <input type="checkbox" name="Hobbies" value="3">Sing</input>
	   <input type="checkbox" name="Hobbies" value="4">Travel</input><br><br>
<button name="submit" >SUBMIT</button>
</form>

<?php
	if(isset($_POST['submit']))
	{
	$gender = $_POST['Gender'];
	$hobbies = $_POST['Hobbies'];
	echo $gender.$hobbies ;
	}
?>

</body>
</html>