<?php
// tinh tong cac so chan tu 0-10

$sum = 0;

for ($i = 0; $i <= 10; $i += 2) {
	if ($i % 2 == 0) {
		$sum += $i;
		echo $i . " ";
	}
}
echo "Tong tu cac so chẵn (0-10): $sum";
