<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>變數:單引號與雙引號</title>
</head>
<body><div>
    <?php
    $a="php";
    echo "這是".$a."網頁<br>";
    echo "這是"."$a"."網頁".'<br>';
    echo "這是".'$a'."網頁";?>
</div>
    <h1></h1>
</body>
</html>