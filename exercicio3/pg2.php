<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pg3.php" method="post">
    <?php
        $nomes = $_POST['nomes'];
        $itens = explode(';', $nomes);

        foreach ($itens as $item){
            echo '<input type="checkbox" name="itens[]" value="' . $item . '">' . $item . '<br>';
        }
    ?>
    <br> <input type="submit" value="Enviar">
    </form>
</body>
</html>