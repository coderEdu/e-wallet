<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
$title
?>
<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isNewTransferModalOpen"      
      x-on:click.away="isNewTransferModalOpen = false"
      x-cloak
      x-transition
>
    <div class="model-inner">
        <div class="modal-header">
        <script> //document.write(action); </script>
            <h3>Realizar una transferencia</h3>
            <button aria-label="Close" x-on:click="isNewTransferModalOpen = false">✖</button>
        </div>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="transact-validate.php" ?>
                <div class="flex flex-col space-y-5">
                    <input type="number" name="monto" placeholder="Ingrese monto en pesos" autofocus class="border-2 py-2 px-2 text-right">
                   
                    <div class="flex justify-between items-center">
                        <label for="account" class="flex w-[40%] pr-2 font-sans font-normal text-base text-gray-500">De la cuenta:</label>
                        <select id="account" class="flex w-full py-2" name="account"> <!-- working here -->
                            <?php $id_user = $_SESSION['logged_id']; ?>
                            
                            <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                                <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="flex justify-between items-center">
                        <label for="account" class="flex w-[40%] pr-2 font-sans font-normal text-base text-gray-500">A la cuenta:</label>
                        <select id="account" class="flex w-full py-2" name="account"> <!-- working here -->
                            <?php $id_user = $_SESSION['logged_id']; ?>
                            
                            <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                                <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                </div>
                <div class="flex pt-4">
                    <textarea class="border-2 py-2 px-2" name="textarea" id="" cols="32" rows="5" placeholder="En concepto de ..."></textarea>
                </div>
                <div class="flex pt-4">
                    <button x-on:click="isNewTransferModalOpen = false" type="submit" class="border-2 border-blue-500 bg-blue-800 text-white py-1 px-2">Transferir</button>
                </div>

                <div class="flex pt-4">
                    <input type="hidden" name="transfer">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNewTransferModalOpen" x-cloak></div>