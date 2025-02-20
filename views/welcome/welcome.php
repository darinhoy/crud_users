<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /users/login");
    exit();
}
?>

<div class="container">
    <h1>Welcome to PHP</h1>
</div>



