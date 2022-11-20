<div class="flex flex-col mb-2 sm:mb-4 md:mb-5 pt-10 md:pt-12 lg:pt-14 sm:flex-row sm:flex-wrap w-full content-between items-center rounded-2xl">
    <div class="flex w-full sm:ml-2 justify-center sm:justify-start items-center">
        <span class="flex text-left"><i class="fa fa-wallet text-xl text-lime-700"></i></span>
        <h1 class="flex def-f-family text-base text-left px-3 py-4 text-slate-900">Tus cuentas</h1>
    </div>
    
    <?php
    $id = $_SESSION['logged_id'];
    foreach(MyQueries::getAccountsByLogged($conn, $id) as $fila) { 
    ?>            
        <div class="flex w-11/12 h-fit sm:w-[47.5%] md:w-[31.2%] lg:w-[23.4%] xl:w-[23.7%] 2xl:w-[23.9%] m-2 py-4 px-6 rounded-2xl card-box-shadow card-box-shadow:hover bg-white"> <!-- card 1 -->
            <div class="flex flex-col w-[85%]">
                <p class="font-serif mb-1 text-sm text-zinc-600"><?php echo strtoupper($fila[('nombre')]); ?></p>
                <a href="#">
                    <h2 class="def-f-family font-medium text-xl py-2 pr-4 mr-3 text-right text-slate-700 bg-slate-50 rounded-r-xl"><i class="fa fa-dollar-sign pr-1"></i><?php echo $fila['saldo']; ?></i></h2>
                </a>
                <div class="flex pt-1 content-center items-start">
                    <div>
                        <span class="font-light text-sm font-serif text-zinc-500"><?php echo MyFx::formatDate($fila['fec_crea']); ?></span>
                    </div>
                </div>
                <div class="flex w-full py-1">
                    <div class="flex">
                        <span class="text-sm text-zinc-600">Movs:</span>
                    </div>
                    <div class="flex w-full px-4 justify-between">
                        <div class="flex">
                            <span class="font-bold text-sm mr-1 text-green-700"><i class="fa fa-arrow-down"></i></span>
                            <?php foreach($ext=MyQueries::getTotMovsByType($conn,'dep',$id,$fila['id']) as $row) { ?>
                            <span class="text-sm text-zinc-500"><?php echo $row['total']; ?></span>
                            <?php } ?>
                        </div>
                        <div class="flex">
                            <span class="font-bold text-sm mr-1 text-red-700"><i class="fa fa-arrow-up"></i></span>
                            <?php foreach($ext=MyQueries::getTotMovsByType($conn,'ext',$id,$fila['id']) as $row) { ?>
                            <span class="text-sm text-zinc-500"><?php echo $row['total']; ?></span>
                            <?php } ?>
                        </div>
                        <div class="flex">
                            <span class="font-bold text-sm mr-1 text-yellow-500"><i class="fa fa-rotate-right"></i></span>
                            <?php foreach($ext=MyQueries::getTotMovsByType($conn,'tra',$id,$fila['id']) as $row) { ?>
                            <span class="text-sm text-zinc-500"><?php echo $row['total']; ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-[15%] items-end">
                <div class="flex border-2 <?php echo MyFx::colorBalance(floatval($fila['saldo']),'border') ?> w-10 h-10 md:w-12 md:h-12 rounded-full items-center">
                    <i class="fa fa-wallet text-[1.3rem] xl:text-[1.5rem] <?php echo MyFx::colorBalance(floatval($fila['saldo']),'text') ?> mx-auto"></i>
                </div>
            </div>
        </div>
    <?php
    }
    ?>       
</div>