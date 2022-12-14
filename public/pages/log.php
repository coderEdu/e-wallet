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

<div class="container flex flex-col w-full h-screen mx-auto bg-default">
    <?php include "../partials/header/header-nav.php"; ?>        
    
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
 
    <div class="container w-full md:w-[80%] mt-5">
        <!-- all movements -->
        <div class="flex flex-col w-full space-y-5">
            <?php        
            foreach (MyQueries::generalQuery($conn, $id_user, $startDate, $endDate, $type, $account, $amount, $concept) as $row) {  // call the query
                $movs_count++;  // movements counter
            ?>    
                <a href="#" class="flex w-full h-auto py-4 px-6 mb-0 card-box-shadow card-box-shadow:hover rounded-md <?php echo $aColor = ($row['concepto']!='$correctivo') ? "bg-white" : "bg-sky-50"; ?>"> 
                    <div class="flex flex-col w-full space-y-1">
                        <div class="flex w-full justify-between flex-wrap">
                            <div class="flex justify-center items-center h-fit">
                                <?php
                                // get account name
                                $id_account = $row['id_cuenta'];                    
                                foreach(MyQueries::getAccountName($conn, $id_account) as $sub_row) {
                                ?>
                                    <div class="relative w-3 h-3 border-dashed border-4 rounded-full" style="border-color: <?php echo MyFx::colorBalance($sub_row['saldo']); ?>;"></div>
                                    <span class="flex font-serif mt-1 py-0 px-2 text-sm text-zinc-600"><?php printf(strtoupper($sub_row["nombre"])); ?></span>
                                    <?php //var_dump(MyFx::colorBalance($sub_row['saldo'],"bg")); ?>                        
                                <?php
                                }
                                ?>
                            </div>
                            <h3 class="flex font-serif font-light text-sm mb-1 text-zinc-500"><?php echo MyFx::formatDate($row['fecha']); ?></h3> 
                            <?php //var_dump($row); ?>
                        </div>

                        <div class="flex flex-col sm:flex-row py-2 px-2 space-y-2 sm:space-y-0 w-full rounded-md box-decoration-slice justify-between bg-gray-50">
                            <div class="flex flex-wrap w-3/4 pt-1 gap-2">
                                <span class="text-zinc-600"><?php echo $row['concepto']; ?></span>
                            </div>
                            <div class="flex flex-row justify-end items-center space-x-2">
                                <div class="flex">
                                    <h2 class="def-f-family font-medium text-lg text-end sm:text-xl text-black">
                                        <i class="fa fa-dollar-sign"></i><span class="def-f-family font-medium text-xl text-slate-700"> <?php echo $row['monto']; ?></span>                   
                                    </h2>
                                </div>
                                <div class="">
                                    <?php if ($row['tipo']=='ext') { ?>
                                            <i class="flex fa fa-arrow-up" style="color: <?php echo $color = ($row['concepto']!='$correctivo') ? "#E30000" : "#B6B6B6"; ?>;"></i>
                                    <?php } elseif ($row['tipo']=='dep') { ?>
                                            <i class="flex fa fa-arrow-down" style="color: <?php echo $icolor = ($row['concepto']!='$correctivo') ? "#0CA002" : "#B6B6B6"; ?>;"></i>
                                    <?php } else { ?>
                                            <i class="flex font-medium text-yellow-500 fa fa-rotate-right"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </a>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- footer -->
    <?php include "../partials/footer/footer.php"; ?>
</div>
