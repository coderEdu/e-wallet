<?php
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
?>
<div
      class="modal"
      role="dialog"
      tabindex="-1"
      x-show="isNewTraOpen"      
      x-on:click.away="isNewTraOpen = false"
      x-cloak
      x-transition
>
    <div class="model-inner">
        <div class="modal-header">
            <div class="flex space-x-2">
            <i class="flex font-bold text-xs py-1 px-1 rounded-md text-white bg-yellow-500 fa fa-retweet"></i>
                <h3>Transferencia</h3>
            </div>
            <button aria-label="Close" x-on:click="isNewTraOpen = false">✖</button>
        </div>
        <div class="flex flex-col justify-between">
            <form action="" method="post"> <?php //action="transact-validate.php" ?>
                <div class="flex flex-col space-y-6">

                    <!-- transfer date -->
                    <input type="date" max="<?php echo date("Y-m-d"); ?>" name="tDate" id="tDate" class="border-2 py-2 px-2 text-right">

                    <!-- transfer time -->
                    <input type="time" name="tTime" id="tTime" class="border-2 py-2 px-2 text-right">

                    <input 
                        type="text"
                        name="monto"
                        placeholder="Ingrese monto en pesos"
                        autofocus
                        required
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        class="border-2 py-2 px-2 text-right"
                    />
                   
                    <div class="flex flex-col space-y-2 bg-gray-50 py-2 pl-10 pr-2 rounded-md">
                        <div class="flex justify-between items-center">
                            <label for="account1" class="flex w-full pr-2 font-sans font-normal text-base text-gray-500">De la cuenta:</label>
                            <select id="account1" class="flex py-0 px-2 border-1" name="account1"> <!-- working here -->
                                <?php $id_user = $_SESSION['logged_id']; ?>
                                
                                <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="flex justify-between items-center">
                            <label for="account2" class="flex w-full pr-2 font-sans font-normal text-base text-gray-500">A la cuenta:</label>
                            <select id="account2" class="flex py-0 px-2 border-1" name="account2"> <!-- working here -->
                                <?php $id_user = $_SESSION['logged_id']; ?>
                                
                                <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="flex pt-4">
                    <textarea class="border-2 py-2 px-2" name="textarea" id="" cols="34" rows="5" placeholder="En concepto de ..."></textarea>
                </div>
                <div class="flex pt-4">
                    <button x-on:click="isNewTraOpen = false" type="submit" class="border-2 border-blue-500 bg-blue-800 text-white py-1 px-2">Transferir</button>
                </div>

                <div class="flex pt-4">
                    <input type="hidden" name="transfer">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNewTraOpen" x-cloak></div>