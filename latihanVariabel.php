<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Menampilkan 7 Nama Hari </title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311022">
    <meta name="author" content="Nur Azizah P">
</head>
<body>

<?php
// Array yang berisi nama-nama hari
$hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

// Mengambil hari saat ini menggunakan fungsi date() dengan format 'w' yang akan menghasilkan angka dari 0 hingga 6, di mana 0 adalah Minggu dan 6 adalah Sabtu
$hari_ini = date('w');


// Menampilkan semua nama hari
echo "Daftar nama hari dalam seminggu : ";
echo "<ul>";
foreach ($hari as $nama_hari) {
    echo "<li>" . $nama_hari . "</li>";
}
echo "</ul>";
echo ("<hr>");

// Menampilkan nama hari berdasarkan indeks hari ini
echo "Hari ini adalah hari " . $hari[$hari_ini];
?>

</body>
</html>

