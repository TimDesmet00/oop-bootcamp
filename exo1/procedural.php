<?php
$banana = 6 * 1;
$pommes = 3 * 1.5;
$vin = 2 * 10;

$totalFruit = $banana + $pommes;
$total = $totalFruit + $vin;

$taxFruit = $totalFruit * 0.06;
$taxVin = $vin * 0.21;
$totalTax = $taxFruit + $taxVin;

$totalttc = $total + $totalTax;

echo "Total: $total<br>";
echo "Total Tax: $totalTax<br>";
echo "Total TTC: $totalttc<br>";
?>