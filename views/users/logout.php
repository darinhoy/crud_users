<?php
    session_start();
    session_unset();
    session_destroy();

    $this->redirect('/users/login');
?>