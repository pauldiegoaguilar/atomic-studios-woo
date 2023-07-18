<?php
    session_start();
    session_unset();
    session_destroy();

    $section = $_GET['s'];
    $lan = $_GET['la'];

    header('Location: ../main2.php?section=' . $section . '&la=' . $lan );
    exit();
?>