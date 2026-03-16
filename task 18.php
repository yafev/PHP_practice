
<h2>Create Account</h2>
<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <button type="submit">Register</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['email'])) {
        
        $user = $_POST['username'];
        $email = $_POST['email'];

        if (empty($user) || empty($email)) {
            echo "<p>Error: Both Username and Email are required!</p>";
        } else {
            echo "<p '>Success! Welcome, " . htmlspecialchars($user) . ".</p>";
        }
    }
}
?>
