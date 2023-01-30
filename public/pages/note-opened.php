<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
$title
?>
<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isNoteOpenedOpen"      
      x-on:click.away="isNoteOpenedOpen = false"
      x-cloak
      x-transition
>
    <div class="model-inner">
        <div class="modal-header">
        <script> //document.write(action); </script>
            <h3>Fecha de la nota</h3>
            <button aria-label="Close" x-on:click="isNoteOpenedOpen = false">✖</button>
        </div>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="account-validate.php" ?>
                <div class="flex flex-col space-y-6">
                    <input type="text" name="title" placeholder="Título de la nota" autofocus required class="border-2 py-2 px-2 text-right">    
                </div>

                <div class="flex pt-4">
                    <textarea class="border-2 py-2 px-2" name="note" id="" cols="32" rows="8" placeholder="Texto de la nota"></textarea>
                </div>

                <div class="flex justify-between pt-4 items-center">
                    <div class="flex">
                        <button x-on:click="isNoteOpenedOpen = false" type="submit" class="border-2 border-blue-500 bg-blue-800 text-white py-1 px-2">Cerrar</button>
                    </div>
                    <div class="flex justify-between items-center space-x-2">
                        <div class="flex">
                            <button class="w-8 h-8"><img src="../img/Actions-document-edit-icon.png" alt=""></button>
                        </div>
                        <div class="flex">
                            <button class="w-8 h-8"><img src="../img/Actions-document-close-icon.png" alt=""></button>
                        </div>
                    </div>
                </div>

                <div class="flex pt-4">
                    <input type="hidden" name="create-note">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNoteOpenedOpen" x-cloak></div>