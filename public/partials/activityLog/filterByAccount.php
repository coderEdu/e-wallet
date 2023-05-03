<div class="flex w-full justify-evenly items-center">
    <div class="flex w-[75%]">
        <select id="account" class="px-2 py-2 w-full rounded-md border-1 border-gray-400 text-xs sm:text-base" name="account"> <!-- working here -->
            <?php $id_user = $_SESSION['logged_id']; ?>
            
            <option value=""></option>
            <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                <option value="<?php echo $row['id']; ?>" <?php echo $sel = (isset($_GET['account']) && $row['id'] == $_GET['account']) ? "selected" : "" ; ?>><?php echo $row['nombre']; ?></option>
            <?php } ?>

        </select>
    </div>
</div>