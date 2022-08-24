<?php 
    function nomeFuncao(){
        if(true){
            echo "funcionando a função";
        }else{
            echo "Nunca vai cair aqui ";
        }
    }
    
    function Adicao($num1, $num2){
        $soma = $num1 + $num2 ;
        return $soma;
    }

    function Subtracao($num1 , $num2){
        $resultado = $num1 - $num2;
        return $resultado;
    }
    function Multiplicacao($num1 , $num2){
        $resultado = $num1 * $num2;
        return $resultado;
    }
    function Divisao($num1 , $num2){
        $resultado = $num1 / $num2;
        return $resultado;
    }

    function media($num1 , $num2){
        return ($num1+$num2)/2;
    }

    function LendariaCalculadora($numero1, $numero2, $operacao)
    {
        echo "<br>";
        if($operacao == "+"){
            echo Adicao($numero1,$numero2);
        }
        else if($operacao == "-"){
            echo Subtracao($numero1,$numero2);
        }else if($operacao == "*"){
            echo Multiplicacao($numero1,$numero2);
        }else if($operacao == "/"){
            echo Divisao($numero1,$numero2);
        }else if($operacao == "m"){
            echo media($numero1,$numero2);
        }else{
            echo "Digite uma operação Valida";
        }
    }



    function SomaArray($array)
    {
        $retorno = 0;
        for($i = 0; $i < count($array); $i++){
            $retorno += $array[$i];
        }
        return $retorno;
    }

    function mediaArray($array)
    {
       $soma = SomaArray($array);
        return $soma/count($array);
    }


    //nomeFuncao();
    /*
    $valor1 = 65647;
    $resultado = Adicao(512,$valor1);
    echo "Primeira adição: ". Adicao(273642,3457465)."<br>";
    echo "Segunda adição: ". Adicao(234,465)."<br>";
    echo "3º adição: ". Adicao(2,90)."<br>";
    echo "4º adição: ". Adicao(34,1)."<br>";
    echo "5º adição: ". Adicao(23,67)."<br>";
    echo "O resultado da soma é: ".$resultado;
    */
    //$numeros = array(1,5,10,15,20,25);
    //echo SomaArray($numeros);

    LendariaCalculadora(8,6,"*");
    LendariaCalculadora(8,6,"-");
    LendariaCalculadora(8,6,"/");
    LendariaCalculadora(8,6,"+");
    LendariaCalculadora(8,6,"jahkajhkajh");
    LendariaCalculadora(8,6,"m");

    $numeros = array(8,6,8,9,8,3,8,9,8,6,8,9,4,6,8,9,8,6,9,9,8,6,8,9);
    echo "<br>".mediaArray($numeros);
?>