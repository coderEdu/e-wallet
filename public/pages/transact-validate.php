<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
include_once "../classes/functions.php";
?>

<?php
// logic for a new deposit
if (isset($_POST['deposit'])) {
    if (isset($_POST['dDate']) && isset($_POST['dTime']) && isset($_POST['monto']) && isset($_POST['textarea']) && isset($_POST['account'])) {
        $dDate = $_POST['dDate'];   // withdraw date
        $dTime = $_POST['dTime'];   // withdraw time
        $dDateTime = $dDate . " " . $dTime . ":" . MyFx::randomSeconds();
        $amount = floatval( $_POST['monto'] );
        $concept = $_POST['textarea'];
        $id_account = $_POST['account'];
        $id_user = $_SESSION['logged_id'];
        $tipo = "dep";

        //var_dump($_POST);
    
        foreach (MyQueries::getAccountById($conn,$id_account) as $row) {
            $balance = floatval( $row['saldo'] );
        }

        // select query based on $dDate value
        $q = ($dDate != '') ? MyQueries::newTDInsertQuery($conn,$dDateTime,$tipo,$amount,$balance,$concept,$id_user,$id_account) : MyQueries::newTInsertQuery($conn,$tipo,$amount,$balance,$concept,$id_user,$id_account);

        if ( $q == 1 ) {
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
    if (isset($_POST['wDate']) && isset($_POST['wTime']) && isset($_POST['monto']) && isset($_POST['textarea']) && isset($_POST['account'])) {
        $wDate = $_POST['wDate'];   // withdraw date
        $wTime = $_POST['wTime'];   // withdraw time
        $wDateTime = $wDate . " " . $wTime . ":" . MyFx::randomSeconds();
        $amount = floatval( $_POST['monto'] );
        $concept = $_POST['textarea'];
        $id_account = $_POST['account'];
        $id_user = $_SESSION['logged_id'];
        $tipo = "ext";
        
        //var_dump($_POST);
        //var_dump($wDateTime);
        //var_dump($wDate);
    
        foreach (MyQueries::getAccountById($conn,$id_account) as $row) {
            $balance = floatval( $row['saldo'] );
        }

        // select query based on $wDate value
        $q = ($wDate != '') ? MyQueries::newTDInsertQuery($conn,$wDateTime,$tipo,$amount,$balance,$concept,$id_user,$id_account) : MyQueries::newTInsertQuery($conn,$tipo,$amount,$balance,$concept,$id_user,$id_account);
    
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
        $tDate = $_POST['tDate'];   // transfer date
        $tTime = $_POST['tTime'];   // transfer time
        $tDateTime = $tDate . " " . $tTime . ":" . MyFx::randomSeconds();
        $amount = floatval( $_POST['monto'] );
        $concept = $_POST['textarea'];
        $id_account1 = $_POST['account1'];
        $id_account2 = $_POST['account2'];
        $id_user = $_SESSION['logged_id'];
        $tipo = "tra";
        $tipo2 = "rec";
 
        //var_dump($tDateTime);
        
        // get name and balance of account1
        foreach (MyQueries::getAccountById($conn,$id_account1) as $row) {
            $origin_name = strtoupper( $row['nombre'] );
            $origin_balance = floatval( $row['saldo'] );
        }

        foreach (MyQueries::getAccountById($conn,$id_account2) as $row) {
            $destination_name = strtoupper( $row['nombre'] );
            $destination_balance = floatval( $row['saldo'] );
        }
        
        if (floatval( $origin_balance ) >= $amount) {
            $concept = "Transferencia exitosa!. (" . $destination_name . ") => " . $concept; 
            $concept2 = "Transferencia recibida. (" . $origin_name . ")";
            // select query based on $tDate value
            $q1 = ($tDate != '') ? MyQueries::newTDInsertQuery($conn,$tDateTime,$tipo,$amount,$origin_balance,$concept,$id_user,$id_account1) : MyQueries::newTInsertQuery($conn,$tipo,$amount,$origin_balance,$concept,$id_user,$id_account1);
            $q2 = ($tDate != '') ? MyQueries::newTDInsertQuery($conn,$tDateTime,$tipo2,$amount,$destination_balance,$concept2,$id_user,$id_account2) : MyQueries::newTInsertQuery($conn,$tipo2,$amount,$destination_balance,$concept2,$id_user,$id_account2);
            if ( $q1 == 1 && $q2 == 1 ) {
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
        } else {
            echo "<script> alert('Error: No dispone de saldo suficiente para efectuar la transacción.'); </script>";
        }
    }
}
?>