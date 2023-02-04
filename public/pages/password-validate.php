<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>

<?php
// logic for changing password
if (isset($_POST['cPass'])) {
    if (isset($_POST['cActual']) && isset($_POST['cNueva']) && isset($_POST['cConfirma'])) {
        $cActual = $_POST['cActual'];
        $cNueva = $_POST['cNueva'];
        $cConfirma = $_POST['cConfirma'];
        $user_name = $_SESSION['user-name'];

        if ($cActual==$_SESSION['user-pass'] && $cNueva==$cConfirma) {
            //echo "<script> alert('Coincidencia!'); </script>";
            MyQueries::updatePassword($conn,$user_name,$cNueva);
            foreach (MyQueries::authLogin($conn, $user_name, $cNueva) as $row) {
                $r=($row) ? "<script> alert('Clave de usuario actualizada!'); </script>" : "<script> alert('Error: no se pudo actualizar la clave'); </script>";
                echo $r;
            }
        } else { 
            echo "<script> alert('Error: datos inconsistentes!'); </script>";
        }
    }
}