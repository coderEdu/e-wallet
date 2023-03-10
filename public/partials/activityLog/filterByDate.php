<div class="flex flex-col items-start">
    <div class="flex text-xs sm:text-base">
        <label for="desde">Desde</label>
    </div>
    <div class="flex border-1 border-gray-400 rounded-md text-slate-700 p-2">
        <input 
            type="date"
            max="<?php echo date("Y-m-d"); ?>"
            id="desde"
            name="desde"
            value=<?php echo (isset($_GET['desde'])) ? $_GET['desde'] : ''; ?>
        />        
    </div>
</div>

<div class="flex flex-col items-start">
    <div class="flex text-xs sm:text-base">
        <label for="desde">Hasta</label>
    </div>
    <div class="flex border-1 border-gray-400 rounded-md text-slate-700 p-2">
        <input 
            type="date"
            max="<?php echo date("Y-m-d"); ?>"
            id="hasta"
            name="hasta"
            value=<?php echo (isset($_GET['hasta'])) ? $_GET['hasta'] : ''; ?>
        />        
    </div>
</div>