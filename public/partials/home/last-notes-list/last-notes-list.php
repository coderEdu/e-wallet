<?php
$id_user = $_SESSION['logged_id'];
$query = "SELECT * from notas where id_user = '$id_user'";
$notes_count=0;
?>

<!-- last notes list -->    
<div class="flex flex-col w-11/12 h-fit sm:w-[46.5%] md:w-[46.8%] lg:w-[47.4%] xl:w-[47.7%] 2xl:w-[47.9%] m-2 rounded-2xl mov-card-b-shadow bg-white">
    <div class="flex flex-row w-full ml-4 justify-center items-center">
        <span class="flex "><i class="fa fa-clipboard text-xl text-lime-700"></i></span>
        <h1 class="flex def-f-family text-base w-full mx-auto content-start px-3 py-3 text-slate-800">Tus últimas notas</h1>
    </div>
    <div class="flex w-full h-0.5 border-b-2 border-gray-200"></div>

    <?php
    foreach ($conn->query($query) as $fila) {
        $notes_count++; // notes counter
    ?>
        <a href="#" class="flex w-full h-auto justify-center items-center py-4 px-6 mb-1 card-box-shadow card-box-shadow:hover bg-white"> 
            <div class="flex w-fit h-fit mr-4">
                <i class="fa fa-clipboard flex text-4xl sm:text-5xl text-blue-200"></i>
            </div>

            <div class="flex flex-col w-full divide-y-2"> 
                <div class="flex  w-full justify-between flex-wrap">
                    <div class="flex">
                        <h3 class="flex font-serif mb-1 text-sm text-zinc-500"><?php echo $fila['fec_crea']; ?></h3>
                    </div>
                    <div class="flex">
                        <h3 class="flex font-serif mb-1 text-sm text-zinc-500"><?php echo "m. ". $fila['fec_modif']; ?></h3>
                    </div>
                </div>               
                <div class="flex flex-col sm:flex-row space-y-1 w-full justify-between">
                    <div class="flex flex-wrap w-3/4 pt-1 gap-2">
                        <span class="text-zinc-600"><?php echo $fila['titulo']; ?></span>
                    </div>                    
                </div>
            </div>
        </a>
    <?php
    }
    ?>
    <?php include "all-notes-list.php" ?>
</div>