<form action="index.php" method="post">
    <label>Enter a country:</label><br>
    <input type="text" name="country"><br>
    <input type="submit" value="Submit"><br>
    
    
</form>

<?php
$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "India" => "New Delhi"
);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST['country'];
    $capital = $capitals[$country];
    echo "The capital of {$country} is {$capital}.";
}
?>

