<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado</title>
</head>
<body>
<?php

	$quantidade = $_POST["quantidade"];
	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$cond = $_POST["cond"];
	$valor = [];

	$numeros = array();
		for ($i = 0; $i < $quantidade; $i++) {
			$numeros[] = rand($minimo, $maximo);
	}

	echo "<h1>Quantidade de números gerados: $quantidade</h1>";
	echo "<h1>Mínimo: $minimo</h1>";
	echo "<h1>Máximo: $maximo</h1>";
	echo "<p>Vetor gerado: " . implode("| ", $numeros) . "</p>";

	if ($cond == 1) {
		echo "<h3>Mostrar os elementos do vetor na ordem original (primeiro, segundo, ...,último)</h3>";
		$numeros = array();
		for ($i = 0; $i < $quantidade; $i++) {
			$numeros[] = rand($minimo, $maximo);
		}
		echo "<p>Vetor gerado: " . implode("| ", $numeros) . "</p>";
}
	
	if ($cond == 2) {
		echo "<h3>Mostrar os elementos do vetor na ordem inversa (último, penúltimo, ...,primeiro)</h3>";
		$numeros = array_reverse($numeros);
		 {
			$numeros[] = rand($minimo, $maximo);
	}
	echo "<p>Vetor gerado: " . implode("| ", $numeros) . "</p>";
}

if ($cond == 3) {
	echo "<h3>Maior elemento</h3>";
	$maior = max($numeros);
	echo $maior;
}

if ($cond == 4) {
	echo "<h3>Menor elemento</h3>";
	$menor = min($numeros);
	echo $menor;
}

if ($cond == 5) {
	echo "<h3>Elementos Pares</h3>";	
	for ($i = 0; $i < count($numeros); $i++) {
		if ($numeros[$i] % 2 == 0){
			array_push($valor, $numeros[$i]);
		}
	}
	echo "<p>Vetor gerado: " . implode("| ", $valor) . "</p>";
}
if ($cond == 6) {
	echo "<h3>Elementos Ímpares</h3>";	
	for ($i = 0; $i < count($numeros); $i++) {
		if ($numeros[$i] % 2 == 1){
			array_push($valor, $numeros[$i]);
		}
	}
	echo "<p>Vetor gerado: " . implode("| ", $valor) . "</p>";
}
if ($cond == 7) {
	echo "<h3>Soma dos valores</h3>";
	$soma = array_sum($numeros);
	echo $soma;
}
if ($cond == 8) {
	echo "<h3>Média dos elementos</h3>";
	$media = array_sum($numeros) / $quantidade;
	echo $media;
}
?>
</body>
</html>