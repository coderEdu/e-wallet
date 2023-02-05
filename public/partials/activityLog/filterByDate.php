<div class="flex flex-col items-start">
    <div class="flex text-xs sm:text-base pr-2">
        <label for="desde">Desde</label>
    </div>
    <div class="flex border-1 border-gray-400 rounded-md text-slate-700 p-2">
        <input 
            type="date"
            id="desde"
            name="desde"
            value=<?php echo $_GET['desde']; ?>
        />        
    </div>
</div>

<div class="flex flex-col items-start">
    <div class="flex text-xs sm:text-base px-2">
        <label for="desde">Hasta</label>
    </div>
    <div class="flex border-1 border-gray-400 rounded-md text-slate-700 p-2">
        <input 
            type="date"
            id="hasta"
            name="hasta"
            value=<?php echo $_GET['hasta']; ?>
        />        
    </div>
</div>