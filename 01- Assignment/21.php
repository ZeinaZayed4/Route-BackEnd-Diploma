<?php

$units = 300;

if ($units <= 50) {
	$bill = $units * 0.50;
} elseif ($units <= 150) {
	$bill = (50 * 0.50) + (($units - 50) * 0.75);
} elseif ($units <= 250) {
	$bill = (50 * 0.50) + (100 * 0.75) + (($units - 150) * 1.20);
} else {
	$bill = (50 * 0.50) + (100 * 0.75) + (100 * 1.20) + (($units - 250) * 1.50);
}

$surcharge = $bill * 0.20;
$totalBill = $bill + $surcharge;

echo "Total electricity bill is: Rs. $totalBill.";
