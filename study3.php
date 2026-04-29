<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>若兩個條件其中一個成立就算成立</title>
</head>
<body>
    <?php
    $grade1=$_POST['grade1'];
    $grade2=$_POST['grade2'];
    echo "國文成績為".$grade1."<br>";
    echo "英文成績為".$grade2."<br>";
    if (($grade1<60) xor ($grade2<60))
        {
            echo '只要一科成績低於60分，代表有一科需要補考<br>';
            echo "xor邏輯運算子成立<br>";
        }
        else
            {
                echo '兩科成績都大於60分或都低於於60分，您all pass或say boodbye<br>';
                echo "xor邏輯運算子不成立<br>";
            }
            ?>
</body>
</html>