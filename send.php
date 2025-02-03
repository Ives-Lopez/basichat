<?php
include'dbcon.php';


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $message = $conn->real_escape_string($_POST['message']);
    $conn->query("INSERT INTO messages (username, message) VALUES ('$username', '$message')");
}

$conn->close();
header("Location: index.php");
exit();

?>