<?php 

echo "<pre>";
print_r($_POST);
echo "</pre>";

$userName = $_POST["username"];
$passWord = $_POST["password"];

echo "$userName - $passWord";
 ?>