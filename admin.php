<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php
    include 'nav.php';
    nav(1);
    echo "Вы вошли под именем ";
    session_start();
    print_r($_SESSION['login']);
    print_r($_SESSION['userid']);
    ?>
</body>
</html>