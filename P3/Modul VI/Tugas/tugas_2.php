<?php
// Membuat array asosiatif
$data = array(
    'nama' => 'Iqbal',
    'usia' => 20,
    'kota' => 'Banjarmasin',
    'pekerjaan' => 'IT',
);

// Menampilkan array awal
echo "Array Awal:\n";
print_r($data);

// 1. Menggunakan array_push() untuk menambahkan elemen ke array
array_push($data, 'status', 'Menikah');
echo "\nArray Setelah array_push():\n";
print_r($data);

// 2. Menggunakan array_pop() untuk menghapus elemen terakhir dari array
$terakhir = array_pop($data);
echo "\nElemen Terakhir yang Dihapus: $terakhir\n";
echo "Array Setelah array_pop():\n";
print_r($data);

// 3. Menggunakan array_merge() untuk menggabungkan dua array
$newData = array('alamat' => 'Jalan ABC', 'telepon' => '1234567890');
$mergedData = array_merge($data, $newData);
echo "\nArray Setelah array_merge():\n";
print_r($mergedData);

// 4. Menggunakan array_keys() untuk mendapatkan kunci-kunci array
$keys = array_keys($data);
echo "\nKunci-kunci Array:\n";
print_r($keys);

// 5. Menggunakan array_values() untuk mendapatkan nilai-nilai array
$values = array_values($data);
echo "\nNilai-nilai Array:\n";
print_r($values);
?>
