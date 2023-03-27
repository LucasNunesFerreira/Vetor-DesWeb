<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="atv3.php" method="post">
<?php
    foreach ($_POST as $item)
        echo"<input type='checkbox' name='famosos[]' id='famosos[]' value='$item'>$item<br>";
?>
    <input type="submit" value="Enviar">


</form>   
</body>
</html>