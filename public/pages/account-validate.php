<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>

<?php
if (isset($_POST['nombre']) && isset($_POST['monto']) && isset($_POST['create'])) {
    $name = $_POST['nombre'];
    $balance = $_POST['monto'];
    $id_user = $_SESSION['logged_id'];

    if ( MyQueries::createAccount($conn,$name,$balance,$id_user ) == 1 ) {
        echo "<script> alert('Cuenta creada con éxito!'); </script>";
    } else {
        echo "<script> alert('Error: No se pudo crear la cuenta.'); </script>";
    }

}
?>