<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>
<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isNewUserOpen"      
      x-on:click.away="isNewUserOpen = false"
      x-cloak
      x-transition
>
    <div class="model-inner">
        <div class="modal-header">
            <h3>Creando una cuenta</h3>
            <button aria-label="Close" x-on:click="isNewUserOpen = false">✖</button>
        </div>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="account-validate.php" ?>
                <div class="flex flex-col space-y-6">
                    <input type="text" name="nombre" placeholder="Ingrese un nombre" autofocus required class="border-2 py-2 px-2 text-right">
                    <input
                        type="text"
                        name="monto"
                        placeholder="Ingrese monto en pesos"
                        autofocus
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        class="border-2 py-2 px-2 text-right"
                    >     
                </div>

                <div class="flex pt-4">
                    <button x-on:click="isNewUserOpen = false" type="submit" class="border-2 border-blue-500 bg-blue-800 text-white py-1 px-2">Crear</button>
                </div>

                <div class="flex pt-4">
                    <input type="hidden" name="create">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNewUserOpen" x-cloak></div>