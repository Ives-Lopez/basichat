<?php
include'dbcon.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM messages ORDER BY created_at ASC");

while ($row = $result->fetch_assoc()) {
    echo '<div class="message"><span class="username">' . htmlspecialchars($row['username']) . ':</span> ' . htmlspecialchars($row['message']) . '</div>';
}

$conn->close();

?>