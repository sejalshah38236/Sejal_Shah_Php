
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		Number  <input type="number" name="number"/></br></br>
                <input type="submit" value="submit" name="subtn"/>
<?php
if (isset($_POST['submit'])) { //to check if the form was submitted
 $value= $_POST['value'];
 echo $username;
}

$arr=array("0"=>"Even","1"=>"Odd");

$check=54;

echo "Your number is: ".$arr[$check%2];

?>
</form>
</body>
</html>
