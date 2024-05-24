<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan - Pola Bintang</title>
</head>
<body>
    <h2>Latihan Perulangan - Pola Bintang</h2>
    <?php
    // Menentukan jumlah baris dan kolom untuk pola bintang
    $jumlah_baris = 10;

    // Perulangan untuk mencetak pola bintang
    for ($i = 1; $i <= $jumlah_baris; $i++) {
        // Cetak bintang sebanyak $i pada setiap baris
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        // Pindahkan ke baris baru setelah mencetak bintang sebanyak $i
        echo "<br>";
    }
    ?>
</body>
</html>
