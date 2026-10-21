
<?php
echo "<h2>1. For Loop</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "Angka " . $i . "<br>";
}

echo "<h2>2. While Loop</h2>";

$i = 1;
while ($i <= 5) {
    echo "Angka " . $i . "<br>";
    $i++;
}

echo "<h2>3. Do-While Loop</h2>";

$i = 1;
do {
    echo "Angka " . $i . "<br>";
    $i++;
} while ($i <= 5);

echo "<h2>4. Foreach Loop</h2>";

$buah = ["Apel", "Jeruk", "Mangga"];

foreach ($buah as $item) {
    echo $item . "<br>";
}
?>
