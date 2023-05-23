<div class="flex w-full sm:ml-2 p-5 justify-center items-center">
    <span class="flex text-left"><i class="fa fa-wallet text-xl text-lime-700"></i></span>
    <h1 class="flex def-f-family text-lg text-left px-3 text-slate-900">Tus cuentas</h1>
</div>

<!-- begin of account cards -->
<div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 mb-5 w-full items-start rounded-2xl">  
    <?php
    $id = $_SESSION['logged_id'];
    foreach(MyQueries::getAccountsByLogged($conn, $id) as $fila) { 
    ?>            
        <div class="grid py-3 p-4 m-2 rounded-xl card-box-shadow card-box-shadow:hover bg-white"> <!-- begin card -->
            <div class="flex flex-col w-full space-y-1.5">                
                <div class="relative flex justify-between items-center w-full rounded-tr-md">
                    <div class="flex">
                        <p class="font-serif font-medium text-base text-zinc-800"><?php echo strtoupper($fila[('nombre')]); ?></p>
                    </div>
                    <div class="flex h-4 w-4 rounded-full z-0">
                        <span class="flex"><i class="fa fa-wallet text-lg" style="color: <?php echo MyFx::colorBalance($fila[('saldo')]); ?>;"></i></span>
                    </div>
                    <!-- a circle with a wallet icon inside it -->   
                    <!-- code removed -->
                </div>
                <a href="#">
                    <h2 class="w-full def-f-family font-medium text-xl py-2 pr-4 mr-3 text-right text-slate-700 bg-white border-2 border-slate-100"><i class="fa fa-dollar-sign pr-1"></i><?php echo number_format( floatval($fila['saldo']),2 ); ?></i></h2>
                </a>
                <div class="flex w-full justify-between items-center">
                    <div class="flex w-full">
                        <div>
                            <span class="font-light text-sm font-serif text-zinc-500"><?php echo MyFx::formatDateSMonth($fila['fec_crea'],true); ?></span>
                        </div>
                    </div>
                    <div class="flex w-fit space-x-2 justify-between items-center">
                        <div class="flex">
                            <span class="font-bold text-xs mr-1 text-green-700"><i class="fa fa-arrow-down"></i></span>
                            <?php foreach($ext=MyQueries::getTotMovsByType($conn,'dep',$id,$fila['id']) as $row) { ?>
                            <span class="text-xs text-zinc-500"><?php echo $row['total']; ?></span>
                            <?php } ?>
                        </div>
                        <div class="flex">
                            <span class="font-bold text-xs mr-1 text-red-700"><i class="fa fa-arrow-up"></i></span>
                            <?php foreach($ext=MyQueries::getTotMovsByType($conn,'ext',$id,$fila['id']) as $row) { ?>
                            <span class="text-xs text-zinc-500"><?php echo $row['total']; ?></span>
                            <?php } ?>
                        </div>
                        <div class="flex">                
                            <span class="font-bold text-xs mr-1 text-yellow-500"><i class="fa fa-retweet"></i></span>
                            <?php foreach($ext=MyQueries::getTotMovsByType($conn,'tra',$id,$fila['id']) as $row) { ?>
                            <span class="text-xs text-zinc-500"><?php echo $row['total']; ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>       
</div>