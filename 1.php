<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get方式接收單行文字框與單行密碼框</title>
</head>
<body>
    <div>
        接收單行文字框為
        <?php echo $_GET['username'];?><br>
        接收單行密碼框為
        <?php echo$_GET['passwd'];?><br>
    </div>
</body>
</html>