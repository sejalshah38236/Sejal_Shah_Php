<!DOCTYPE html>
<html>
<body>
 
<?php  
 
$n=244;  
$sum=0;  
$i=$n;
 
while($i!=0)  
{  
$x=$i%10;  
$sum=$sum+$x*$x*$x;  
$i=$i/10;  
}
 
if($n==$sum)  
{  
echo "$n is an Armstrong Number.";  
}  
 
else  
{  
echo "$n is not an Armstrong Number.";  
}  
?> 
 
</body>
</html>