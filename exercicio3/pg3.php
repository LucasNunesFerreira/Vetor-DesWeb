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
    <form action="pg4.php" method="post">
        <select name="itens[]" id="itens[]" multiple> 
        <?php
        
        foreach ($dados as $item) {
            echo "<option value='$item'>$item</option>";
        }
        ?>
        </select> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>