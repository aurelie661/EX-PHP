<?php



$suite[0] = 1;
$suite[1] = 1;
for ($i = 2; $i <= 7; $i++) {
    $suite[$i] = $suite[$i - 1] + $suite[$i - 2];
}
for ($i = 0; $i <= 7; $i++) {
    echo $suite[$i] . " ";
}
