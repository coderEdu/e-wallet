<div class="flex flex-col space-y-5">
    <div class="flex text-sm sm:text-base">
        <input
            id="dep"
            name="type"
            value="dep"
            type="radio"
            <?php if ($_GET['type'] == 'dep') { echo 'checked'; } ?>
            class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
        />
        <label for="dep" class="ml-3.5 flex flex-col flex-1 justify-center">
            <span class="text-neutral-900 dark:text-neutral-100">Depósito</span>
        </label>
    </div>
</div>

<div class="flex flex-col space-y-5">
    <div class="flex text-sm sm:text-base">
        <input
            id="ext"
            name="type"
            value="ext"
            type="radio"
            <?php if ($_GET['type'] == 'ext') { echo 'checked'; } ?>
            class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
        />
        <label for="ext" class="ml-3.5 flex flex-col flex-1 justify-center">
            <span class="text-neutral-900 dark:text-neutral-100">Extracción</span>
        </label>
    </div>
</div>

<div class="flex flex-col space-y-5">
    <div class="flex text-sm sm:text-base">
        <input
            id="tra"
            name="type"
            value="tra"
            type="radio"
            <?php if ($_GET['type'] == 'tra') { echo 'checked'; } ?>
            class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
        />
        <label for="tra" class="ml-3.5 flex flex-col flex-1 justify-center">
            <span class="text-neutral-900 dark:text-neutral-100">Transferencia</span>
        </label>
    </div>
</div>