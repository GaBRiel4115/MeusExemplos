<?php

$num1=$_POST["num1"];
$soma=0;
$increment=0;

if($num1>=0){

    while($increment<=$num1){
        echo "$increment<br>";
        $soma+= $increment;
        $increment++;
    } 
    echo"soma=$soma";
}else {
    echo"o numero lido é menor que 0";
}
 

