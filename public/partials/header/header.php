<?php
include_once "transact-validate.php";
include_once "account-validate.php";
include_once "note-validate.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/myStyles.css" rel="stylesheet">
    <link href="../output.css" rel="stylesheet">

    <!-- FontAwesome Kit -->
    <script src="https://kit.fontawesome.com/cf3e3a7ec6.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    <title>E-Wallet - Home</title>
</head>
<body x-data="{'isNewDepOpen': false, 'isNewExtOpen': false, 'isNewTraOpen': false, 'isNewAccOpen': false, 'isNewNoteOpen': false}" class="bg-default">

    <?php include_once "new-deposit.php"; ?>
    <?php include_once "new-withdraw.php"; ?>
    <?php include_once "new-transfer.php"; ?>
    <?php include_once "new-account.php"; ?>
    <?php include_once "new-note.php"; ?>
