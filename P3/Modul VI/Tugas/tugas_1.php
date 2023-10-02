<?php

$data = array(
    'nama' => 'Iqbal',
    'usia' => 20,
    'kota' => 'Banjarmasin',
    'pekerjaan' => 'IT',
);

echo "Array Sebelum Pengurutan:\n";
print_r($data);

sort($data);
echo "\nArray Setelah Pengurutan (sort):\n";
print_r($data);

ksort($data);
echo "\nArray Setelah Pengurutan (ksort):\n";
print_r($data);

asort($data);
echo "\nArray Setelah Pengurutan (asort):\n";
print_r($data);

rsort($data);
echo "\nArray Setelah Pengurutan (rsort):\n";
print_r($data);

krsort($data);
echo "\nArray Setelah Pengurutan (krsort):\n";
print_r($data);

arsort($data);
echo "\nArray Setelah Pengurutan (arsort):\n";
print_r($data);
?>
