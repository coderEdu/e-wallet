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

                    <input 
                        type="text"
                        name="monto"
                        placeholder="Ingrese monto en pesos"
                        autofocus
                        required
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        class="border-2 py-2 px-2 text-right"
                    />
                   
                    <!-- Working Here -->
                    <div class="flex flex-col space-y-3 bg-gray-50 py-2 pl-10 pr-2 rounded-md">
                        <div class="flex justify-between items-center">
                            <label for="account1" class="flex w-full pr-2 font-sans font-normal text-sm text-gray-500">De la cuenta:</label>
                            <select id="account1" class="flex py-0 px-2 border-1" name="account1"> <!-- working here -->
                                <?php $id_user = $_SESSION['logged_id']; ?>
                                <option value=""></option>
                                <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <!-- select btw owner account / extern aaccount -->
                    <div class="flex flex-col items-start pl-2 space-y-2">
                        <div class="flex text-sm space-x-2">
                            <input type="radio" name="choice" id="radio_owner" value="owner" checked onclick="yourChoice()">
                            <label for="radio_owner" class="text-neutral-900">Hacia otra de tus cuentas</label>
                        </div>
                        <div class="flex text-sm space-x-2">
                            <input type="radio" name="choice" id="radio_extern" value="extern" onclick="yourChoice()">
                            <label for="radio_extern" class="text-neutral-900">Hacia una cuenta externa</label>
                        </div>
                    </div>

                    <!-- bloque1 -->
                    <div class="flex flex-col space-y-3 bg-gray-50 py-2 pl-10 pr-2 rounded-md" id="bloque1">                        
                        <div class="flex justify-between items-center">
                            <label for="account2" class="flex w-full pr-2 font-sans font-normal text-sm text-gray-500">A la cuenta:</label>
                            <select id="account2" class="flex py-0 px-2 border-1" name="account2"> <!-- working here -->
                                <?php $id_user = $_SESSION['logged_id']; ?>
                                <option value=""></option>
                                <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!-- bloque2 -->
                    <div class="hidden flex-col justify-start items-start bg-gray-50 py-2 px-2 rounded-md" id="bloque2">
                        <label for="cbu_alias" class="flex w-fit pb-2 font-sans font-normal text-sm text-gray-500">CBU / ALIAS de la cuenta externa:</label>
                        <input type="text" name="cbu_alias" id="cbu_alias" class="flex w-full border-2 py-1 px-2 text-left">
                        
                        <label for="ownerAcc" class="flex w-fit pt-3 pb-2 font-sans font-normal text-sm text-gray-500">Titular de la cuenta externa:</label>
                        <input type="text" name="ownerAcc" id="ownerAcc" class="flex w-full border-2 py-1 px-2 text-left">
                    </div>

                </div>
                <div class="flex pt-4">
                    <textarea class="border-2 py-2 px-2" name="textarea" cols="34" rows="5" placeholder="En concepto de ..."></textarea>
                </div>
                <div class="flex pt-4">
                    <button x-on:click="isNewTraOpen = false" type="submit" class="bg-blue-500 text-white py-2 px-3 rounded-sm">Transferir</button>
                </div>

                <div class="flex pt-4">
                    <input type="hidden" name="transfer">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" x-show="isNewTraOpen" x-cloak></div>
<script defer src="../js/yourChoice.js"></script>
<script defer src="../js/avoidAccSelf-transf.js"></script>