<?php
function nav($item) /* передача параметра, чтобы подсветить пункт меню */
{
    /* создадим массив меню, в  котором  ключрм каждого элемента будет имя страницы
    а значением надпись элемента  */
/*    $items = [
        "index.php" => "Главная",
        "login.php" => "Вход",
        "register.php" => "Регистрация",
        "admin.php" => "Администрирование",
        "lk.php" => "Личный кабинет",
        "logout.php" => "Выход"
    ];
*/
    // Изменим внешний вид меню в зависимости от авторизованного пользователя
    if(empty($_SESSION['login'])){
        $items = [
            "index.php" => "Главная",
            "login.php" => "Вход",
            "register.php" => "Регистрация",
            "logout.php" => "Выход"
        ];
    }
    elseif($_SESSION['login'] == 'admin'){
        $items = [
            "index.php" => "Главная",
            "admin.php" => "Администрирование",
            "logout.php" => "Выход"
        ];
    }
    else{
        $items = [
            "index.php" => "Главная",
            "lk.php" => "Личный кабинет",
            "logout.php" => "Выход"
        ];
    }  
    /* Выводим тег nav и между ними выводим меню с помощью цикла foreach*/
    echo "<nav>";
    $i = 0;
    foreach($items as $key => $value)
    {
        if ($i == $item)
            echo "<a href='$key' class='active'>$value</a>";
        else
            echo "<a href='$key'>$value</a>";
        $i++;
    }
    echo "</nav>";
}
?>