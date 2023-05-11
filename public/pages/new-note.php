<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>
<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isNewNoteOpen"      
      x-on:click.away="isNewNoteOpen = false"
      x-cloak
      x-transition
>
    <div class="model-inner">
        <div class="modal-header">
        <script> //document.write(action); </script>
            <h3>Creando una nota</h3>
            <button aria-label="Close" x-on:click="isNewNoteOpen = false">✖</button>
        </div>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="account-validate.php" ?>
                <div class="flex flex-col space-y-6">
                    <input type="text" name="title" placeholder="Ingrese un título" autofocus required class="border-2 py-2 px-2 text-right">    
                </div>

                <div class="flex pt-4">
                    <textarea class="border-2 py-2 px-2" name="note" cols="32" rows="5" placeholder="Ingrese su nota aquí"></textarea>
                </div>

                <div class="flex pt-4">
                    <button x-on:click="isNewNoteOpen = false" type="submit" class="border-2 border-blue-500 bg-blue-800 text-white py-1 px-2">Crear</button>
                </div>

                <div class="flex pt-4">
                    <input type="hidden" name="create-note">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNewNoteOpen" x-cloak></div>