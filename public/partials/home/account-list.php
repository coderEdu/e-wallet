<div class="flex flex-col mb-2 sm:mb-4 md:mb-5 pt-10 md:pt-12 lg:pt-14 sm:flex-row sm:flex-wrap w-full justify-start items-center rounded-2xl">
    <div class="flex w-full sm:ml-2 justify-center sm:justify-start items-center">
        <span class="flex text-left"><i class="fa fa-wallet text-xl text-lime-700"></i></span>
        <h1 class="flex def-f-family text-base text-left px-3 py-4 text-slate-900">Tus cuentas</h1>
    </div>
    
    <?php
    $id = $_SESSION['logged_id'];
    foreach(MyQueries::getAccountsByLogged($conn, $id) as $fila) { 
    ?>            
        <div class="flex w-11/12 h-fit sm:w-[48.05%] md:w-[48.35%] lg:w-[32.1%] xl:w-[23.7%] 2xl:w-[24.1%] m-1.5 py-3 px-4 rounded-xl card-box-shadow card-box-shadow:hover bg-white"> <!-- begin card -->
            <div class="flex flex-col w-full space-y-1.5">
                
                <div class="relative flex justify-start items-center space-x-1">
                    <!--<div class="flex h-4 w-4 rounded-full" style="background-image: radial-gradient(white, <?php echo MyFx::colorBalance(floatval($fila['saldo'])) ?>, blue);"></div>-->
                    <div class="flex">
                        <p class="font-serif text-lg text-zinc-800"><?php echo strtoupper($fila[('nombre')]); ?></p>
                    </div>
                    <!-- a circle with a wallet icon inside it -->   
                    <!-- code removed -->
                </div>

                <a href="#">
                    <h2 class="w-full def-f-family font-medium text-xl py-2 pr-4 mr-3 text-right text-slate-700 bg-slate-50 rounded-r-xl"><i class="fa fa-dollar-sign pr-1"></i><?php echo $fila['saldo']; ?></i></h2>
                </a>
                <div class="flex w-full justify-between items-center">
                    <div class="flex w-full">
                        <div>
                            <span class="font-light text-sm font-serif text-zinc-500"><?php echo MyFx::formatDateToAccount($fila['fec_crea']); ?></span>
                        </div>
                    </div>
                    <div class="flex w-full">
                        <div class="flex w-full justify-between items-center">
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
                                <span class="font-bold text-sm mr-1 text-yellow-500"><i class="fa fa-retweet"></i></span>
                                <?php foreach($ext=MyQueries::getTotMovsByType($conn,'tra',$id,$fila['id']) as $row) { ?>
                                <span class="text-sm text-zinc-500"><?php echo $row['total']; ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>       
</div>