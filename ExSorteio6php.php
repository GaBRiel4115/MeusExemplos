<?php 
    /*: Construir um script em PHP que sorteie números aleatórios de 0 a 50, imprima todos na tela e 
só pare quando o número sorteado for maior ou igual a 45. */
    $tentativas = 0;
    $soma=0;
    do {
        $num = rand(0,100);
        $soma += $num;
        $tentativas++; //$tentativas = $tentativas + 1
        echo "Soma " .$soma. "<br>";
    }while ($soma <= 1000);
    echo "Sorteio encerrado com $tentativas numeros sorteados";
    
    
    
    
    
    /*
    while(true){
        $num = rand(0,50);
        $tentativas ++;
        echo "Numero " .$num. "<br>";
        if ($num >=45)
            echo "Numero encontrado";
            break; 
    }*/
