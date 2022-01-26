
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
<!--<p style="color: pink">--><?php // print_r($arr1) ?? []; ?><!--</p>-->
<!--<p style="color: dodgerblue"> --><?php //echo "Max : ". $max ?? "" ?><!--</p>-->
<!--<p style="color: darkkhaki"> --><?php //echo "Min : ". $min ?? "" ?><!--</p>-->
<!--<p style="color: teal"> --><?php //echo "Số dương chẵn lớn nhất: ". $evenMax ?? "" ?><!--</p>-->
<!--<p style="color: blueviolet"> --><?php //echo "Số âm lẻ nhỏ nhất: ". $evenMin ?? "" ?><!--</p>-->
<!--<p style="color: red"> --><?php //echo "Tổng của mảng: ". $totalArr ?? "" ?><!--</p>-->
<!--<p style="color: darkgrey"> --><?php //echo "Trung bình mảng: ". $avgArr ?? "" ?><!--</p>-->
<!--<p style="color: silver"> --><?php //echo "Các số Chính Phương: ". implode(" ; ",$soCP) ?? "" ?><!--</p>-->
<!--<p style="color: tomato"> --><?php //echo "Số lớn hơn Trung bình: ". implode(" ; ",$lonhonAvg) ?? "" ?><!--</p>-->
<!--<p style="color: fuchsia"> --><?php //echo "Sắp xếp mảng tăng dần : ". implode(" ; ",$sortUp) ?? "" ?><!--</p>-->
<!--<p style="color: gray"> --><?php //echo "Sắp xếp mảng giảm dần : ". implode(" ; ",$sortDown) ?? "" ?><!--</p>-->

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_REQUEST["number"] ?? "";

    if ($number>0){
        function floatNumber($number)
        {
            $arr = [];
            for ($i = 0; $i < $number; $i++) {
                $arr[] = rand(-100, 100) / 10;
            }
            return $arr;
        }

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

        $arr1 = floatNumber($number);
        echo "<hr>";
        echo "Mảng : ";
        print_r($arr1);
        $max = maxArr($arr1);
        echo "<hr>";
        echo "Max : ".$max;
        $min = minArr($arr1);
        echo "<hr>";
        echo "Min : ".$min;
        $evenMax = evenMax($arr1);
        echo "<hr>";
        echo "Số dương chẵn lớn nhất: ".$evenMax;
        $evenMin = evenMin($arr1);
        echo "<hr>";
        echo "Số âm lẻ nhỏ nhất: ".$evenMin;
        $totalArr = totalArr($arr1);
        echo "<hr>";
        echo "Tổng của mảng: ".$totalArr;
        $avgArr = avgArr($arr1);
        echo "<hr>";
        echo "Trung bình mảng: ".$avgArr;
        $soCP = soChinhPhuong($arr1);
        echo "<hr>";
        echo "Các số Chính Phương: ";
        print_r($soCP);
        $lonhonAvg = lonHonAvg($arr1);
        echo "<hr>";
        echo  "Số lớn hơn Trung bình: ";
        print_r($lonhonAvg);
        $sortUp = sortUp($arr1);
        echo "<hr>";
        echo "Sắp xếp mảng tăng dần : ";
        print_r($sortUp);
        $sortDown = sortDown($arr1);
        echo "<hr>";
        echo "Sắp xếp mảng giảm dần : ";
        print_r($sortDown);

    }else{
        echo "vui lòng nhập số lớn hơn 0";
    }
}
?>


