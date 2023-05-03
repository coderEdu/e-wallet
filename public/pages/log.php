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
        <div class="hidden lg:flex"> <!-- begins filters -->
            <!-- container -->
            <div class="space-x-4 lg:flex">
                <div class="block overflow-y-auto">
                    <div class="flex px-4 pt-3 pb-20 text-center sm:block sm:p-0">
                        <!-- begin form -->
                        <form x-on:click.away="dropdown = 'close'" class="relative inline-block overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-xl sm:my-8 sm:align-middle sm:max-w-xl sm:w-fit" action="">
                            <div class="relative flex flex-shrink-0 justify-between items-center px-6 py-4 text-center border-b border-neutral-200 dark:border-neutral-800">
                                <h3 class="flex text-lg font-medium leading-6 text-gray-900" id="headlessui-dialog-title-132">Filtros de búsqueda</h3>
                            </div>
                            <div class="flex-grow overflow-y-auto">
                                <div class="px-10 divide-y divide-neutral-200 dark:divide-neutral-800">
                                    <div class="py-3">
                                        <!-- first -->
                                        <h3 class="text-base font-medium">Rango de fechas:</h3>
                                        <div class="relative mt-6">
                                            <div class="flex flex-col space-y-4">
                                                <?php include("../partials/activityLog/filterByDate.php"); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <!-- second -->
                                        <h3 class="text-base font-medium">Tipo:</h3>
                                        <div class="relative mt-6">
                                            <div class="flex flex-row">
                                                <?php include("../partials/activityLog/filterByType.php"); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <!-- third - monto -->

                                        <?php include("../partials/activityLog/filterByAmount.php"); ?>
                                    </div>

                                    <div class="py-3">
                                        <!-- concepto -->

                                        <?php include("../partials/activityLog/filterByConcept.php"); ?>
                                    </div>

                                    <div class="py-3">
                                        <!-- sixth -->
                                        <h3 class="text-base font-medium">Cuenta:</h3>
                                        <div class="relative mt-6">
                                            <div class="flex flex-row gap-8">
                                                <?php include("../partials/activityLog/filterByAccount.php"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- buttons -->
                            <div class="flex items-center justify-end p-3 space-x-4 bg-neutral-50">
                                <button
                                    type="submit"
                                    class="relative inline-flex items-center justify-center h-auto px-4 py-2 bg-cyan-700 text-xs text-white font-medium transition-colors rounded-full sm:text-base sm:px-5 ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 dark:focus:ring-offset-0"
                                >
                                    Aplicar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- finish filters -->

        <div class="flex w-full ">
            <?php if (isset($movs_count)) { ?>
            <div class="container w-full mt-5 mb-12">
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
