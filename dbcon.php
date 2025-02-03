<?php

$conn = new mysqli('localhost', 'root', '', 'chat_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!--testing new line up for conn although succeed-->