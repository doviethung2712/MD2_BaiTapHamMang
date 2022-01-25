<?php


function quantily($number)
{
    $arr = [];
    for ($i = 0; $i < $number; $i++) {
        $arr[] = rand(1, 50);
    }
    return $arr;
}

$arr = quantily(6);

print_r($arr);

function sortArr($arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

echo "<hr>";
print_r(sortArr($arr));

function appear($arr)
{
    $ar1 = [];
    for ($i = 0; $i < count($arr); $i++) {
        if (!in_array($arr[$i], $ar1)) {
            $ar1[] = $arr[$i];
        }
    }
    return $ar1;
}

$arr1 = [1,3,1,3,2,4,2,1];
echo "<hr>";
print_r($arr1);
echo "<br>";
print_r(appear($arr1));
