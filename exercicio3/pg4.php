<!DOCTYPE html>
<html lang="pt-BR">
<?php
    $dados = $_POST['itens'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="pg5.php" method="post">
    <?php
        $dados = $_POST['itens'];
        foreach ($dados as $item) {
            echo '<input type="radio" name="escolha" value=" '. $item . '">' . $item . '<br>';
        }
    ?>
<input type="submit" value="Enviar">

</form>   
</body>
</html>