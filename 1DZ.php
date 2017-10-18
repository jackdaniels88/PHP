<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table{
			border-collapse: collapse;

		}
	</style>
</head>
<body>
	<?php
	echo "<table>";
	for ($i=0; $i <=254 ; $i++) { 
		if($i%2==0){
			echo "<tr>";
			for ($b=0; $b <=254 ; $b++) { 
				if($b%2==0){
					echo"<td style='background-color:rgb(0,$i,$b)'></td>";
				}
			}
			echo "</tr>";
		}
	}
	for ($c=0, $d=254; $c <=254, $d >=0 ; $c++, $d--) { 
		if($c%2==0 && $d%2==0){
			echo"<tr>";
			for ($e=0; $e <=254 ; $e++) { 
				if($e%2==0){
					echo"<td style='background-color:rgb($c,$d,$e)'></td>";
				}
			}
			echo "</tr>";
		}
		
	}
	echo "</table>";

	?>
</body>
</html>