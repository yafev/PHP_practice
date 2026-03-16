<h2>Join Our Newsletter</h2>
<form action="validate_email.php" method="POST">
    <input type="text" name="user_email" placeholder="Enter your email" required>
    <button type="submit">Subscribe</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['user_email']); 

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Success: <strong>" . htmlspecialchars($email) . "</strong> is a valid email address.</p>";
    } else {
        echo "<p >Error: Please enter a valid email address (e.g., name@example.com).</p>";
    }
}
?>
