<!DOCTYPE html>
<html>
<body>
 
<?php  
$n = 0;  
$a = 0;  
$b = 1;  
echo "Fibonacci series with the first 2 numbers as 0 and 1 is: ";   
echo "$a, $b";  
 
while ($n < 8 )   
{  
$c = $b + $a;  
echo ", ";
echo "$c";  
$a = $b;  
$b = $c;  
$n = $n + 1;
}
?> 
 
</body>
</html>