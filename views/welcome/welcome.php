<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /users/login");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        
    </div>
    <h1>Welcome to PHP</h1>
</body>
</html>


