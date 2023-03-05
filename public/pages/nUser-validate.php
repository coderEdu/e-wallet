<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>

<?php
// logic for a new user
if (isset($_POST['nUser']) && isset($_POST['nombre']) && isset($_POST['contra'])) {
    $nUser = $_POST['nombre'];
    $nPass = $_POST['contra'];

    try {
        if ( MyQueries::createUser($conn,$nUser,$nPass) == 1 ) echo "<script> alert('Usuario creado exitosamente!'); </script>";
    }
    catch (exception $e) {
        echo "<script> alert('Error: No se pudo crear el usuario. Es posible que ya exista un usuario con el mismo nombre. Pruebe con otro nombre de usuario.'); </script>" ;
    }
    // 
}
?>