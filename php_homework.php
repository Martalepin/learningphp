<html>
 <head>
  <title>php_homework</title>
 </head>
 <body>
 <?php 
		$x = 1.50; //variable x to store a value
		$y = 1.50;
		$total = $x + $y; //variable total to store the addition of the values on variables x and y
		
		
		$brk = "empanadas"; 
		$brkd = "coffee";
		
		echo "I love " . $brk . " and " . $brkd ." for my breakfast everyday! ";
		echo  "so, I spend " . $total ." dollars every morning!"; 
		echo "<br>";
		echo "<br>";
		
		$t = date("H"); //Creating a variable t that stores the value of time, pulled from the server. date is a method buitl in PHP to retrieve the date from the server
		if($t % 2 ){ 
				echo "Check your time, this is an even hour!";  
			} else { 
					echo "Check your time, this is an odd hour!"; 
			}
		
		
 ?> 
 </body>
</html>
