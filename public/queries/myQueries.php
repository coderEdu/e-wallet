<?php

class MyQueries {

    public static function authLogin(PDO $conn, string $user_name, string $user_pass)
    {
        $sql = "SELECT id, usuario, clave FROM usuarios WHERE usuario = '$user_name' AND clave = '$user_pass'";
        $rows = $conn->query($sql);
        return $rows;
    }
    
    // movs
    public static function getTotMovsByType(PDO $conn, string $tipo, int $id_usuario, int $id_cuenta)
    {
        $sql = $conn->query("SELECT COUNT(id) AS total FROM `movimientos` WHERE tipo = '$tipo' AND id_usuario = '$id_usuario' AND id_cuenta = '$id_cuenta'");
        $rows = $sql->fetchAll();
        return $rows;
    }

    public static function getAllMovsOrdByDateDesc(PDO $conn, int $id_user)
    {
        $query = "SELECT * FROM movimientos WHERE id_usuario = $id_user ORDER BY fecha DESC";
        $rows = $conn->query($query);
        return $rows;
    }

    public static function getLastMovs(PDO $conn, int $id_user)
    {
        $query = "SELECT * FROM movimientos WHERE id_usuario = $id_user ORDER BY fecha DESC LIMIT 6";
        $rows = $conn->query($query);
        return $rows;
    }

    public static function getMovsSumByType(PDO $conn, string $type, int $id_user, int $id_account)
    {
        $query = "SELECT SUM(monto) AS total FROM movimientos WHERE tipo = '$type' AND id_usuario = '$id_user' AND id_cuenta = '$id_account'";
        $rows = $conn->query($query);
        return $rows;
    }

    // notes
    public static function newNote(PDO $conn, string $title, string $note, int $id_user)
    {
        $sql = $conn->exec("INSERT INTO notas (titulo,nota,id_user) VALUES ('$title','$note','$id_user')");
        return $sql;
    }

    public static function getNotesByIdLogged(PDO $conn, int $id_user)
    {
        $query = "SELECT * FROM notas WHERE id_user = '$id_user'";
        $rows = $conn->query($query);
        return $rows;
    }

    // accounts
    public static function createAccount(PDO $conn, string $name, float $balance, int $id_user)
    {
        $sql = $conn->exec("INSERT INTO cuentas (nombre,saldo,id_user) VALUES ('$name','$balance','$id_user')");
        return $sql;
    }

    public static function getAccountsByLogged(PDO $conn, int $id_user)
    {
        $query = "SELECT * FROM cuentas WHERE id_user = '$id_user'";
        $rows = $conn->query($query);
        return $rows;
    }

    public static function getAccountById(PDO $conn, int $id_account)
    {
        $query = "SELECT * FROM cuentas WHERE id = '$id_account'";
        $result = $conn->query($query);
        return $result;
    }

    public static function updateBalance(PDO $conn, float $balance, int $id_user, string $name_account)
    {
        $query = "UPDATE cuentas SET saldo='$balance' WHERE id_user='$id_user' AND nombre='$name_account'";
        $rows = $conn->query($query);
        return $rows;
    }

    public static function updateBalanceByTrans(PDO $conn, float $balance, int $id_user, int $id_account)
    {
        $query = "UPDATE cuentas SET saldo = '$balance' WHERE id_user = '$id_user' AND id = '$id_account'";
        $rows = $conn->exec($query);
        return $rows;
    }

    public static function getLastNotes(PDO $conn, int $id_user)
    {
        $query = "SELECT * from notas where id_user = '$id_user' ORDER BY fec_crea DESC LIMIT 8";
        $rows = $conn->query($query);
        return $rows;
    }

    public static function getAccountName(PDO $conn, int $id_account)
    {
        $sql = $conn->query("SELECT nombre, saldo FROM cuentas WHERE id = '$id_account'");
        $rows = $sql->fetchAll();
        return $rows;
    }

    public static function newTInsertQuery(PDO $conn, string $tipo, int $monto, string $concepto, int $id_user, int $id_account) : int
    { 
        $sql = $conn->exec("INSERT INTO movimientos (tipo,monto,concepto,id_usuario,id_cuenta) VALUES ('$tipo','$monto','$concepto','$id_user','$id_account')");
        return $sql;
    }

    // Queries to use in log.php
    public static function generalQuery(PDO $conn, int $user_id, string $sDate, string $sType, string $sIdAccount, string $sAmount, string $sConcept)
    {
        $startDate = $sDate . " 00:00:00:000";
        $endDate = $sDate . " 23:59:59:999";
        $andDate = ($sDate != "") ? " AND fecha BETWEEN '$startDate'" . " AND " . "'$endDate'" : "" ;
        $andType = ($sType != "") ? " AND tipo = '$sType'" : "" ;
        $andIdAccount = ($sIdAccount != "") ? " AND id_cuenta = '$sIdAccount'" : "" ;
        $andAmount = ($sAmount != "") ? " AND monto = '$sAmount'" : "" ;
        $andConcept = ($sConcept != "") ? " AND concepto LIKE '%$sConcept%'" : "" ;
        
        $query = "SELECT * FROM movimientos WHERE id_usuario = $user_id" . $andDate . $andType . $andIdAccount . $andAmount . $andConcept . "ORDER BY fecha DESC";
        $rows = $conn->query($query);
        return $rows;
    }

    public static function generalTestQuery(int $user_id, string $sDate, string $sType, string $sIdAccount, string $sAmount, string $sConcept)
    {
        $startDate = $sDate . " 00:00:00";
        $endDate = $sDate . " 23:59:59";
        $andDate = ($sDate != "") ? " AND fecha BETWEEN '$startDate'" . " AND " . "'$endDate'" : "" ;
        $andType = ($sType != "") ? " AND tipo = '$sType'" : "" ;
        $query = "SELECT * FROM movimientos WHERE id_usuario = $user_id" . $andDate . $andType . $sIdAccount . $sAmount . $sConcept;
        return $query;
    }
}