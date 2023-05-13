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
    <div class="w-full p-5 mb-3 mx-auto">
        <h1 class="font-sans font-normal text-2xl text-center text-blue-900">Registro de transacciones.</h1>
    </div>

    <!-- filters block -->
    <div class="flex mx-2 flex-wrap justify-between items-center pb-2">
        <div class="flex justify-start items-center lg:hidden"> <!-- This block hides when the browser reaches 1024px width -->
            <div class="flex mr-4">
                <span>Criterio de búsqueda:</span>
            </div>            
            <div class="flex space-x-5">
                <?php include("../partials/activityLog/filters.php"); ?>
            </div>
        </div>

        <!-- This block shows the number of query results -->
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

    <!-- begin block of filters/results -->
    <div class="flex justify-between items-start">
        <div class="hidden min-h-screen lg:flex"> <!-- begins filters -->
            <!-- container -->
            <div class="space-x-4 lg:flex">
                <div class="block">
                    <div class="flex w-fit">
                        <!-- left panel -->
                        <div class="relative px-3 pt-0 pb-20 rounded-b-md text-center bg-white sm:block sm:p-0" id="filtersPanel">
                            <!-- begin form -->
                            <form class="relative min-w-[290px] inline-block overflow-hidden text-left align-middle mt-4 mb-8 sm:align-middle sm:max-w-xl sm:w-fit" action="">
                                <div class="relative items-center px-6 pb-4 pt-0 text-center">
                                    <h3 class="block text-lg font-medium leading-6 text-gray-900">Filtros de búsqueda</h3>
                                </div>

                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Rango de fechas
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="py-2">
                                                    <?php include("../partials/activityLog/filterByDate.php"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Tipo de transacción
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="py-2">
                                                    <?php include("../partials/activityLog/filterByType.php"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Monto
                                        </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="flex justify-center py-2">
                                                    <?php include("../partials/activityLog/filterByAmount.php"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            Concepto
                                        </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="flex justify-center py-2">
                                                    <?php include("../partials/activityLog/filterByConcept.php"); ?>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            Cuenta
                                        </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="py-2">
                                                    <?php include("../partials/activityLog/filterByAccount.php"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <!-- apply button -->
                                <div class="flex items-center justify-end mt-5">
                                    <button type="submit" class="relative inline-flex items-center justify-center h-auto w-full px-4 py-3 bg-blue-500 text-xs text-white font-medium rounded-md sm:text-base sm:px-5">Aplicar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- finish filters -->

        <!-- hidden panel -->
        <div class="hidden" id="hiddenPanel"></div>
         <!-- right panel -->
        <div class="flex w-full" id="rightPanel">
            <?php if (isset($movs_count)) { ?>
            <div class="container w-full mt-3 mb-12 ml-2">
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
    </div>
 
</div>
<!-- footer -->
<?php include "../partials/footer/footer.php"; ?>

<!-- myScripts -->
<script defer src="../js/logScroll.js"></script>
<script defer src="../js/logFiltersPanel.js"></script>
