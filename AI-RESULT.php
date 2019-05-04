1<!-- Note : Point will be given according for 1 ATTEMPT = 1x5 | 1 Execution = 1x10 | 1 Non-Execution = -1x5 -->
<!-- Highest score participant will be declared winner -->

<html>
<head>
<title>AI Result</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
</head>
<body style="background-color:lightgray;">
<br><br><br><br><br><br>
<div class="container text-center" style="background-color:white;padding:40px;border-radius:5px;box-shadow: 5px 5px 5px rgba(0,0,0,.3);">
<form action="" method="POST">
	<h1 style="color:red;">Al Result Generator</h1>
	<hr><br>
	<input type="number" name="first" placeholder="Timing of Participant...">
	<br><br>
	<input type="number" name="second" placeholder="Attempted Questions">
	<br><br>
	<input type="number" name="third" placeholder="Executed..."> <input type="number" name="forth" placeholder="Non-Executed...">
	<br><br><br>
	<button type="submit" name="submit">Result</button>
	<br><br>
	<?php
		if(isset($_POST['submit']))
		{
			$first = $_POST['first'];
			$second = $_POST['second'];
			$third = $_POST['third'];
			$forth = $_POST['forth'];
			
		if($second == 0)
		{
			echo "<br><font color='red'>Disqualified for not attempting any question</font>" ;
		}
		else
		{

		$a = $first ;
		$b = $second * 5 ;
		$c = $third * 10 ;
		$d = $forth * 5 ;
		
		$e = $b + $c ;
		$f = $a + $d ;
		
		$g = $e - $f ;
		
			echo "<br>Score : ".$g ;
		}
		
		}
	?>
	
</form>
</div>

<div class="text-center">
<br><br>
	© copyright 2018 reserved.
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>