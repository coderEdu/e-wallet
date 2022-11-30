<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>

<?php
if (isset($_POST['monto']) && isset($_POST['textarea']) && isset($_POST['account']) && isset($_POST['deposit'])) {
    $amount = $_POST['monto'];
    $concept = $_POST['textarea'];
    $account = $_POST['account'];
    $id_user = $_SESSION['logged_id'];
    $tipo = "dep";
    $id_account = 0;

    foreach (MyQueries::getAccountByName($conn,$account) as $row) {
        $id_account = $row['id'];
        $balance = $row['saldo'];
    }

    if ( MyQueries::newTInsertQuery($conn,$tipo,$amount,$concept,$id_user,$id_account) == 1 ) {
        $balance += $amount;
        MyQueries::updateBalanceByTrans($conn,$balance,$id_user,$account);
        echo "<script> alert('Transacción exitosa!'); </script>";
    } else {
        echo "<script> alert('Error: No se pudo registrar la transacción.'); </script>";
    }

}

// logic for withdraw
if (isset($_POST['monto']) && isset($_POST['textarea']) && isset($_POST['account']) && isset($_POST['withdraw'])) {
    $amount = $_POST['monto'];
    $concept = $_POST['textarea'];
    $account = $_POST['account'];
    $id_user = $_SESSION['logged_id'];
    $tipo = "ext";
    $id_account = 0;

    foreach (MyQueries::getAccountByName($conn,$account) as $row) {
        $id_account = $row['id'];
        $balance = $row['saldo'];
    }

    if ($balance>=$amount) {
        if ( MyQueries::newTInsertQuery($conn,$tipo,$amount,$concept,$id_user,$id_account) == 1 ) {
            $balance -= $amount;
            MyQueries::updateBalanceByTrans($conn,$balance,$id_user,$account);
            echo "<script> alert('Transacción exitosa!'); </script>";
        } else {
            echo "<script> alert('Error: No se pudo registrar la transacción.'); </script>";
        }
    } else {
        echo "<script> alert('Error: No dispone de saldo suficiente para efectuar la transacción.'); </script>";
    }

}
?>