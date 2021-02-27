<?php
$numeral = [
    1,
    20,
    15,
    17,
    24,
    35,
];
$sum = 0;
foreach ($numeral as $elem){
    $sum = $sum + $elem;
}
echo $sum;