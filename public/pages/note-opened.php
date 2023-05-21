<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
include_once "../classes/functions.php";

if (isset($_POST['edit_chkbox']) && (isset($_POST['title'])) && (isset($_POST['note']))) {
    $title = $_POST['title'];
    $note =  $_POST['note'];
    $check = $_POST['edit_chkbox'];
    $id_user = intval($_SESSION['logged_id']);
    $id_note = intval($_SESSION['noteId']);

    $r = '';
    if ($check=='on')
        $r=MyQueries::updateNote($conn,$note,$id_user,$id_note);
}
?>
<?php
// I set this session-var to false to stop viewing the form
$_SESSION['open-note']='false';
?>  
<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isNoteOpenedOpen"      
      x-on:click.away="isNoteOpenedOpen = false"
      x-onload="seeWallets = false"
      x-cloak
      x-transition
      
>
    <div class="model-inner">
        <div class="modal-header">
            <?php if (isset($_SESSION['id_note'])) { ?>
                <?php foreach (MyQueries::getNoteByIdNote($conn, intval($_SESSION['id_note'])) as $row) { ?>
                    <h3><?php echo (isset($row['fec_crea'])) ? MyFx::formatDate($row['fec_crea']) : ''; ?></h3>
                <?php } ?>
             <?php } ?>
            <button aria-label="Close" x-on:click="isNoteOpenedOpen = false, seeWallets = true" x-on:closed='<?php $_SESSION['id_note']='false'; ?>'>✖</button>
        </div>
        <?php foreach (MyQueries::getNoteByIdNote($conn,intval( $_SESSION['id_note']) ) as $row) { ?>
        <?php } ?>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="account-validate.php" ?>
                <div class="flex flex-col space-y-6">
                    <input type="text" name="title" placeholder="Título de la nota" value="<?php echo (isset($row['titulo'])) ? $row['titulo'] : ''; ?>" readonly class="border-2 py-2 px-2 text-left">    
                </div>

                <div class="flex pt-4">
                    <div class="flex flex-col">
                        <textarea class="flex border-2 py-2 px-2" name="note" id="note" cols="34" rows="8" readonly placeholder="Texto de la nota"><?php echo (isset($row['nota'])) ? $row['nota'] : ''; ?></textarea>
                        <div class="flex pt-1 space-x-1">
                            <input type="checkbox" id="edit_chkbox" name="edit_chkbox" onclick="edit()">
                            <label for="edit_chkbox" id="lbl_check" class="font-sans font-normal text-sm text-gray-800">Editar</label>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-end pt-4 items-center">
                    <div class="flex">
                        <button type="submit" class="py-2 px-3 rounded-sm" id="saveBtn">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNoteOpenedOpen" x-cloak></div>
<script src="../js/noteEdition.js"></script>