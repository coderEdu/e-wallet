<?php 
session_start();
include_once "../partials/header/header.php";
include_once "../partials/bd/conn.php";
//include_once "colors.html";
include_once "../classes/functions.php";
include_once "../queries/myQueries.php";

        //var_dump(MyQueries::generalTestQuery($id_user,"2022-11-29","","","",""));

        $type = (isset($_GET['type'])) ? $_GET['type'] : "";
        $amount = (isset($_GET['amount'])) ? $_GET['amount'] : "";
        $account = (isset($_GET['account'])) ? $_GET['account'] : "";
        $concept = (isset($_GET['concept'])) ? $_GET['concept'] : "";
        $startDate = (isset($_GET['desde'])) ? $_GET['desde'] : "";
        $endDate = (isset($_GET['hasta'])) ? $_GET['hasta'] : "";
?>

<?php include "../partials/header/header-nav.php"; ?>        
<div class="container flex flex-col w-full mx-auto bg-default">
    
    <section>
        <div class="w-full p-5 mb-3 mx-auto">
            <h1 class="font-sans font-normal text-2xl text-center text-blue-900">Registro de transacciones.</h1>
        </div>

        <!-- filters block -->
        <div class="flex mx-2 flex-wrap justify-between items-center pb-2">
                <div class="flex justify-start items-center">
                    <div class="flex mr-4">
                        <span>Criterio de búsqueda:</span>
                    </div>            
                    <div class="flex space-x-5">
                        <?php include("../partials/activityLog/filters.php"); ?>
                    </div>
                </div>
                <?php
                if ($type=="" && $amount=="" && $account=="" && $concept=="" && $startDate=="" && $endDate=="") {
                ?>
                    <div class="flex">
                        <span class="block"></span>
                    </div>
                <?php
                } else {
                    $movs_count=0;
                    foreach (MyQueries::generalQuery($conn, $id_user, $startDate, $endDate, $type, $account, $amount, $concept) as $row) { // call the query
                        $movs_count++; // movements counter
                    }
                    ?>
                    <div class="flex">
                        <?php if ($movs_count > 0) { ?>
                            <span class="block"><?php echo "Resultados - "?><span class="text-green-600"><?php echo $movs_count; ?></span></span>
                        <?php } else { ?>
                            <span class="block"><?php echo "No hay resultados" ?></span>
                        <?php } ?>
                    </div>
                <?php
                }
                ?>
        </div>
        
        <hr>
    </section>
 
    <?php if (isset($movs_count)) { ?>
    <div class="container w-full md:w-[80%] mt-5 mb-12">
        <!-- all movements -->
        <div class="flex flex-col w-full space-y-3">
            <?php foreach (MyQueries::generalQuery($conn, $id_user, $startDate, $endDate, $type, $account, $amount, $concept) as $row) { // call the query
                $movs_count++; // movements counter
                ?>    
                <a href="#" class="flex w-full h-auto py-3 px-6 mb-0 card-box-shadow card-box-shadow:hover rounded-lg <?php echo $aColor = ($row['concepto'] != '$correctivo') ? "bg-white" : "bg-green-50"; ?>"> 
                    <div class="flex flex-col w-full space-y-1">
                        <div class="flex w-full justify-between flex-wrap">
                            <div class="flex justify-center items-center h-fit">
                                <?php
                                // get account name
                                $id_account = $row['id_cuenta'];
                                foreach (MyQueries::getAccountName($conn, $id_account) as $sub_row) {
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
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>
<!-- footer -->
<?php include "../partials/footer/footer.php"; ?>
