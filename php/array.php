<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php

			echo "This Is an Example Of Php Array";

			$a = 5;
			$b = 6;

			$txt = "Hello world!";
			echo "<br>";
			echo "$a";
			echo "<br>";
			echo "$b";
			echo "<br>";
			echo "$txt";

		/*Math*/

		echo(min(0, -12 ,12 ,36 ,200 ,96 , 8)."<br>");
		echo(max(56 ,569 ,89 ,120 ,12336)."<br>");
		
		echo(abs(-6.5))."<br>";
		echo(abs(12.5)."<br>");

		echo(sqrt(81)."<br>");

		echo(round(0.6));
		echo(rand()."<br>");

		/*constant example*/

		define("Hi", "Welcome to my new php page!")."<br>";
		echo Hi."<br>";

		/*constant arrays*/

		define("Colors", "Red , Green , Blue , Black , Pink");
		echo Colors."<br>"."<br>";

		/*Constants are Global */

		define("City" , "Hello Ahmedabad !");

		function myTest()
		{
			echo City;
		}
		myTest();
		?>



</body>
</html>