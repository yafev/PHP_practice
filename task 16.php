<h2>User Login</h2>
<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

<hr>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password']; 
    
    echo "<h3>Success!</h3>";
    echo "Welcome, <strong>" . htmlspecialchars($user) . "</strong>!";
}
?>
