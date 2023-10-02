<?php
// Mendapatkan bulan saat ini sebagai angka (1-12)
$bulanSaatIni = date('n');

// Inisialisasi variabel jumlahHari
$jumlahHari = 0;

// Menggunakan switch-case untuk menentukan jumlah hari dalam bulan
switch ($bulanSaatIni) {
    case 1: // Januari
    case 3: // Maret
    case 5: // Mei
    case 7: // Juli
    case 8: // Agustus
    case 10: // Oktober
    case 12: // Desember
        $jumlahHari = 31;
        break;
    case 4: // April
    case 6: // Juni
    case 9: // September
    case 11: // November
        $jumlahHari = 30;
        break;
    case 2: // Februari (menggunakan kondisi tahun kabisat)
        $tahunSaatIni = date('Y');
        if ((($tahunSaatIni % 4 == 0) && ($tahunSaatIni % 100 != 0)) || ($tahunSaatIni % 400 == 0)) {
            $jumlahHari = 29; // Tahun kabisat
        } else {
            $jumlahHari = 28; // Bukan tahun kabisat
        }
        break;
    default:
        echo "Bulan tidak valid";
        exit;
}

// Menampilkan hasil
echo "Bulan saat ini adalah: " . date('F') . "\n";
echo "Jumlah hari dalam bulan ini: $jumlahHari hari\n";
?>
