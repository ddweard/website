<?php
// Установка cookie на 1 день
setcookie("favorite_food", "pizza", time() + 86400, "/");
// Чтение cookie
if (isset($_COOKIE['favorite_food'])) {
    echo "Buy some {$_COOKIE['favorite_food']}!";
}
// Удаление cookie (установка времени в прошлом)
setcookie("favorite_food", "", time() - 3600, "/");
?>
