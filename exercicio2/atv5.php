<!DOCTYPE html>
<html lang="en">
    <?php
    $final = isset($_POST['escolha']) ? $_POST['escolha']: '';
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Parabéns</h1>
    <input type="text" name="" id="" value ="<?php echo $final?>"readonly>
</body>
</html>
