<!DOCTYPE html>
<html lang="pt-BR">
<?php
    $dados = $_POST['famosos'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="atv5.php" method="post">
      <?php
     foreach ($dados as $item)
        echo"<input type='radio' name='escolha' id='escolha' value='$item'>$item<br>";
     ?>
    <input type="submit" value="Enviar">
</form>
</body>
