<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>
<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isNewTModalOpen"      
      x-on:click.away="isNewTModalOpen = false"
      x-cloak
      x-transition
>
    <div class="model-inner">
        <div class="modal-header">
            <h3>Nuevo depósito</h3>
            <button aria-label="Close" x-on:click="isNewTModalOpen = false">✖</button>
        </div>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="transact-validate.php" ?>
                <div class="flex flex-col space-y-4">
                    <input type="number" name="monto" placeholder="Ingrese monto" class="border-2">
                    
                    <?php //var_dump($conn); ?>
                    <select id="" class="py-2" name="account"> <!-- working here -->
                        <?php $id_user = $_SESSION['logged_id']; ?>
                        
                        <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                            <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
                        <?php } ?>
                    </select>

                </div>
                <div class="flex pt-4">
                    <textarea class="border-2" name="textarea" id="" cols="32" rows="5" placeholder="En concepto de ..."></textarea>
                </div>
                <div class="flex pt-4">
                    <button x-on:click="isNewTModalOpen = false" type="submit" class="border-2 border-blue-500 bg-blue-800 text-white py-1 px-2">Depositar</button>
                </div>

                <div class="flex pt-4">

                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNewTModalOpen" x-cloak></div>