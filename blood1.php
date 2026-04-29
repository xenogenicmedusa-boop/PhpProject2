<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>接收血型</title>
</head>
<body>
    <?php
    $blood1=$_POST["blood"];
    switch ($blood1)
    {
        case "A" :
            echo "您是A型";
            break;
            case "B" :
                echo "您是B型";
                break;
                case "AB" :
                    echo "您是AB型";
                    break;
                    case "O" :
                        echo "您是O型";
                        break;
    }?>
</body>
</html>