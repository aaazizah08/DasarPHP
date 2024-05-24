<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Angka ke Huruf</title>
</head>
<body>

<form method="post">
    Masukkan Nilai Angka: <input type="number" name="nilai_angka">
    <input type="submit" name="submit" value="Konversi">
</form>

<?php
if (isset($_POST['submit'])) {
    $nilai_angka = $_POST['nilai_angka'];
    $nilai_huruf = '';

    // Konversi nilai angka ke huruf
    if ($nilai_angka >= 0 && $nilai_angka <= 59) {
        $nilai_huruf = 'C';
    } elseif ($nilai_angka >= 60 && $nilai_angka <= 69) {
        $nilai_huruf = 'BC';
    } elseif ($nilai_angka >= 70 && $nilai_angka <= 79) {
        $nilai_huruf = 'B';
    } elseif ($nilai_angka >= 80 && $nilai_angka <= 89) {
        $nilai_huruf = 'AB';
    } elseif ($nilai_angka >= 90 && $nilai_angka <= 109) {
        $nilai_huruf = 'A';
    } else {
        $nilai_huruf = 'Nilai tidak valid';
    }

    echo "Nilai huruf: <strong>" . $nilai_huruf . "</strong>";
}
?>

</body>
</html>

