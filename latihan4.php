<?php
/* Operator logika yang bisa digunakan
* ==    Sama Dengan                     $x == $y
* ===   Identical                       $x === $y
* !=    Tidak Sama Dengan               $x != $y
* <>    Tidak Sama Dengan               $x <> $y
* !==   Not Identical                   $x !== $y
*  >    Lebih Besar Dari                $x > $y
*  <    Kurang Dari                     $x < $y
* >=    Lebih Besar atau Sama Dengan    $x >= $y
* <=    Kurang Dari atau Sama Dengan    $x <= $y
* <=>   Spaceship                       $x <=> $y
*/

$t = date("H"); // Mendapatkan jam dengan format 1-24
echo "<br> If <br>";
if ($t < 16) {
    echo "Selamat Siang!";
}

$t = date("H"); // Mendapatkan jam dengan format 1-24
echo "<br> If dan Else <br>";
if ($t < 20) {
    echo "Selamat Siang!";
} else {
    echo "Selamat Malam!";
}

echo "<br> Nested If <br>";
if ($t < 10) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}

?>