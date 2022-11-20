<?php

class MyQueries {

    public static function getTotMovsByType(PDO $conn, string $tipo, int $id_usuario, int $id_cuenta)
    {
        $sql = $conn->query("SELECT COUNT(id) AS total FROM `movimientos` WHERE tipo = '$tipo' AND id_usuario = '$id_usuario' AND id_cuenta = '$id_cuenta'");
        $rows = $sql->fetchAll();
        return $rows;
    }

}