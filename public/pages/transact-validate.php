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
            $balance = floatval( $row['saldo'] );
        }

        if ( MyQueries::newTInsertQuery($conn,$tipo,$amount,$balance,$concept,$id_user,$id_account) == 1 ) {
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
        //var_dump($_POST);
        $amount = floatval( $_POST['monto'] );
        $concept = $_POST['textarea'];
        $id_account = $_POST['account'];
        $id_user = $_SESSION['logged_id'];
        $tipo = "ext";
        
    
        foreach (MyQueries::getAccountById($conn,$id_account) as $row) {
            $balance = floatval( $row['saldo'] );
        }

        // select query based on $wDate value
        $q = MyQueries::newTInsertQuery($conn,$tipo,$amount,$balance,$concept,$id_user,$id_account);
    
        if (floatval( $balance ) >= $amount) {
            if ( $q == 1 ) {
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

        $id_user = $_SESSION['logged_id'];
        $tipo = "tra";
        $tipo2 = "rec";
 
        // get account1 id
        $id_account1 = intval( $_POST['account1'] );
        
        // get name and balance of account1
        foreach (MyQueries::getAccountById($conn,$id_account1) as $row) {
            $origin_name = strtoupper( $row['nombre'] );
            $origin_balance = floatval( $row['saldo'] );
        }
        
        //var_dump($_POST);
    
        // transaction logic
        if (floatval( $origin_balance ) >= $amount) {
            if ( isset($_POST['choice']) && $_POST['choice']=='owner' ) {
                // get account2 id
                $id_account2 = intval( $_POST['account2'] );
                // get name and balance of account2
                foreach (MyQueries::getAccountById($conn,$id_account2) as $row) {
                    $destination_name = strtoupper( $row['nombre'] );
                    $destination_balance = floatval( $row['saldo'] );
                }
                $concept = "Transferencia exitosa!. (" . $destination_name . ") => " . $concept; 
                $concept2 = "Transferencia recibida. (" . $origin_name . ")";
                if ( MyQueries::newTInsertQuery($conn,$tipo,$amount,$origin_balance,$concept,$id_user,$id_account1) == 1 && ( MyQueries::newTInsertQuery($conn,$tipo2,$amount,$destination_balance,$concept2,$id_user,$id_account2) == 1 ) ) {
                    // updating account1 balance
                    $origin_balance -= $amount;
                    MyQueries::updateBalanceByTrans($conn,$origin_balance,$id_user,$id_account1);
                    // updating account2 balance
                    $destination_balance += $amount;
                    MyQueries::updateBalanceByTrans($conn,$destination_balance,$id_user,$id_account2);
                    // transaction succeeded
                    echo "<script> alert('Transacción exitosa!'); </script>";
                } else {
                    echo "<script> alert('Error: No se pudo registrar la transacción.'); </script>";
                }
            } else { // extern block
                $concept = "Transferencia exitosa!. ( titular: " . $_POST['ownerAcc'] . " - CBU/ALIAS: " . $_POST['cbu_alias'] . ") => " . $concept; 
                if ( MyQueries::newTInsertQuery($conn,$tipo,$amount,$origin_balance,$concept,$id_user,$id_account1) == 1 ) {
                    // updating account1 balance
                    $origin_balance -= $amount;
                    MyQueries::updateBalanceByTrans($conn,$origin_balance,$id_user,$id_account1);
                    // transaction succeeded
                    echo "<script> alert('Transacción exitosa!'); </script>";
                } else {
                    echo "<script> alert('Error: No se pudo registrar la transacción.'); </script>";
                }
            }
        } else {
            echo "<script> alert('Ups! La cuenta $origin_name No dispone de saldo suficiente para efectuar la transacción.'); </script>";
        }


    }
}
?>