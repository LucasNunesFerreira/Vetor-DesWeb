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
<form action="atv4.php" method="post">
  <select name="famosos[]" id="famosos[]" multiple>
      <?php
     foreach ($dados as $item)
        echo"<option value='$item'>$item</option>";
     ?>
    </select>
    <input type="submit" value="Enviar">
</form>
</body>
</html>