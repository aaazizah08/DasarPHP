<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2 - Menentukan Banyaknya Uang Pecahan</title>
</head>
<body>
    <h3>Menentukan Banyaknya Pecahan Uang yang Diperoleh Ani dari Bank</h3>

    <?php
    // Jumlah uang tabungan yang akan diambil Ani
    $jumlah_uang = 1387500;

    // Daftar uang pecahan yang berlaku
    $uang_pecahan = array(
        100000, // Rp. 100.000
        50000,  // Rp. 50.000
        20000,  // Rp. 20.000
        10000,  // Rp. 10.000
        5000,   // Rp. 5.000
        2000,   // Rp. 2.000
        500     // Rp. 500
    );

    // Array untuk menyimpan banyaknya masing-masing uang pecahan 
    $banyak_pecahan = array();

    // Loop untuk menghitung banyaknya masing-masing pecahan uang
    foreach ($uang_pecahan as $pecahan) {
        // Menghitung banyaknya pecahan uang yang diperoleh Ani
        $banyak = intval($jumlah_uang / $pecahan);
        
        // Menyimpan banyaknya pecahan uang ke dalam array
        $banyak_pecahan[$pecahan] = $banyak;

        // Mengurangi jumlah uang yang akan diambil dengan nilai pecahan yang telah diperoleh
        $jumlah_uang -= $banyak * $pecahan;
    }

    // Menampilkan hasil perhitungan
    echo "<p>Banyaknya Pecahan Uang yang Diperoleh Ani: </p>";
    foreach ($banyak_pecahan as $pecahan => $banyak) {
        echo "<p>Pecahan Rp. " . number_format($pecahan, 0, ',', '.') . " = " . $banyak . " lembar</p>";
    }
    ?>
</body>
</html>
