<?php

/*
 * 1 Tạo mảng lưu các số lẻ từ 3 -> 150
 */

$list_odd = array();

for($i = 3; $i < 150; $i += 2) {
    $list_odd[] = $i;
}

echo "<pre>";
print_r($list_odd);
echo "<pre>";


