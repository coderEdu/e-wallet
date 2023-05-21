<div class="flex flex-col w-full py-2 px-2 space-y-2 rounded-md box-decoration-slice justify-between">
    <div class="flex p-2 w-fit 2xl:max-w-full bg-transparent rounded-r-xl">
        <span class="sm:pr-3" style="color: <?php echo ( str_contains($row['concepto'],'código:') ) ? "#E30000" : "#1C2833"; ?>;">
            <?php echo $row['concepto']; ?>
        </span>
    </div>
    <div class="flex justify-between items-end">

        <div class="flex flex-row pt-1 justify-center items-center space-x-2">
            <div class="flex">
                <h2 class="def-f-family font-medium text-lg text-end sm:text-xl" style="color: <?php echo ( str_contains($row['concepto'],'código:') ) ? "#B6B6B6" : "#212F3D"; ?>;">
                    <i class="fa fa-dollar-sign text-neutral-400 text-base pr-1"></i>
                    <span class="def-f-family font-medium text-neutral-400 text-lg">
                        <?php echo ($row['fecha']<'2023-02-24 11:29:57') ? '--' : number_format(floatval($row['saldoCuenta']),2); ?>
                    </span>      
                </h2>
            </div>
            <div class="flex">
                <span style="color: <?php echo ( str_contains($row['concepto'],'código:') ) ? "#B6B6B6" : "#F51818"; ?>;">sm.</span>
            </div>  
        </div>

        <div class="flex flex-row pt-1 justify-center items-center space-x-2">
            <div class="flex">
                <h2 class="def-f-family font-medium text-lg text-end sm:text-xl" style="color: <?php echo ( str_contains($row['concepto'],'código:') ) ? "#B6B6B6" : "#212F3D"; ?>;">
                    <?php if ($row['tipo']=='rec') { ?>
                        <span class="text-base text-green-600">+ </span><i class="fa fa-dollar-sign text-base pr-1"></i><span class="def-f-family font-medium text-lg"><?php echo number_format( floatval($row['monto']),2 ); ?></span> 
                    <?php } else if ($row['tipo']=='tra') { ?>    
                        <span class="text-xl font-normal text-red-600">- </span><i class="fa fa-dollar-sign text-base pr-1"></i><span class="def-f-family font-medium text-lg"><?php echo number_format( floatval($row['monto']),2 ); ?></span>   
                    <?php } else { ?>   
                        <i class="fa fa-dollar-sign text-base pr-1"></i><span class="def-f-family font-medium text-lg"><?php echo number_format( floatval($row['monto']),2 ); ?></span> 
                    <?php } ?>          
                </h2>
            </div>
            <div class="flex">
                <?php if ($row['tipo']=='ext') { ?>
                        <i class="flex fa fa-arrow-up font-bold text-xs py-1 px-1 rounded-md text-white opacity-60" style="background-color: <?php echo ( str_contains($row['concepto'],'código:') ) ? "#B6B6B6" : "#E30000"; ?>;"></i>
                <?php } elseif ($row['tipo']=='dep') { ?>
                        <i class="flex fa fa-arrow-down font-bold text-xs py-1 px-1 rounded-md text-white opacity-50" style="background-color: <?php echo ( str_contains($row['concepto'],'código:') ) ? "#B6B6B6" : "#0CA002"; ?>;"></i>
                <?php }  else { ?>
                        <i class="flex font-bold text-xs py-1 px-1 rounded-md text-white opacity-70 bg-yellow-500 fa fa-retweet"></i>
                <?php } ?>
            </div>
        </div>
    </div>
</div>