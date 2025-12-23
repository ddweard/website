<?php
$password = "pizza123";
// Создание хеша
$hash = password_hash($password, PASSWORD_DEFAULT);
// Проверка пароля
if (password_verify($password, $hash)) {
    echo "Password is correct!";
} else {
    echo "Incorrect password.";
}
?>
