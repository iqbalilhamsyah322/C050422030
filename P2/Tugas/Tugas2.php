<?php
    $r = 10;
    $s = 5;
    $pi = 3.14;

    $luasAlas = $pi * pow($r,2);
    $luasPermukaan = ($pi * pow($r,2)) + ($pi * $r *$s);

    echo "Luas Alas dengan Jari-jari 10 adalah " . $luasAlas . " <br> ";
    echo "Luas Permukaan dengan " . $r . " dan tinggi " . $s . " adalah " . $luasPermukaan . " <br> ";
?>