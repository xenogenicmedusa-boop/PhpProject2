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
    if (($grade1>90) or ($grade2>90))
        {
            echo '其中一科成績大於90分，可領獎學金<br>';
            echo "or邏輯運算子成立<br>";
        }
        else
            {
                echo '兩科成績都低於於90分，不可領取獎學金<br>';
                echo "or邏輯運算子不成立<br>";
            }
            ?>
</body>
</html>