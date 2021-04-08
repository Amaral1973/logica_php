<?php
    $val1 = 100;
    $desconto = 9.00;
    $calculo = $val1 - (($val1 * $desconto) / 100);
    echo "O valor com 9% de desconto foi: <b>$calculo</b>.";
?>