<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>
<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isChangePasswordOpen"      
      x-on:click.away="isChangePasswordOpen = false"
      x-cloak
      x-transition
>
    <div class="model-inner">
        <div class="modal-header">
        <script> //document.write(action); </script>
            <h3>Cambiar clave de usuario</h3>
            <button aria-label="Close" x-on:click="isChangePasswordOpen = false, seeWallets = true">✖</button>

            <?php
            //var_dump($GLOBALS[ $id_note ]);
            ?>

        </div>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="password-validate.php" ?>
                <div class="flex flex-col space-y-4">
                    <input type="password" name="cActual" required placeholder="Clave actual" class="border-2 py-2 px-2 text-right">    
                    <input type="password" name="cNueva" required placeholder="Nueva clave" class="border-2 py-2 px-2 text-right">    
                    <input type="password" name="cConfirma" required placeholder="Confirmar clave" class="border-2 py-2 px-2 text-right">    
                </div>       
                <div class="flex justify-between pt-4 items-center">
                    <div class="flex">
                        <button type="submit" class="border-2 border-blue-500 bg-blue-800 text-white py-1 px-2">Guardar</button>
                    </div>
                </div>                
                <div class="flex pt-4">
                    <input type="hidden" name="cPass">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isChangePasswordOpen" x-cloak></div>