<?php
include'dbcon.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basichat</title>
    <link rel="stylesheet" type="text/css" href="style.css">


    <script>
        function fetchMessages() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'receive.php', true);
            xhr.onload = function() {
                if (this.status == 200) {
                    document.getElementById('chat-box').innerHTML = this.responseText;
                }
            };
            xhr.send();
        }
        setInterval(fetchMessages, 1000);
    </script>
</head>



<body background="galaxy.jpg">
    
   
    <div class="container">
        <h1 class="main">Basichat</h1>
        <div id="chat-box"></div>
        <form id="chat-form" action="send.php" method="post">
            <input type="text" name="username" placeholder="Your name" required>
            <textarea name="message" placeholder="Type your message" required></textarea>
            <input type="submit" value="Send">
        </form>
        </div>
    </div>
</body>

</html>