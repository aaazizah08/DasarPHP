<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nilai Ganjil atau Genap</title>
</head>
<body>
    <?php
    // Array dengan beberapa nilai
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    // Menentukan apakah setiap nilai ganjil atau genap
    foreach ($angka as $number) {
        echo "Nomor $number : ";
        if ($number % 2 == 0) {
            echo "Genap.<br>";
        } else {
            echo "Ganjil.<br>";
        }
    }
    ?>
</body>
</html>
