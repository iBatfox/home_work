<?php
$arr = [
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой',
];

echo "Столбец ключуй". PHP_EOL;
foreach ($arr as $key => $value) {
    echo $key. PHP_EOL;
}

echo "Столбец элементов". PHP_EOL;
foreach ($arr as $value) {
    echo $value. PHP_EOL;
}
$arr = "test";
echo ($arr);