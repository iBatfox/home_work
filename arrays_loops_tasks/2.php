<?php
$numeral = [
    1,
    20,
    15,
    17,
    24,
    35,
];
$result = 0;
foreach ($numeral as $elem){
    $result = $result + $elem;
}
echo $result;