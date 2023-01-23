<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>

<?php
// logic for a new deposit
if (isset($_POST['deposit'])) {
    if (isset($_POST['monto']) && isset($_POST['textarea']) && isset($_POST['account'])) {
        $amount = floatval( $_POST['monto'] );
        $concept = $_POST['textarea'];
        $id_account = $_POST['account'];
        $id_user = $_SESSION['logged_id'];
        $tipo = "dep";
    
        foreach (MyQueries::getAccountById($conn,$id_account) as $row) {
            $balance = $row['saldo'];
        }

        if ( MyQueries::newTInsertQuery($conn,$tipo,$amount,$concept,$id_user,$id_account) == 1 ) {
            $balance += $amount;
            MyQueries::updateBalanceByTrans($conn,$balance,$id_user,$id_account);
            echo "<script> alert('Transacción exitosa!'); </script>";
        } else {
            echo "<script> alert('Error: No se pudo registrar la transacción.'); </script>";
        }
    }
}

// logic for a new withdraw
if (isset($_POST['withdraw'])) {    
    if (isset($_POST['monto']) && isset($_POST['textarea']) && isset($_POST['account'])) {
        $amount = floatval( $_POST['monto'] );
        $concept = $_POST['textarea'];
        $id_account = $_POST['account'];
        $id_user = $_SESSION['logged_id'];
        $tipo = "ext";
        
        //var_dump($_POST);
    
        foreach (MyQueries::getAccountById($conn,$id_account) as $row) {
            $balance = $row['saldo'];
        }
    
        if (floatval( $balance ) >= $amount) {
            if ( MyQueries::newTInsertQuery($conn,$tipo,$amount,$concept,$id_user,$id_account) == 1 ) {
                $balance -= $amount;
                MyQueries::updateBalanceByTrans($conn,$balance,$id_user,$id_account);
                echo "<script> alert('Transacción exitosa!'); </script>";
            } else {
                echo "<script> alert('Error: No se pudo registrar la transacción.'); </script>";
            }
        } else {
            echo "<script> alert('Error: No dispone de saldo suficiente para efectuar la transacción.'); </script>";
        }
    }
}

// logic for a new transfer
if (isset($_POST['transfer'])) {    
    if (isset($_POST['monto']) && isset($_POST['textarea']) && isset($_POST['account1']) && isset($_POST['account2'])) {
        $amount = floatval( $_POST['monto'] );
        $concept = $_POST['textarea'];
        $id_account1 = $_POST['account1'];
        $id_account2 = $_POST['account2'];
        $id_user = $_SESSION['logged_id'];
        $tipo = "tra";

        //var_dump($_POST);
    
        // get name and balance of account1
        foreach (MyQueries::getAccountById($conn,$id_account1) as $row) {
            $origin_name = strtoupper( $row['nombre'] );
            $origin_balance = $row['saldo'];
        }

        foreach (MyQueries::getAccountById($conn,$id_account2) as $row) {
            $destination_name = strtoupper( $row['nombre'] );
            $destination_balance = $row['saldo'];
        }
    
        if (floatval( $origin_balance ) >= $amount) {
            $concept = "[ " . $origin_name . " => " . $destination_name . " ] " . $concept; 
            if ( MyQueries::newTInsertQuery($conn,$tipo,$amount,$concept,$id_user,$id_account1) == 1 ) {
                // updating account1 balance
                $origin_balance -= $amount;
                MyQueries::updateBalanceByTrans($conn,$origin_balance,$id_user,$id_account1);
                // updating account2 balance
                $destination_balance += $amount;
                MyQueries::updateBalanceByTrans($conn,$destination_balance,$id_user,$id_account2);
                echo "<script> alert('Transacción exitosa!'); </script>";
            } else {
                echo "<script> alert('Error: No se pudo registrar la transacción.'); </script>";
            }
        } else {
            echo "<script> alert('Error: No dispone de saldo suficiente para efectuar la transacción.'); </script>";
        }
    }
}
?>