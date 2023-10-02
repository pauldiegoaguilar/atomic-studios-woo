<?php
    session_start();
    session_unset();
    session_destroy();

    $lan = $_GET['la'];

    header('Location: ../main.php?section=war-over-ocean&la=' . $lan );
    exit;
?>