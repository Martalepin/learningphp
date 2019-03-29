<html>
 <head>
  <title>php_homework</title>
 </head>
 <body>
 <?php 
		$x = 1.50;
		$y = 1.50;
		$total = $x + $y;
		
		
		$brk = "empanadas";
		$brkd = "coffee";
		
		echo "I love " . $brk . " and " . $brkd ." for my breakfast everyday! ";
		echo  "so, I spend " . $total ." dollars every morning!";
		echo "<br>";
		echo "<br>";
		
		$t = date("H");
		if($t % 2 ){ 
				echo "Check your time, this is an even hour!";  
			} else { 
					echo "Check your time, this is an odd hour!"; 
			}
		
		
 ?> 
 </body>
</html>