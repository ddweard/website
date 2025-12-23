<form action="index.php" method="post">
    <label>Username:</label><br>
    <input type="text" name="username"><br>
    <label>E-mail:</label><br>
    <input type="text" name="email"><br>
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (empty($username)) {
        echo "Username is required.";
    }
    if ($email === false) {
        echo "Invalid email format.";
    }
}
?>
