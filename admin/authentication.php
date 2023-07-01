<?php
session_start();

if (!isset($_SESSION['authenticated'])) {
    $_SESSION['status'] = "Please Login to Access the Page";
    $_SESSION['status_text'] = " ";
    $_SESSION['status_code'] = "warning";
    $_SESSION['status_btn'] = "Back";
    header("Location: index");
    exit(0);
}


?>