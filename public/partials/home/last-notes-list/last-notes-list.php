<?php
$id_user = $_SESSION['logged_id'];
$notes_count=0;
?>
<!-- last notes list -->    
<div class="flex flex-col w-11/12 h-fit sm:w-[47.2%] md:w-[47.5%] lg:w-[48.1%] xl:w-[48.2%] 2xl:w-[48.3%] m-2 rounded-2xl mov-card-b-shadow bg-white">
    <div class="flex flex-row w-full ml-4 justify-center items-center">
        <span class="flex "><i class="fa fa-clipboard text-xl text-lime-700"></i></span>
        <h1 class="flex def-f-family text-base w-full mx-auto content-start px-3 py-3 text-slate-800">Tus últimas notas</h1>
    </div>
    <div class="flex w-full h-0.5 border-b-2 border-gray-200"></div>

    <?php
    foreach (MyQueries::getLastNotes($conn, $id_user) as $row) {
        $notes_count++; // notes counter
    ?>
        <a 
            href="../partials/home/last-notes-list/process-note.php?id=<?php echo $row['id']; ?>" 
            x-on:click="isNoteOpenedOpen = true, open = false" 
            class="flex w-full h-auto justify-center items-center py-4 px-6 mb-1 card-box-shadow card-box-shadow:hover bg-white"
        > 
            <div class="flex w-fit h-fit mr-4">
                <i class="fa fa-clipboard flex text-4xl sm:text-5xl text-blue-200"></i>
            </div>
            <div class="flex flex-col w-full"> 
                <div class="flex  w-full justify-between flex-wrap">
                    <div class="flex">
                        <h3 class="flex font-serif mb-1 text-sm text-zinc-500"><?php echo MyFx::formatDate($row['fec_crea']); ?></h3>
                    </div>
                    <div class="flex">
                        <div class="mx-1"><img src="../img/Edit-icon.png" alt=""></div>
                        <h3 class="flex font-serif mb-1 text-sm text-zinc-500"><?php echo MyFx::formatDate($row['fec_modif']); ?></h3>
                    </div>
                </div>               
                <div class="flex flex-col sm:flex-row space-y-1 w-full justify-between">
                    <div class="flex flex-wrap w-full rounded-md py-1 gap-2 bg-slate-50">
                        <span class="text-zinc-600"><?php echo $row['titulo']; ?></span>
                    </div>                    
                </div>
            </div>
        </a>
    <?php
    }
    ?>
    <?php include "all-notes-list.php" ?>
</div>

<script>    
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    //alert(winScroll);
</script>