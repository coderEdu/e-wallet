<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>

<?php
if (isset($_POST['title']) && isset($_POST['note']) && isset($_POST['create-note'])) {
    $title = $_POST['title'];
    $note = $_POST['note'];
    $id_user = $_SESSION['logged_id'];

    if ( MyQueries::newNote($conn,$title,$note,$id_user) == 1 ) {
        echo "<script> alert('Nota creada con éxito!'); </script>";
    } else {
        echo "<script> alert('Error: No se pudo crear la nota.'); </script>";
    }

}
?>