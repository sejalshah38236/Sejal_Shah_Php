<!DOCTYPE html>
<html>
<head>
	<title>Php Que 2 </title>
</head>
<body>

		<?php  
           function isLeap($year)  
              {  
                return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
              }  
       //For example  
            for($year=1901; $year<2016; $year++)  
            {  
                If (isLeap($year))  
                    {  
                       echo "$year : LEAP YEAR<br />\n";  
                    }  
                else  
                   {  
                       echo "$year : Not leap year<br />\n";  
                   }  
            }  
?>  
</body>
</html>