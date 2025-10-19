<?php
echo "<pre>";
echo "<h2>Penyelesaian Deret PHP</h2>";

// Soal a
$deret_a = [4, 6, 9, 13, 18];
$penjumlah = count($deret_a) + 1;
$deret_a[] = end($deret_a) + $penjumlah;
$deret_a[] = end($deret_a) + $penjumlah + 1;
echo "<b>a. Deret Lengkap:</b> " . implode(" ", $deret_a) . "\n";

// Soal b
$deret_b = [2, 2, 3, 3, 4, 4];
$next_b = end($deret_b) + 1;
$deret_b[] = $next_b;
$deret_b[] = $next_b;
echo "<b>b. Deret Lengkap:</b> " . implode(" ", $deret_b) . "\n";

// Soal c
$deret_c = [1, 9, 2, 10, 3];
$deret_c[] = $deret_c[count($deret_c) - 2] + 1;
$deret_c[] = $deret_c[count($deret_c) - 2] + 1;
echo "<b>c. Deret Lengkap:</b> " . implode(" ", $deret_c) . "\n";

echo "</pre>";
?>