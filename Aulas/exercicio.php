<h3>
Faça um array que gere 10 numeros aleatorios
e verifique quantos são pares, quantos são impares,
quantos são positivos e quantos são negativos
</h3>
<?php

use JetBrains\PhpStorm\Immutable;

$numeros = array();
$cont_pares = 0;
$cont_impar = 0;
$cont_negativo = 0;
$cont_positivo = 0;
for($i = 0; $i<10; $i++)
{
    $numeros[$i] = rand(-10, 10);
    if($numeros[$i] % 2 == 0)
    {
        $cont_pares++;
    }else{
        $cont_impar++;
    }

    if($numeros[$i] < 0)
    {
        $cont_negativo++;
    }else{
        $cont_positivo++;
    }
} 
echo "<p>";
echo "Pares: ".$cont_pares." Impares: ".$cont_impar."<br>";
echo "Positivos: ".$cont_positivo." Negativos: ".$cont_negativo."<br>";
echo "</p>";
function ImprimeArray($array)
{
    echo "<p>";
    for($i = 0;$i < count($array); $i++)
    {
        echo "Indice ".$i." Valor ".$array[$i]."<br>";
    }
    echo "</p>";
}
ImprimeArray($numeros);
?>

<h3>Utilizando o For imprima a tabuada do 8</h3>

<?php
for($i = 0; $i <= 10; $i++)
{
    echo "<br>".$i."X8=".($i*8);
}
?> 

<h3>
Faça uma função que some todos os impares de 
10 a 50 e exiba na tela 
</h3>

<?php 
function ImprimirImpares($inicial,$final)
{
    $soma = 0;
    for($i = $inicial; $i <= $final; $i++  )
    {
        if($i % 2 == 1)
        {
            $soma+= $i;
        }
    }
    echo $soma."<br>";
}
ImprimirImpares(136,1100);
ImprimirImpares(10,50);


?>
<h3>
Faça uma função que calcule a porcentagem de um numero.
</h3>
<?php 
function porcentagem($numero,$porcentagem)
{
    echo $porcentagem."% de ".$numero." é ".(($numero/100)* $porcentagem ) ;
}

porcentagem(150,25);
?>
<h3>
Gere um array com numeros randomicos ( rand(-50,50))
e ordene em ordem crescente.
</h3>
<?php 
function GerarArrayAleatorio($qtdIndices)
{
    $array = array( );
    for($i = 0; $i <= $qtdIndices; $i ++)
    {
        array_push($array, rand(-50,50) );
    }
    return $array;

}
$novo_array = GerarArrayAleatorio(5);
ImprimeArray($novo_array);

function OrdenacaoCrescente($array)
{
    $tamanho = count($array)-1;
    $auxiliar = 0;
   
    for($i = 0; $i<$tamanho; $i++)
    {
        for ($j=0; $j<$tamanho-$i; $j++) {
          
            if ($array[$j] > $array[$j + 1]) {
                $auxiliar          = $array[$j];
                $array[$j]     = $array[$j + 1];
                $array[$j + 1] = $auxiliar;
            }
        }
    }
    return $array;
}
echo "Antes<br>" ;  ImprimeArray($novo_array); 
$arrayOrdenado = OrdenacaoCrescente($novo_array); 
echo "<br>depois de ordernar<br>"; ImprimeArray($arrayOrdenado);
?>