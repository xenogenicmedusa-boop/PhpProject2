<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>判斷是否有資料</title>
</head>
<body>
    <?php
   if(!isset($_POST['username']))
   echo '請由表單網頁輸入姓名<br>';
if(!isset($_POST['grade1']))
    echo '請由表單網頁輸入國文成績<br>';
if(!isset($_POST['grade2']))
    echo '請由表單網頁輸入英文成績<br>';
if(empty($_POST['username']))
    echo '請輸入姓名<br>';
if(empty($_POST['grade1']))
    echo '請輸入國文成績<br>';
if(empty($_POST['grade2']))
    echo '請輸入英文成績<br>';
if(!is_numeric($_POST['grade1']))
    echo '國文成績請輸入數值<br>';
if(!is_numeric($_POST['grade2']))
    echo '英文成績請輸入數值<br>';
if(!is_int($_POST['grade1']))
    echo '國文成績請輸入整數<br>';
if(!is_int($_POST['grade2']))
    echo '英文成績請輸入整數<br>';
            ?>
</body>
</html>