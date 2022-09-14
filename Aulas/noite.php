Faça uma função que receba como parametro um número de quantidade
de itens e retorne um array.
<p>
<?php

function RetornaArray($n)
{
    $retorno = array();
    for($i = 0; $i <= $n; $i++)
    {
        //aqui vai o rand()
        $retorno[$i] = rand(10,30);
    }
    return $retorno;
}

//print_r( RetornaArray(10) );
?></p>

Utilizando o For 
imprima a tabuada do 135
<br>
<?php
for($i = 0; $i <= 10; $i++)
{
    echo "<br>135 X ".$i." = ".( $i * 135 );
}
?>
<br>
Chame a função do exercicio 1 e some todos os itens do array;
<?php 

$meuArray = RetornaArray(10);
echo "<pre>";
print_r($meuArray);
echo "</pre>";
$soma = 0;
$pares = 0;
$impares = 0;
$negativos = 0;
$positivo = 0;
for ($i = 0; $i < count($meuArray); $i++)
{
    $soma += $meuArray[$i];
    if($meuArray[$i] % 2 == 0) { $pares++; } else {$impares++;}

    if($meuArray[$i] < 0 ) { $negativos++; } else {$positivo++;}
}

echo "<h1>".$soma."</h1>";
?>

<p>
-)Faça uma função que receba a porcentagem 
e um numero e calcule a porcentagem desse numero.
<br>
<?php
function porcentagem($numero, $porcentagem )
{
    return $porcentagem."% de ".$numero." é ".( ($numero/100)* $porcentagem ) ;
}

echo "<h1>".porcentagem(110, 25)."</h1>";
?>
</p>

<p>

Faça uma função que some todos os pares de 250 a 365 e exiba na tela
</p>
<?php
function SomarPares($inicio, $fim)
{
    $soma = 0;
    for($i = $inicio; $i <= $fim; $i++)
    {
        if($i % 2 == 0)
        {
            $soma += $i;
        }
    }
    echo "<h2>Soma: ".$soma."</h2>";
}
SomarPares(2,4);
SomarPares(4,4);
SomarPares(2,6);
SomarPares(2,8);
SomarPares(2,10);
SomarPares(2,500);
SomarPares(10,30);
echo "<br>".porcentagem(150, 30);


?>

<h2>Calcule a média do array do exercício 1</h2>
<h1>
<?php

echo "Média do meu array é:".$soma/count($meuArray); 
?>
</h1>

<h2>
-)Faça um array que gere 10 números aleatórios
e verifique quantos são pares, quantos são impares,
quantos são positivos e quantos são negativos
</h2>
<?php 

echo "Pares:".$pares."  Impares:". $impares. " Negativos: ".  $negativos. " Positivos:". $positivo;

?>


