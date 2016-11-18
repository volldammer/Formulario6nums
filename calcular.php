<?php

/* 
 * codigo calcular suma, media e impares
 */

$numeros[]=$_POST["n1"];
$numeros[]=$_POST["n2"];
$numeros[]=$_POST["n3"];
$numeros[]=$_POST["n4"];
$numeros[]=$_POST["n5"];
$numeros[]=$_POST["n6"];

 function media($a) // función para calcular el valor medio de un vector
    {
        $res = 0;
        for($i=0;$i<count($a);$i++)
            $res += $a[$i];
        $res /= count($a);
        return $res;
    }
    
    $media_nums = media($numeros);
   echo"La media de los numeros es: $media_nums<br>";
    
    //ahora la suma
    
    
     $sumar = 0;
        foreach ($numeros as $resu) {
            $sumar += $resu;
            
        }
        echo "La suma es: $sumar<br>";
    

