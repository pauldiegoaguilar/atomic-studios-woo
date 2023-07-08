<?php
    session_start();
    session_unset();
    session_destroy();

    $section = $_GET['s'];
    header('Location: ../main2.php?section=' . $section);
    exit();
?>