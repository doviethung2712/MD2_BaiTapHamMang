<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_REQUEST["name"] ?? "";
    $x = $_REQUEST["check"] ?? "";
//    echo "Chuỗi : " . $str;

    function checkNumber($str)
    {
        $a = "Không có số";
        for ($i = 0; $i < strlen($str); $i++) {
            if (is_numeric($str[$i])) {
                $a = "Có số";
            }
        }
        return $a;
    }
    $checkNum= checkNumber($str);

    function checkToUpper($str)
    {
        $a = "Không có chữ hoa";
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] === strtoupper($str[$i])) {
                $a = "Có chữ hoa";
            }
        }
        return $a;
    }
    $checkup = checkToUpper($str);

    function checkCharacters($str, $x)
    {
        $a = "Không có trong chuỗi";
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] === $x) {
                $a = "Có trong chuỗi";
            }
        }
        return "Từ " . $x . ": " . $a;
    }
    $checkChara = checkCharacters($str, $x);
}
?>
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
    <input type="text" name="name" placeholder="Nhập vào đây" value="<?php echo $str ?? ""?>">
    <input type="text" name="check" placeholder="Nhập số cần tìm vào đây" value="<?php echo $x ?? ""?>">
    <button>Check</button>
</form>
<p style="color: darkblue"><?php echo "Chuỗi: ". $str ?? "" ?></p>
<p style="color: red"><?php echo $checkNum ?? "" ?></p>
<p style="color: pink"><?php echo $checkup ?? "" ?></p>
<p style="color: dodgerblue"><?php echo $checkChara ?? "" ?></p>
</body>
</html>
