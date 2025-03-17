<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <h2>using if statement</h2>
    <h3>choose the food you like </h3>

    <form action="index.php" method="post">
    <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
    <input type="checkbox" name="burger" value="Burger">Burger<br>
    <input type="checkbox" name="taco" value="Taco">Taco<br>
    <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
    <input type="submit" name="submit1">


    </form>
    <h2> using arrays</h2>
    <h3>choose the food you like </h3>
    <form action="index.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
    <input type="checkbox" name="foods[]" value="Burger">Burger<br>
    <input type="checkbox" name="foods[]" value="Taco">Taco<br>
    <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
    <input type="submit" name="submit2">
    </form>
</body>

</html>
<?php
//using if conditions
if(isset($_POST["submit1"])){
    echo "USING IF STATEMENT<br>";
    if(isset($_POST["pizza"])){
        echo "you like pizza <br>";
    }
    if(isset($_POST["burger"])){
        echo "you like burger <br>";
    }
    if(isset($_POST["taco"])){
        echo "you like taco <br>";
    }
    if(isset($_POST["hotdog"])){
        echo "you like hotdog <br>";
    }
    if(empty($_POST["pizza"])){
        echo "you DON'T ike pizza <br>";
    }
    if(empty($_POST["burger"])){
        echo "you DON'T like burger <br>";
    }
    if(empty($_POST["taco"])){
        echo "you DON'T like taco <br>";
    }
    if(empty($_POST["hotdog"])){
        echo "you DON'T like hotdog <br>";
    }
     
}
//using arrays 
$allfoods=["Pizza","Burger", "Taco", "Hotdog"];

if(isset($_POST["submit2"])){
    echo "USING ARRAYS<br>";
    $foods=null;
    if(isset($_POST["foods"])){
 $foods=$_POST["foods"];
    foreach($foods as $food){

        echo "you like ". $food."<br>";

    }
    }
   
    foreach(array_diff( $allfoods,$foods) as $unselectedfoods){
        echo "you DON'T like ". $unselectedfoods."<br>";

    }
   
}


?>