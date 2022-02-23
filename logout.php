<?php
    // Уничтожаем сессию и переходим на главную страницу
    session_start();
    session_destroy();
    header("location: /index.php");
?>