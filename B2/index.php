<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="number" placeholder="Nhập số lượng mảng vào đây">
    <button>Random</button>
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_REQUEST["number"];
    function floatNumber($number)
    {
        $arr = [];
        for ($i = 0; $i < $number; $i++) {
            $arr[] = rand(-100, 100) / 10;
        }
        return $arr;
    }
    $arr1 = floatNumber($number);
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
    echo "Max: ";
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
    echo "Min: ";
    print_r(minArr($arr1));
//$arr = [-2, -6, -7, -20, 2, 33, 4, 16, 2, 9];
    function evenMax($arr)
    {
        $max = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 == 0) {
                if ($arr[$i] > $max) {
                    $max = $arr[$i];
                }
            }
        }
        return $max;
    }

    function evenMin($arr)
    {
        $min = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 != 0) {
                if ($arr[$i] < $min) {
                    $min = $arr[$i];
                }
            }
        }
        return $min;
    }

    function totalArr($arr)
    {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {

            $sum += $arr[$i];
        }
        return $sum;
    }

    function avgArr($arr)
    {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {

            $sum += $arr[$i];
        }
        return $sum / count($arr);
    }

    function soChinhPhuong($arr)
    {
        $arr1 = [];
        for ($i = 0; $i < count($arr); $i++) {
            $j = 0;
            while ($j * $j <= $arr[$i]) {
                if ($j * $j == $arr[$i]) {
                    $arr1[] = $arr[$i];
                }
                $j++;
            }
        }
        return $arr1;
    }

    function lonHonAvg($arr)
    {
        $arr1 = [];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] > avgArr($arr)) {
                $arr1[] = $arr[$i];
            }
        }
        return $arr1;
    }

    function sortUp($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }

    function sortDown($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                if ($arr[$j] < $arr[$j + 1]) {
                    $temp = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }

    echo "<hr>";
    echo "Số dương chẵn lớn nhất: ";
    print_r(evenMax($arr1));
    echo "<hr>";
    echo "Số âm lẻ nhỏ nhất: ";
    print_r(evenMin($arr1));
    echo "<hr>";
    echo "Tổng của mảng: ";
    print_r(totalArr($arr1));
    echo "<hr>";
    echo "Trung bình mảng: ";
    print_r(avgArr($arr1));
    echo "<hr>";
    echo "Các số Chính Phương: ";
    print_r(soChinhPhuong($arr1));
    echo "<hr>";
    echo "Số lớn hơn Trung bình: ";
    print_r(lonHonAvg($arr1));
    echo "<hr>";
    echo "Sắp xếp mảng tăng dần : ";
    print_r(sortUp($arr1));
    echo "<hr>";
    echo "Sắp xếp mảng giảm dần : ";
    print_r(sortDown($arr1));

}
?>

