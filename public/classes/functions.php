<?php
class MyFx
{
    // method declaration
    public static function colorBalance(float $balance, string $value): string {
        $color=''; // you must initialize var to avoid function crash
        if (floatval($balance) > 100000) {
            $color = $value."-blue-500";
        } else if (floatval($balance) > 50000) {
            $color = $value."-blue-400";
        } else if (floatval($balance) > 20000) {
            $color = $value."-blue-300";
        } else if (floatval($balance) > 10000) {
            $color = $value."-yellow-400";
        } else if (floatval($balance) > 5000) {
            $color = $value."-orange-400";
        } else if (floatval($balance) > 2500) {
            $color = $value."-orange-500";
        } else if (floatval($balance) > 1000) {
            $color = $value."-red-400";
        } else if (floatval($balance) > 500) {
            $color = $value."-red-500";
        } else if (floatval($balance) >= 0) {
            $color = $value."-red-600";
        }
        return $color;
    }

    public static function formatDate(string $date) : string
    {
        date_default_timezone_set('America/Argentina/San_Luis');
        $sDate = $date;
        $tDate = strtotime($sDate);
        $day = date('d',$tDate);
        $mon = date('m',$tDate);
        $yea = date('y',$tDate);
        $hou = date('h',$tDate);
        $min = date('i',$tDate);
        $sec = date('s',$tDate);
        $intDate = mktime($hou,$min,$sec,$mon,$day,$yea);
        $fDate = date("F j, Y, g:i a",$intDate);
        return $fDate; 
    }

    static function getBalance(PDO $conn, int $id_user, int $id_account )
    {
        $dep = 0;
        foreach(MyQueries::getMovsSumByType($conn,"dep",$id_user,$id_account) as $sumRow) {
            $dep = $sumRow['total'];
        }

        $ext = 0;
        foreach(MyQueries::getMovsSumByType($conn,"ext",$id_user,$id_account) as $sumRow) {
            $ext = $sumRow['total'];
        }

        $tra = 0;
        foreach(MyQueries::getMovsSumByType($conn,"tra",$id_user,$id_account) as $sumRow) {
            $tra = $sumRow['total'];
        }

        $balance = $dep - $ext - $tra;
        
        return $balance;
    }
}
?>