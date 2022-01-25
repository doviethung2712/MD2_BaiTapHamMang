<?php

function floatNumber($number)
{
    $arr = [];
    for ($i = 0; $i < $number; $i++) {
        $arr[] = rand(0, 9) / 10;
    }
    return $arr;
}

$arr1 = floatNumber(7);
print_r($arr1);

function maxArr($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

echo "<hr>";
echo "Max là: ";
print_r(maxArr($arr1));

function minArr($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}
echo "<hr>";
echo "Min là: ";
print_r(minArr($arr1));


