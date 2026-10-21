
<?php
// Array numerik
$buah = ["Apel", "Jeruk", "Mangga"];

echo "<h2>Array Numerik</h2>";

foreach ($buah as $item) {
    echo $item . "<br>";
}

// Array asosiatif
$mahasiswa = [
    "nama" => "Ahmad",
    "jurusan" => "Sistem Informasi",
    "kampus" => "STT Terpadu Nurul Fikri"
];

echo "<h2>Array Asosiatif</h2>";

foreach ($mahasiswa as $kunci => $nilai) {
    echo $kunci . ": " . $nilai . "<br>";
}

// Menambah data array
$buah[] = "Pisang";

echo "<h2>Setelah Menambah Buah</h2>";

foreach ($buah as $item) {
    echo $item . "<br>";
}
?>
