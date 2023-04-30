<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
include_once "../classes/functions.php";

if (isset($_POST['edit_chkbox'])) {
    $title = (isset($_POST['title'])) ? $_POST['title'] : '';
    $note = (isset($_POST['note'])) ? $_POST['note'] : '';
    $check = (isset($_POST['edit_chkbox'])) ? $_POST['edit_chkbox'] : '';
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
                            <input type="checkbox" name="edit_chkbox" id="edit_chkbox" onclick="edit()">
                            <label for="edit_chkbox">Editar</label>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-end pt-4 items-center">
                    <div class="flex">
                        <button type="submit" class="border-2 py-1 px-2" id="saveBtn" ">Guardar</button>
                    </div>
                </div>
            </form>

            <script>
               
                let edit_check = document.getElementById('edit_chkbox');
                let save_button = document.getElementById('saveBtn');
                let note = document.getElementById('note');
                let note_save_content = note.value;

                // Checks if the 'textarea' content has changed
                note.addEventListener('input', () => {
                    (note_save_content !== note.value) ? enablingSaveBtn() : disablingSaveBtn();
                });
                
                function load() {
                    //edit_check.style.borderColor='#FFF700';
                    save_button.style.backgroundColor='#E7E7E7';
                    save_button.style.borderColor='#DFDFDF';
                    save_button.style.color='#C1C1C1';
                    save_button.disabled=true;
                }

                function enablingSaveBtn() {
                    save_button.disabled=false;
                    save_button.style.backgroundColor='#0146FF';
                    save_button.style.borderColor='#0000FF';
                    save_button.style.color='white';
                }

                
                function disablingSaveBtn() {
                    save_button.style.backgroundColor='#E7E7E7';
                    save_button.style.borderColor='#DFDFDF';
                    save_button.style.color='#C1C1C1';
                    save_button.disabled=true;
                }
                
                function edit() {
                    //document.getElementById('note').setAttribute('readonly',true);
                    if (edit_check.checked) {
                        if (note_save_content !== note.value)
                            enablingSaveBtn();
                        note.removeAttribute('readonly');
                        note.style.backgroundColor='#FFFFD9';                    
                        note.focus();
                    } else {
                        note.style.backgroundColor='white';
                        note.setAttribute('readonly',true);
                        disablingSaveBtn();
                    }
                }

                /*
                function save() {
                    note.style.backgroundColor='white';
                    note.setAttribute('readonly',true);
                    edit_check.checked=false;
                    //edit_check.textContent='Editar';
                    disablingSaveBtn();
                }*/

            </script>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNoteOpenedOpen" x-cloak></div>