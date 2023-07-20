<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] == 0) {
    header("Location: ../view/giris.php");
    exit();
}


?>