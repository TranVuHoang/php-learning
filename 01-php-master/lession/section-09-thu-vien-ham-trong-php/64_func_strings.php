<?php

#strlen();
$my_str = "Tran Vu Hoang";


echo strlen($my_str) . "<br/>";

#mb_strlen();
$my_str = "Trần Vũ Hoàng";
echo mb_strlen($my_str) . "<br/>";

#ucfirst() : làm in hoa 1 chữ đầu tiên của chuỗi.
$my_str = "tran vu hoang";
echo ucfirst($my_str) . "<br/>";

#trim(): loại bỏ khoảng trắng dư thừa ở đầu và cuối chuỗi
echo str_repeat("-", 20) . "<br/>";
$fullName = "   Trần     Vũ  Hoàng   ";
echo $fullName . "<br/>";
echo trim($fullName) . "<br/>";


#str_repeat()
echo str_repeat("-", 20);
