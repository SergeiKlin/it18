<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php
    include 'nav.php';
    nav(1);
    ?>
    <form action="loginaction.php" class="form" method="POST" id="loginform">
        <input type="text" placeholder="Логин" name="login" required class="validate" id="login">
        <input type="password" placeholder="Пароль" name="password" required class="validate" id="password">
        <button>Войти</button>
        <?php
        // Если существует элемент eroor в массиве GET, то будем выводить это значение
        if(isset($_GET["error"])){
            $error = $_GET["error"];
            echo "<p id='error' class='error'>$error</p>";
        }
        ?>
    </form>
</body>
</html>