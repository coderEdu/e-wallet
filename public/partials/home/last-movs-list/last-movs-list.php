<?php
$id_user = $_SESSION['logged_id'];
$movs_count=0;
?>
<!-- last movements -->
<div class="flex flex-col w-11/12 h-fit sm:w-[47.2%] md:w-[47.5%] lg:w-[48.1%] xl:w-[48.2%] 2xl:w-[48.3%] m-2 rounded-2xl mov-card-b-shadow bg-white">
    <div class="flex flex-row w-full ml-4 justify-center items-center">
        <span class="flex "><i class="fa fa-dollar-sign text-xl text-lime-700 bg-slate-200"></i></span>
        <h1 class="flex def-f-family text-base w-full mx-auto content-start px-3 py-3 text-slate-800">Tus últimos movimientos</h1>
    </div>
    <div class="flex w-full h-0.5 border-b-2 border-gray-200"></div>

    <?php
    foreach (MyQueries::getLastMovs($conn, $id_user) as $row) {
        $movs_count++;  // movements counter
    ?>    
    <a href="#" class="flex w-full h-auto py-3 px-6 mb-1 card-box-shadow card-box-shadow:hover <?php echo $aColor = ($row['concepto']!='$correctivo') ? "bg-white" : "bg-sky-50"; ?>"> 
        <div class="flex flex-col w-full space-y-1">
            <div class="flex w-full justify-between flex-wrap">
                <div class="flex justify-center items-center h-fit">
                    <?php
                    // get account name
                    $id_account = $row['id_cuenta'];                    
                    foreach(MyQueries::getAccountName($conn, $id_account) as $sub_row) {
                    ?>
                    <?php include("../partials/activityLog/wallet-name.php"); ?>                        
                    <?php
                    }
                    ?>
                </div>
                <h3 class="flex font-sans font-light text-sm mb-1 text-zinc-500"><?php echo MyFx::formatDate($row['fecha']); ?></h3> 
                <?php //var_dump($row); ?>
            </div>
            <?php include("../partials/activityLog/tr-detail.php"); ?>
        </div>
    </a>
    <?php
    }
    ?>
    <?php include "all-movs-list.php" ?>
</div>