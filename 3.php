<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇鈕資料的接收</title>
</head>
<body>
    <div>
        「性別」為
        <?php
        echo $_POST['sex'];
        ?><br>
        「血型」為
        <?php
        echo $_POST['blood'];
        ?><br>
    </div>
</body>
</html>