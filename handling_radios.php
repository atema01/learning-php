<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tester</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="radio" name="credit_card" value="Visa"  >VISA<br>
    <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
    <input type="radio" name="credit_card" value="American Express">American Express<br>
    <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
// using if conditions only
// if(isset($_POST["confirm"])){
// if(isset($_POST["credit_card"])){
//     echo "you selected ".$_POST["credit_card"];
// }
// else {echo "please select one of the optons";}
// }


// using switch
if(isset($_POST["confirm"])){
    $credit_card=null;
if(isset($_POST["credit_card"])){
    $credit_card=$_POST["credit_card"];

}
switch($credit_card){
    case "Visa":
        echo" you have selected visa";
        break;
    case "Mastercard":
        echo "you have selected Mastercard";
        break;
    case "American Express";
     echo"you have selected American Express";
     default: echo "select on";
}
}

?>