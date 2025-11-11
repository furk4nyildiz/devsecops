<?php

if(isset($_POST["value"])){
    $value = $_POST["value"];
    echo $value;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="value">
        <input type="submit" value="Gonder">
    </form>
    
</body>
</html>