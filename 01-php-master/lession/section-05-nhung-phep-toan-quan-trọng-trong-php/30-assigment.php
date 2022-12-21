<?php

/**
 * Phép toán gán trong PHP
 * #1. gán =
 * #2. gán .=
 * #3. gán *=
 */

$x = 10;
$y = 3;

echo "x = {$x}</br>";
echo "y = {$y}";

echo "<br>--------------------<br>";

// $x = $y;
// echo "x = {$x}";
// echo "<br>";

$x += $y;
echo "x = {$x}";
echo "<br>";

$x -= $y;
echo "x = {$x}";
echo "<br>";

$x /= $y;
echo "x = {$x}";
echo "<br>";

$x *= $y;
echo "x = {$x}";
echo "<br>";
