<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 6.5;
$nota4 = 9.0;

$pontuacaoTotal = $nota1 + $nota2 + $nota3 + $nota4;
echo "Pontuação Total: " . $pontuacaoTotal;
?>
<br>
<?php
$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 6.5;
$nota4 = 9.0;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
echo "Média das Notas: " . $media;
?> 
<br>
<?php
$base=6;
$altura=12;
$area=($base*$altura);
echo "área do retângulo: ". $area;
?>
<br>
<?php
$valor1=13;
$valor2=7;

$diferenca=($valor1-$valor2);
echo "A diferença entre os valores é: ".$diferenca;
?>
<br>
<?php
$VALOR1=15;
$VALOR2=5;

$divisao=($valor1/$valor2);
echo "O resultado é: " .$divisao;
?> 
<br>
<?php
$pesoKg = 65;
$pesoGramas = $pesoKg * 1000;
echo "Peso em Gramas: " . $pesoGramas . "g";
?>
<br>
<?php
$pesoPratoKg = 1.0;
$precoporquilo= 45.0;
$valorPagar = $pesoPratoKg * $precoporquilo;
echo "Valor a Pagar: R$ " . $valorPagar;
?>
<br>
<?php
$temperaturaF = 75;
$temperaturaC = ($temperaturaF - 32) / 1.8;
echo "Temperatura em Celsius: " . $temperaturaC . "°C<br>";
echo "Temperatura em Fahrenheit: " . $temperaturaF . "°F";
?>
<br>
<?php

$raio = 5; 

$diamentro = 2 * $raio;

$comprimento = 2 * M_PI * $raio; 

$area = M_PI * pow($raio, 2);

echo "Raio da circunferência: " . $raio . "<br>";
echo "Diâmetro: " . $diamentro . "<br>";
echo "Comprimento (Circunferência): " . $comprimento . "<br>";
echo "Área: " . $area;
?>
<?php
$a = 10;
$b = 5;

$temp = $a;
$a = $b;
$b = $temp;

echo "Valor antigo de \$a: " . $temp . ", Novo valor de \$a: " . $a . "<br>";
echo "Valor antigo de \$b: 5, Novo valor de \$b: " . $b;
?>
<br> 
</body>
</html>
