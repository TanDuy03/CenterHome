<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .pageNot{
            width: 100%;
            height: 100vh;
            background-image: url(../image/404.png);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            /* text-align: center; */
            position: relative;
            display: flex;
            justify-content: center;
        }
        .pageNot .clickPage{
            position: absolute;
            bottom: 30px;
            text-decoration: none;
            padding:10px;
            width: 100px;
            text-align: center;
            background-color: #70A6E7;
            color: #ffffff;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="pageNot">
        <a href="../trangquantri/login.php" class="clickPage">Đăng nhập</a>
    </div>
</body>
</html>