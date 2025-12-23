<?php
// Динамическое указание файла в action формы
$current_file = htmlspecialchars($_SERVER['PHP_SELF']);
echo "<form action='{$current_file}' method='post'>";
// Проверка метода запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Form submitted via POST.";
}
?>
