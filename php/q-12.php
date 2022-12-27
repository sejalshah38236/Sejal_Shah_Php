<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
          <?php
    // define array
    $a = array(1, 5, 2, 5, 1, 3, 2, 4, 5);
      
    // print original array
    echo "Original Array : \n";
    print_r($a);
     
    // remove duplicate values by using s
    // flipping keys and values
    $a = array_flip($a);
   
    // restore the array elements by again 
    // flipping keys and values.
    $a = array_flip($a);
  
    // re-order the array keys
    $a= array_values($a);
  
    // print updated array
    echo "\nUpdated Array : \n ";
    print_r($a);
?>
</body>
</html>