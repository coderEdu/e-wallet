<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
include_once "../classes/functions.php";

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
        <?php foreach (MyQueries::getNoteByIdNote($conn, intval($_SESSION['id_note'])) as $row) { ?>
            <h3><?php echo (isset($row['fec_crea'])) ? MyFx::formatDate($row['fec_crea']) : ''; ?></h3>
        <?php } ?>
            <button aria-label="Close" x-on:click="isNoteOpenedOpen = false, seeWallets = true" x-on:closed='<?php $_SESSION['id_note']='false'; ?>'>✖</button>
        </div>
        <?php foreach (MyQueries::getNoteByIdNote($conn,intval( $_SESSION['id_note']) ) as $row) { ?>
        <?php } ?>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="account-validate.php" ?>
                <div class="flex flex-col space-y-6">
                    <input type="text" name="title" placeholder="Título de la nota" value="<?php echo (isset($row['titulo'])) ? $row['titulo'] : ''; ?>" readonly class="border-2 py-2 px-2 text-right">    
                </div>

                <div class="flex pt-4">
                    <textarea class="border-2 py-2 px-2" name="note" id="" cols="34" rows="8" readonly placeholder="Texto de la nota"><?php echo (isset($row['nota'])) ? $row['nota'] : ''; ?></textarea>
                </div>
                
                <div class="flex justify-between pt-4 items-center">
                    <div class="flex">
                        <button x-on:click="isNoteOpenedOpen = false" type="submit" class="border-2 border-blue-500 bg-blue-800 text-white py-1 px-2">Cerrar</button>
                    </div>
                    <div class="flex justify-between items-center space-x-2">
                        <div class="flex">
                            <button class="w-8 h-8"><img src="../img/Actions-document-edit-icon.png" alt="edit-icon"></button>
                        </div>
                        <div class="flex">
                            <button class="w-8 h-8"><img src="../img/Actions-document-close-icon.png" alt="delete-icon"></button>
                        </div>
                    </div>
                </div>
                
                <div class="flex pt-4">
                    <input type="hidden" name="">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNoteOpenedOpen" x-cloak></div>