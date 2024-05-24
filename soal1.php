<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1 - Menghitung Gaji Bersih</title>
</head>
<body>
    <h2>Menghitung Gaji Bersih Obi Setiap Bulan</h2>

    <?php
    // Gaji pokok
    $gaji_pokok = 3250000;

    // Tunjangan jabatan
    $tunjangan_jabatan = 1200000;

    // Menghitung gaji kotor
    $gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

    // Persentase pajak
    $persentase_pajak = 10;

    // Menghitung jumlah pajak
    $pajak = ($persentase_pajak / 100) * $gaji_kotor;

    // Menghitung gaji bersih
    $gaji_bersih = $gaji_kotor - $pajak;

    // Menampilkan hasil perhitungan
    echo "<p>Gaji Pokok: Rp. " . number_format($gaji_pokok, 0, ',', '.') . "</p>";
    echo "<p>Tunjangan Jabatan: Rp. " . number_format($tunjangan_jabatan, 0, ',', '.') . "</p>";
    echo "<p>Gaji Kotor: Rp. " . number_format($gaji_kotor, 0, ',', '.') . "</p>";
    echo "<p>Pajak Penghasilan (10% dari gaji kotor): Rp. " . number_format($pajak, 0, ',', '.') . "</p>";
    echo "<p>Gaji Bersih: Rp. " . number_format($gaji_bersih, 0, ',', '.') . "</p>";
    echo "<p>Jadi, gaji bersih yang diterima Obi setiap bulannya sebesar Rp. " . number_format($gaji_bersih, 0, ',', '.') . "</p>";
    ?>
</body>
</html>
