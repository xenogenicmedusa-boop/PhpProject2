<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while:當條件不成立時</title>
</head>
<body>
    <?php
    $i=11;
    while ($i<10)
        {
            echo "i=".$i."<br>";
            $i++;
        }
        echo "離開迴圈時 i=".$i."<br>";
        ?>
</body>
</html>