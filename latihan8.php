<?php

// data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("Udin", "Ismail", "Adi"),
    "1D" => array("Lukman", "Fajri", "Mahmud")
);

// menampilkan data array
echo "Data kelas: ";
print_r($array);
echo "<br>";

// menampilkan kelas 1D
echo "<br> Data kelas 1D: ";
print_r($array['1D']) ;
echo "<br>";

// menampilkan kelas 1D dengan index 0
echo "<br> Kelas 1D dengan index 0: ";
echo $array['1D'][0] . "<br>";

// tampilkan fajri
echo "<br> Menampilkan ";
echo $array['1D'][1] . "<br>";

// tampilkan adi
echo "<br> Menampilkan ";
echo $array['1C'][2] . "<br>";

// data kelas bisa ditulis juga dengan
$array_simple = [
    "1C" => ["Udin", "Ismail", "Adi"],
    "1D" => ["Lukman", "Fajri", "Mahmud"]
];
?>