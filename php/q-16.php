<?php
  
// PHP code to create 
// multidimensional array
 
$value = array(
     
    "float value" => array(
     
        "A" => 95,
        "B" => 85,
        "C" => 74,
    ),
         
    "Float Value" => array(
        
        "A" => 78,
        "B" => 98,
        "C" => 46,
    ),
     
    "Float Value" => array(
        "A" => 88,
        "B" => 46,
        "C" => 99,
    ),
);
  
// Accessing the array element 
// using dimensions 
      
// It will date(format)isplay the value of
// array
   echo $value['value']['A'] . "<br>";    
// Accessing array elements using for each loop

foreach($value as $value) {
    echo $value['A']. " ".$value['B']." ".$value['C']."<br>"; 
}
      
?>