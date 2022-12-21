<?php

$a = 1;
$b  = 4;
$c = 1;
$delta = 0;

$delta = ($b * $b) - (4 * $a * $c);
if ($delta < 0) {
    echo "Phương trình bậc 2 vô nghiệm";
} else if ($delta == 0) {
    echo "x1=x2= ", (-$b / (2 * $a));
} else {
    echo "x1 =  ", ((-$b + sqrt($delta)) / (2 * $a));
    echo "<br>";
    echo "x2 =  ", ((-$b - sqrt($delta)) / (2 * $a));
}