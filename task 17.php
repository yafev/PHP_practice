<h2>Submit Your Feedback</h2>
<form action="feedback.php" method="POST">
    <input type="text" name="visitor_name" placeholder="Your Name" required><br><br>
    <textarea name="message" placeholder="Write your message here..." required></textarea><br><br>
    <button type="submit">Send Feedback</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['visitor_name']);
    $msg = htmlspecialchars($_POST['message']);
    
    echo "<strong>From:</strong> " . $name . "<br>";
    echo "<strong>Message:</strong> " . $msg;
}
?>
