<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	

          <?php
    $a = '1';
    $b = &$a;
    echo "After assigning <b>&\$a</b>. The value is: <b>" . $b . "</b><br>";
    $b = "2$b";
    echo "<br>After assigning <b>2\$b</b>. The value is: <b>" . $b . "</b><br><br>";



    echo "<br>\$a = '1'<br>";
    echo "\$b = &\$a<br>";
    echo "\$b = \"2\$b\"<br><br>";

    echo "<br>Here the <b>\$a = 1</b> will assign value 1 in a string form to \$b.<br>";
    echo "<b>\$b = &\$a</b> means \$b points to the same memory space as \$a. So \$b will get value of \$a. Watever changes we made in \$b will appied in \$a also that means both will have same value<br>";
    echo "Lets check value of \$a.     Value of \$a is : <b> $a </b><br>";
    echo "<b>\$b = 2\$b</b> it changes \$b (and with it, \$a as well) to be the string “2” followed by whatever \$b was a moment ago (which was ‘1’, so the result is now “21”) ";
    
    ?>


</body>
</html>