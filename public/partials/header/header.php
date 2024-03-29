<?php
session_start();

$auth=boolval( $_SESSION['authorized'] );
if (!$auth) header("Location: index.php");

include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
include_once "transact-validate.php";
include_once "account-validate.php";
include_once "note-validate.php";
include_once "password-validate.php";
include_once "activate-menus.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="../css/myStyles.css" rel="stylesheet">
    <link href="../output.css" rel="stylesheet">

    <!-- FontAwesome Kit -->
    <script src="https://kit.fontawesome.com/cf3e3a7ec6.js" crossorigin="anonymous"></script>

    <!-- alpine cdn -->
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <title>E-Wallet - Home</title>
</head>
<body onload="load()" x-data="{
    'isNewDepOpen': false,
    'isNewExtOpen': false,
    'isNewTraOpen': false,
    'isNewAccOpen': false,
    'isNewNoteOpen': false,
    'isEditNoteOpen': false,
    'isChangePasswordOpen': false,
    'isNoteOpenedOpen': <?php echo $_SESSION['open-note']; ?>
}" class="flex flex-col body-h bg-default">
<?php 

?>
    <?php include_once "new-deposit.php"; ?>
    <?php include_once "new-withdraw.php"; ?>
    <?php include_once "new-transfer.php"; ?>
    <?php include_once "new-account.php"; ?>
    <?php include_once "new-note.php"; ?>
    <?php include_once "note-opened.php"; ?>
    <?php include_once "change-password.php"; ?>
    
