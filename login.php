

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111111;

            text-align: center;
            margin-top: 50px;
        }
        .login-box {
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            box-shadow: 0 15px 25px rgba(142, 142, 142, 0.734);
            border-radius: 10px;
        }
        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #333;
            text-align: center;
        }
        .login-box .textbox {
            position: relative;
            margin-bottom: 30px;
        }
        .login-box .textbox input {
            width: 100%;
            padding: 10px;
            background: #f0f0f0;
            border: none;
            outline: none;
            color: #333;
            font-size: 18px;
        }
        .login-box .textbox input[type="password"] {
            margin-top: 10px;
        }
        .login-box input[type="submit"] {
            width: 100%;
            background: #333;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            color: #fff;
            border-radius: 5px;
        }
        .login-box input[type="submit"]:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>DHub Native</h2>
        <form action="admin/admin.php" method="post">
            <div class="textbox">
                <input type="text" placeholder="Логин" name="login" required>
            </div>
            <div class="textbox">
                <input type="password" placeholder="Пароль" name="password" required>
            </div>
            <input type="submit" value="Войти" class="bth bth-rimary">
        </form>
    </div>
</body>
</html>

