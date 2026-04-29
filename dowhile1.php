<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dowhile:當條件成立時</title>
</head>
<body>
    <?php
    $i=1;
    do{
        echo "i=".$i."<br>";
        $i++;
           }while ($i<10);
           echo "離開迴圈時 i=".$i."<br>";
           ?>
</body>
</html>