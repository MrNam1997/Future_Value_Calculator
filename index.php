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
<h2>Future Value Calculator </h2>
<form method="post">
    Investment Amount:
    <input type="number" name="soTien"><br>
    Yearly Interest Rate:
    <input type="number" name="laiSuat"><br>
    Number of Years:
    <input type="number" name="soNamGui"><br>
    <input type="submit" value="Calculate"><br>
</form>
<?php
$soTienGui = $_POST["soTien"];
$laiSuat = $_POST["laiSuat"];
$soNamGui = $_POST["soNamGui"];
function tinhLaiSuat($soTienGui, $laiSuat, $soNamGui)
{
    $soTienTuongLai = $soTienGui;
    for ($i = 1; $i <= $soNamGui; $i++) {
        $soTienTuongLai = $soTienTuongLai + ($soTienTuongLai * $laiSuat) / 100;
        echo "so tien lai sau " . $i. " thang la " . $soTienTuongLai . "<br >";
    }
    return $soTienTuongLai;

}

tinhLaiSuat($soTienGui, $laiSuat, $soNamGui);
?>
</body>
</html>
