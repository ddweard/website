<?php
$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);
$capitals["USA"] = "Las Vegas";
$capitals["China"] = "Beijing";
foreach ($capitals as $key => $value) {
    echo "{$key} = {$value}<br>";
}
?>
