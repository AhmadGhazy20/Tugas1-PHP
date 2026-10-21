
<?php
$nilai = 85;

// 1. If Else
echo "<h2>1. If Else</h2>";

if ($nilai >= 80) {
    echo "Nilai bagus!";
} else {
    echo "Tetap semangat belajar!";
}

// 2. Ternary Operator
echo "<h2>2. Ternary Operator</h2>";

$status = ($nilai >= 75) ? "Lulus" : "Remedial";
echo "Status: " . $status;

// 3. Switch Case
echo "<h2>3. Switch Case</h2>";

$grade = "A";

switch ($grade) {
    case "A":
        echo "Grade A - Sangat Baik";
        break;
    case "B":
        echo "Grade B - Baik";
        break;
    case "C":
        echo "Grade C - Cukup";
        break;
    default:
        echo "Grade belum tersedia";
}
?>
