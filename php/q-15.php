<!DOCTYPE html>  
<html>  
<body>  
<?php  
//Initialize array   
$numbers = array(1, 2, 3, 4, );   
$total = 0;  
   
//Loop through the array to calculate sum of elements  
for ($i = 0; $i < count($numbers); $i++) {   
   $total = $total + $numbers[$i];  
}    
print("Sum of all the elements of an array: " . $total);  
?>  
</body>  
</html>  