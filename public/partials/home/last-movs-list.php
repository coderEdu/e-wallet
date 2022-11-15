<?php
// get movs
$id_user = $_SESSION['logged_id'];
$query = "SELECT * FROM movimientos WHERE id_usuario = $id_user limit 10";

?>
<!-- last movements -->
<div class="flex flex-col w-11/12 h-fit sm:w-[46.5%] md:w-[46.8%] lg:w-[47.4%] xl:w-[47.7%] 2xl:w-[47.9%] m-2 rounded-2xl mov-card-b-shadow bg-white">
    <div class="flex flex-row w-full ml-4 justify-center items-center">
        <span class="flex "><i class="fa fa-money text-xl text-green-300"></i></span>
        <h1 class="flex def-f-family text-base w-full mx-auto content-start px-3 py-3 text-slate-800">Tus últimos movimientos</h1>
    </div>
    <div class="flex w-full h-0.5 border-b-2 border-gray-200"></div>

    <?php
    foreach ($conn->query($query) as $fila) {
    ?>    
    <a href="#" class="flex w-full h-auto py-4 px-6 mb-1 card-box-shadow card-box-shadow:hover bg-white"> 
        <div class="flex flex-col w-full divide-y-2">

            <div class="flex w-full justify-between flex-wrap">
                <div class="flex justify-center items-center h-fit">
                    <div class="relative w-3 h-3 rounded-full bg-blue-400"></div>
                    <?php
                    // get account name
                    $id_cuenta = $fila['id_cuenta'];
                    $sql = $conn->query("SELECT nombre FROM cuentas WHERE id = '$id_cuenta'");
                    $rows = $sql->fetchAll();
                    foreach($rows as $row) {
                    ?>
                        <span class="flex font-serif mt-1 py-0 px-2 text-sm text-zinc-600"><?php printf(strtoupper($row["nombre"])); ?></span>
                    <?php    
                    }
                    ?>
                </div>
                <h3 class="flex font-serif mb-1 text-sm text-zinc-500"><?php echo $fila['fecha']; ?></h3>
            </div>

            <div class="flex flex-col sm:flex-row space-y-1 w-full justify-between">
                <div class="flex flex-wrap w-3/4 pt-1 gap-2">
                    <span class="text-zinc-600"><?php echo $fila['concepto']; ?></span>
                </div>
                <h2 class="def-f-family font-medium text-lg text-end sm:text-xl text-black">
                    <i class="fa fa-dollar-sign"></i><span class="def-f-family font-medium text-xl text-slate-700"> <?php echo $fila['monto']; ?></span>
                    <?php if ($fila['tipo']=='ext') { ?>
                            <i class="flex text-red-700 fa fa-arrow-up"></i>
                    <?php } elseif ($fila['tipo']=='dep') { ?>
                            <i class="flex text-green-600 fa fa-arrow-down"></i>
                    <?php } ?>
                </h2>
            </div>
        </div>
    </a>
    <?php
    }
    ?>

    <div class="flex flex-row w-full justify-end items-center">
        <a href="log.php" class="flex items-center">
            <span class="flex"><i class="fa fa-plus text-base text-green-500"></i></span>
            <h1 class="flex w-full font-sans text-sm sm:text-md mx-auto px-3 mr-1 py-2 text-slate-800">Ver toda tu actividad</h1>
        </a>
    </div>
</div>