<form action="index.php" method="post">
    <label>Login:</label><br>
    <input type="text" name="login"><br>
    <label>Username:</label><br>
    <input type="text" name="username"><br>
    <input type="submit" value="Login">
</form>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    if (empty($username)) {
        echo "Username is missing.";
    } else {
        echo "Hello {$username}";
    }
}
?>
