<!DOCTYPE html>
<html lang="pt-BR">
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
    <h1>
    <?php echo $final?>
    </h1>
</body>
</html>
