<!DOCTYPE html>
<html>
<head>
    <title>Biaya Fotokopi</title>
</head>
<body>
    <h1>Kalkulator Biaya Fotokopi</h1>
    <h2>Harga per lembar: Rp. 100</h2>

    <form method="post" action="">
        Jumlah lembar fotokopi: <input type="text" name="jumlah_lembar">
        <input type="submit" value="Hitung Biaya">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah_lembar = intval($_POST["jumlah_lembar"]);
        $harga_per_lembar = 0;

        if ($jumlah_lembar < 100) {
            $harga_per_lembar = 150;
        } elseif ($jumlah_lembar <= 200) {
            $harga_per_lembar = 100;
        } else {
            $harga_per_lembar = 80;
        }

        $total_biaya = $jumlah_lembar * $harga_per_lembar;

        echo "<br><strong>Hasil Perhitungan:</strong><br>";
        echo "Jumlah lembar fotokopi: " . $jumlah_lembar . " lembar<br>";
        echo "Total biaya: Rp. " . $total_biaya;
    }
    ?>
</body>
</html>
