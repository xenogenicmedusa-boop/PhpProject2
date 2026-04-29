<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>您大於18歲嗎的結果 (加上else，但有兩行輸出)</title>
</head>
<body>
    <?php
    if ($_POST['years'] >18)
        {
        echo "您的年齡大於18歲"."<br>";
        echo "您可以看限制級電影"."<br>";
        } else {
        echo "您的年齡小於18歲"."<br>";
        echo "您不能看限制級電影"."<br>";}
    ?>
</body>
</html>