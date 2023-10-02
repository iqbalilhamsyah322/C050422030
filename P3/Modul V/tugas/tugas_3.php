<?php

$jumlahKelipatan = 0;

for ($bilangan = 3; $bilangan <= 127; $bilangan++) {
    if ($bilangan % 6 == 0) {
        $jumlahKelipatan++;
    }
}

echo "Banyaknya bilangan kelipatan 6 dari 3 hingga 127 adalah: $jumlahKelipatan";
?>
