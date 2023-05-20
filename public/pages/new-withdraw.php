<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>
<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isNewExtOpen"      
      x-on:click.away="isNewExtOpen = false"
      x-cloak
      x-transition
>
    <div class="model-inner">
        <div class="modal-header">
            <div class="flex space-x-2">
                <i class="flex fa fa-arrow-up font-bold text-xs py-1 px-1 rounded-md text-white" style="background-color: <?php echo "#E30000" ?>;"></i>
                <h3>Extracción</h3>
            </div>
            <button aria-label="Close" x-on:click="isNewExtOpen = false">✖</button>
        </div>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="transact-validate.php" ?>
                <div class="flex flex-col space-y-6">

                    <!-- withdraw amount -->
                    <input
                        type="text"
                        name="monto"
                        placeholder="Ingrese monto en pesos"
                        autofocus
                        required
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        class="border-2 py-2 px-2 text-right"
                    />     

                    <div class="flex flex-col space-y-3 bg-gray-50 py-2 pl-10 pr-2 rounded-md">
                        <div class="flex justify-between items-center">
                            <label for="account" class="flex w-full pr-2 font-sans font-normal text-base text-gray-500">De la cuenta:</label>
                            <select id="account" class="flex py-0 px-2 border-1" name="account"> <!-- working here -->
                                <?php $id_user = $_SESSION['logged_id']; ?>
                                
                                <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="flex pt-4">
                    <textarea class="border-2 py-2 px-2" name="textarea" cols="32" rows="5" placeholder="En concepto de ..."></textarea>
                </div>
                <div class="flex pt-4">
                    <button x-on:click="isNewExtOpen = false" type="submit" class="bg-blue-500 text-white py-2 px-3 rounded-sm">Extraer</button>
                </div>

                <div class="flex pt-4">
                    <input type="hidden" name="withdraw">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNewExtOpen" x-cloak></div>