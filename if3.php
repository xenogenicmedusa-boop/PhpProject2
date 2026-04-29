<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電影分級</title>
</head>
<body>
    <?php
    $yearsold=$_POST['years'];
    echo "您的年齡為$yearsold<br>";
    if($yearsold >18)
        echo "您可以看限制級電影"."<br>";
    elseif($yearsold >12)
        echo "您可以看輔導級電影"."<br>";
    else
        echo "您可以看普遍級電影"."<br>";
    ?>
</body>
</html>