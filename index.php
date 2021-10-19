<?php
echo 'Para incluir una comilla \n \t simple como esta \' hay que escribirla así \\\'';
echo '</br>';
$var1 = true;
$var2 = 3.90;
$var3 = "cadena";
echo "\n El valor de \$var1 es \n\t$var1";
echo "<pre>$var2 es un número \n y \"$var3\" es una cadena</pre>";
$varTexto = <<<EOS
                esto es un texto con 
                retornos de linea $var3
                EOS;
echo "<pre>$varTexto</pre>";
echo "<pre>sdfsdfdsf
      sdfsdfsdf
        sdfsdfsdf</pre>";
$zumo = 'manzana';
echo "Él tomó algo de zumo de {$zumo}s.</br>";
echo "Él tomó algo de jugo de $zumos.";
