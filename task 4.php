<?php
$age = 20; 

if ($age >= 18) {
    echo "<h1>You can Vote!</h1>";
    echo "You are $age years old. You are eligible to vote!";
} else {
    echo "<h1>You can't Vote!</h1>";
    echo "You are only $age. You must be at least 18 to vote.";
}
?>
