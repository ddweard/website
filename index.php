<?php
session_start();
// Установка данных сессии
$_SESSION['username'] = "SpongeBob";
// Чтение данных сессии
echo "Welcome {$_SESSION['username']}";
// Уничтожение сессии (выход)
session_destroy();
?>
