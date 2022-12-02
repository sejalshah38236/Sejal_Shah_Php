<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";

}

    echo "  <br><br>";
    $marks = "First";
    switch ($marks) {
        case "Sem1":
         echo "My result is Fist Class";
        break;
      case "sem2":
      echo " My Result is Fail ";
      case "Sem3":
      echo "  My Result is Distinction";
      case "Sem4":
      echo " My Result is First Class";
  
        break;
      default:
          echo "  My Result is neither First Class, Fail , Distinction ";
        # code...
        break;
    }

?>
