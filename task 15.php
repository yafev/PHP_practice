<h2>Product Search</h2>
<form action="search.php" method="GET">
    <input type="text" name="keyword" placeholder="Enter product name..." required>
    <button type="submit">Search</button>
</form>

<br>

<?php

if (isset($_GET['keyword'])) {
    $searchTerm = $_GET['keyword'];
    
    echo "<h3>Search Results for: " . htmlspecialchars($searchTerm) . "</h3>";
}
?>
