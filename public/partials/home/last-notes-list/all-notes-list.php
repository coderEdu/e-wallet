<div class="flex flex-row w-full justify-end items-center">        
    <?php 
    if ($notes_count >= 8) {
    ?>
        <a href="notes-list.php" class="flex items-center">
            <span class="flex"><i class="fa fa-plus text-base text-green-500"></i></span>
            <h1 class="flex w-full font-sans text-sm sm:text-md mx-auto px-3 mr-1 py-2 text-slate-800">Ver todas tus notas</h1>
        </a>
    <?php
    } elseif ($notes_count > 0) {
    ?>
        <div class="flex items-center">
            <span class="flex"><i class="fa fa-plus text-base text-gray-500"></i></span>
            <h1 class="flex w-full font-sans text-sm sm:text-md mx-auto px-3 mr-1 py-2 text-slate-800">Ver todas tus notas</h1>
        </div>
    <?php
    } else {
    ?>
        <div class="flex items-center">
            <span class="flex"><i class="fa fa-plus text-base text-gray-500"></i></span>
            <h1 class="flex w-full font-sans text-sm sm:text-md mx-auto px-3 mr-1 py-2 text-slate-800">No hay notas</h1>
        </div>
    <?php
    } 
    ?>
</div>