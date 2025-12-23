<?php
$seconds = 0;
$running = true;
while ($running) {
    $seconds++;
    echo "Seconds: {$seconds}<br>";
    if ($seconds >= 11) { // Условный выход из цикла
        $running = false;
    }
}
?>
