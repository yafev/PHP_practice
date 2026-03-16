<?php

$directory = [
    ["name" => "Tech Hub", "category" => "Software", "location" => "Addis Ababa"],
    ["name" => "Green Cafe", "category" => "Food", "location" => "Bole"],
    ["name" => "Unity Bookshop", "category" => "Education", "location" => "Arat Kilo"]
];

echo "<h2>Business Names:</h2>";

foreach ($directory as $business) {
    echo "Business Name: " . $business["name"] . "<br>";
}
?>
