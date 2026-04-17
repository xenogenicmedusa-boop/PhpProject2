<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>變數:算術計算</title>
</head>
<body><div>
    <?php
    $a=30;
    $b=4;
    $c=5;
    echo $a+$b."<br>";
    echo $a-$b."<br>";
    echo $a*$b."<br>";
    echo $a/$b."<br>";
    $value=intdiv($a,$b);
    echo $value."<br>";
    echo $a%$b."<br>";
    ?>
</div>
</body>
</html>