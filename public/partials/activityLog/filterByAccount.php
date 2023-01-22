<div class="flex flex-row w-full justify-evenly items-center">
    <div class="flex w-[50%]">
        <select id="account" class="px-2 py-2 w-full rounded-md" name="account"> <!-- working here -->
            <?php $id_user = $_SESSION['logged_id']; ?>
            
            <option value=""></option>
            <?php foreach (MyQueries::getAccountsByLogged($conn,$id_user) as $row) { ?>
                <option value="<?php echo $row['id']; ?>" <?php echo $sel = ($row['id'] == $_GET['account']) ? "selected" : "" ; ?>><?php echo $row['nombre']; ?></option>
            <?php } ?>

        </select>
    </div>
</div>