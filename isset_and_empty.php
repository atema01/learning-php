<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tester</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username</label>
        <input type="text" name="username" ><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit">

    </form>

</body>
</html>
<?php
// foreach($_POST as $key => $value){
//     echo "{$key} = {$value} <br>";
// }

$username=$_POST["username"];
$password=$_POST["password"];
if(isset($_POST["login"])){
if(empty($username)){
    echo "miising username" ;
}
else if(empty($password)){
    echo "missing password";
}
else echo"hello {$username}";

}

?>