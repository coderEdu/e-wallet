<?php
// get movs
$id_user = $_SESSION['logged_id'];
$query = "SELECT * FROM movimientos WHERE id_usuario = $id_user limit 10";
$movs_count=0;
?>
<!-- last movements -->
<div class="flex flex-col w-11/12 h-fit sm:w-[46.5%] md:w-[46.8%] lg:w-[47.4%] xl:w-[47.7%] 2xl:w-[47.9%] m-2 rounded-2xl mov-card-b-shadow bg-white">
    <div class="flex flex-row w-full ml-4 justify-center items-center">
        <span class="flex "><i class="fa fa-money text-xl text-lime-700 bg-slate-200"></i></span>
        <h1 class="flex def-f-family text-base w-full mx-auto content-start px-3 py-3 text-slate-800">Tus últimos movimientos</h1>
    </div>
    <div class="flex w-full h-0.5 border-b-2 border-gray-200"></div>

    <?php
    foreach ($conn->query($query) as $fila) {
        $movs_count++;  // movements counter
    ?>    
    <a href="#" class="flex w-full h-auto py-4 px-6 mb-1 card-box-shadow card-box-shadow:hover bg-white"> 
        <div class="flex flex-col w-full divide-y-2 space-y-1">
            <div class="flex w-full justify-between flex-wrap">
                <div class="flex justify-center items-center h-fit">
                    <?php
                    // get account name
                    $id_cuenta = $fila['id_cuenta'];
                    $sql = $conn->query("SELECT nombre, saldo FROM cuentas WHERE id = '$id_cuenta'");
                    $rows = $sql->fetchAll();
                    
                    foreach($rows as $row) {
                    ?>
                        <div class="relative w-3 h-3 border-dashed border-4 rounded-full <?php echo MyFx::colorBalance($row['saldo'],"border"); ?>"></div>
                        <span class="flex font-serif mt-1 py-0 px-2 text-sm text-zinc-600"><?php printf(strtoupper($row["nombre"])); ?></span>
                        <?php //var_dump(MyFx::colorBalance($row['saldo'],"bg")); ?>                        
                    <?php
                    }
                    ?>
                </div>
                <h3 class="flex font-serif mb-1 text-sm text-zinc-500"><?php echo $fila['fecha']; ?></h3>
            </div>

            <div class="flex flex-col sm:flex-row py-2 px-2 space-y-2 sm:space-y-0 w-full rounded-sm box-decoration-slice justify-between bg-gray-50">
                <div class="flex flex-wrap w-3/4 pt-1 gap-2">
                    <span class="text-zinc-600"><?php echo $fila['concepto']; ?></span>
                </div>
                <div class="flex flex-row justify-end items-center space-x-2">
                    <div class="flex">
                        <h2 class="def-f-family font-medium text-lg text-end sm:text-xl text-black">
                            <i class="fa fa-dollar-sign"></i><span class="def-f-family font-medium text-xl text-slate-700"> <?php echo $fila['monto']; ?></span>                   
                        </h2>
                    </div>
                    <div class="">
                        <?php if ($fila['tipo']=='ext') { ?>
                                <i class="flex text-red-700 fa fa-arrow-up"></i>
                        <?php } elseif ($fila['tipo']=='dep') { ?>
                                <i class="flex text-green-600 fa fa-arrow-down"></i>
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
    <?php include "all-movs-list.php" ?>
</div>