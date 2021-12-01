<?php
/*Construir um script em PHP que leia um número inteiro positivo e mostre
todos os seus divisores (positivos) na tela*/
$num=$_POST['num'];
    if($num>0){
        echo "Seu número é $num <br>";
    }
    $cont=0;
        for($i=1; $i<$num; $i++)
            if($num%$i==0)
            echo "$i";
            $cont++
        
        echo $num."possui".$cont."divisores";
        