<?php

$num1=$_POST["num1"];

if($num1>0){
    echo "$num1: valor é postivo";
}elseif($num1<0){
    echo "$num1: valor é negativo";
}else  {
    echo "$num1: valor é nulo";
}
