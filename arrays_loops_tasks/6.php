<?php
$arr = [
    'green' => 'зеленый',
    'red' => 'красный',
    'blue' => 'голубой',
];
$en = [];
$ru = [];


foreach ($arr as $itemEn => $itemRu){
    $en[] = $itemEn;
    $ru[] = $itemRu;
}
echo "Англиское название".PHP_EOL;
print_r($en);
echo "Русское название".PHP_EOL;
print_r($ru);
