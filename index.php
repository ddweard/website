<form action="index.php" method="post">
    <label>Enter a number to count up to:</label><br>
    <input type="text" name="counter"><br>
    <input type="submit" value="Start">
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = $_POST['counter'];
    for ($i = $counter; $i >= 0; $i--) {
        echo $i . "<br>";
    }
}
?>
