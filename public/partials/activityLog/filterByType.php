<div class="flex flex-row w-full justify-evenly items-center">
    <div class="flex w-[50%]">
        <select id="type" class="px-2 py-2 w-full rounded-md border-1 border-gray-400 text-xs sm:text-base" name="type"> <!-- working here -->
            <?php $id_user = $_SESSION['logged_id']; ?>            
            <option value=""></option>
            <option value="dep" <?php if (isset($_GET['type']) && $_GET['type'] == 'dep') { echo 'selected'; } ?> >Depósitos</option>
            <option value="ext" <?php if (isset($_GET['type']) && $_GET['type'] == 'ext') { echo 'selected'; } ?> >Extracciones</option>
            <option value="tra" <?php if (isset($_GET['type']) && $_GET['type'] == 'tra') { echo 'selected'; } ?> >Transferencias</option>
        </select>
    </div>
</div>