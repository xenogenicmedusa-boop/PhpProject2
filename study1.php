<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>若兩個條件均成立</title>
</head>
<body>
    <?php
    $grade1=$_POST['grade1'];
    $grade2=$_POST['grade2'];
    echo "國文成績為".$grade1."<br>";
    echo "英文成績為".$grade2."<br>";
    if (($grade1>=60) and ($grade2>=60))
        {
            echo '兩科成績都大於60分，及格<br>';
            echo "and邏輯運算子成立<br>";
        }
        else
            {
                echo '兩科成績至少有一個沒大於60分，不及格<br>';
                echo "and邏輯運算子不成立<br>";
            }
            ?>
</body>
</html>