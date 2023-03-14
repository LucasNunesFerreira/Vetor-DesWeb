<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor</title>
</head>
<body>
	
	<form action="resultado.php" method="post">
		<label for="quantidade">Quantidade de números gerados</label>
		<input type="number" id="quantidade" name="quantidade" required><br>

		<label for="minimo">Mínimo</label>
		<input type="number" id="minimo" name="minimo" required><br>

		<label for="maximo">Máximo</label>
		<input type="number" id="maximo" name="maximo" required><br>

        <fieldset>
            <legend>Resultado</legend>
            <input type="radio" name="cond" value="1">Mostrar os elementos do vetor na ordem original (primeiro, segundo, ...,último);<br>
            <input type="radio" name="cond" value="2">Mostrar os elementos do vetor na ordem inversa (último, penúltimo, ...,primeiro);<br>
            <input type="radio" name="cond" value="3">Maior elemento;<br>
            <input type="radio" name="cond" value="4">Menor Elemento;<br>
            <input type="radio" name="cond" value="5">Elementos Pares;<br>
            <input type="radio" name="cond" value="6">Elementos Ìmpares;<br>
            <input type="radio" name="cond" value="7">Soma dos elementos;<br>
            <input type="radio" name="cond" value="8">Média dos elementos;<br>
            <input type="radio" name="cond" value="9">Elementos acima da média;<br>
            <input type="radio" name="cond" value="10">Elementos abaixo da média;<br>
            <input type="radio" name="cond" value="11">Elementos primos;<br>
        </fieldset>
		
        <input type="submit" value="Calcular">
	</form>
</body>
</html>