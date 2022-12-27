<html>
<title> Grade </title>
<body>
<h1> Display Grade of Student as per marks obtained</h1>
<form method="POST" action="q-1.php">
Enter the Marks of the student </br>
<fieldset>
Physics:  <input type="number" name="phy"/></br></br>
Chemistry:<input type="number" name="chem"/></br></br>
Maths:    <input type="number" name="maths"/></br></br>
Biology:  <input type="number" name="bio"/></br></br>
English:  <input type="number" name="eng"/></br></br>
<input type="submit" value="Calculate" name="subtn"/>
</fieldset>


<?php
$ph=$_POST['phy'];
$ch=$_POST['chem'];
$mt=$_POST['maths'];
$bi=$_POST['bio'];
$en=$_POST['eng'];
$per=0;
if(isset($_POST['subtn']))
 {
  $per=($ph+$ch+$mt+$bi+$en)/5;
  echo"Percentage obtained by student is $per </br>";
  
  if($per>=90)
  {
   $per=1;
  }
  else if($per>=80)
  {
   $per=2;
  }
  else if($per>=70)
  {
   $per=3;
  }
  else if($per>=60)
  {
   $per=4;
  }
  else if($per>=40)
  {
   $per=5;
  }
  else
  {
   $per=6;
  }
  
  switch($per)
  {
   case 1:
   echo "Grade : A";
   break;

   case 2:
   echo "Grade : B";
   break;

   case 3:
   echo "Grade : C";
   break;
   
   case 4:
   echo "Grade : D";
   break;
   
   case 5:
   echo "Grade : E";
   break;
   
   default:
   echo "Fail!!";
   }
  
 }
 ?>
</form>
</body>
</html>
