<?php
session_start();
$_SESSION['noteId'] = 0;
if (isset($_GET['id'])) {
    $_SESSION['id_note'] = $_GET['id'];
    $_SESSION['open-note']='true';
}
$_SESSION['noteId'] = intval($_SESSION['id_note']);
header("Location: ".$_SERVER['HTTP_REFERER'].'#note_section');
?>