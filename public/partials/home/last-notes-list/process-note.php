<?php
session_start();
if (isset($_GET['id'])) {
    $_SESSION['id_note'] = $_GET['id'];
    $_SESSION['open-note']='true';
    $_SESSION['wallets']='false';
}
header("Location: ".$_SERVER['HTTP_REFERER']);
?>