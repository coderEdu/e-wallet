<div class="flex flex-col w-full xl:flex-row py-2 px-2 space-y-2 sm:space-y-0 rounded-md box-decoration-slice justify-between">
    <div class="flex p-2 w-fit 2xl:max-w-[80%] bg-gray-50 rounded-r-xl">
        <span class="text-zinc-600 sm:pr-3"><?php echo $row['concepto']; ?></span>
    </div>
    <div class="flex justify-end">
        <div class="flex flex-row pt-1 justify-end items-center space-x-2">
            <div class="flex">
                <h2 class="def-f-family font-medium text-lg text-end sm:text-xl" style="color: <?php echo ($row['concepto']!='$correctivo') ? "#212F3D" : "#B6B6B6"; ?>;">
                    <?php if ($row['tipo']=='rec') { ?>
                        <span class="text-base text-green-600">+ </span><i class="fa fa-dollar-sign text-base pr-1"></i><span class="def-f-family font-medium text-lg"><?php echo $row['monto']; ?></span> 
                    <?php } else if ($row['tipo']=='tra') { ?>    
                        <span class="text-xl font-normal text-red-600">- </span><i class="fa fa-dollar-sign text-base pr-1"></i><span class="def-f-family font-medium text-lg"><?php echo $row['monto']; ?></span>   
                    <?php } else { ?>   
                        <i class="fa fa-dollar-sign text-base pr-1"></i><span class="def-f-family font-medium text-lg"><?php echo $row['monto']; ?></span> 
                    <?php } ?>          
                </h2>
            </div>
            <div class="flex">
                <?php if ($row['tipo']=='ext') { ?>
                        <i class="flex fa fa-arrow-up font-bold text-xs py-1 px-1 rounded-md text-white opacity-60" style="background-color: <?php echo ($row['concepto']!='$correctivo') ? "#E30000" : "#B6B6B6"; ?>;"></i>
                <?php } elseif ($row['tipo']=='dep') { ?>
                        <i class="flex fa fa-arrow-down font-bold text-xs py-1 px-1 rounded-md text-white opacity-50" style="background-color: <?php echo ($row['concepto']!='$correctivo') ? "#0CA002" : "#B6B6B6"; ?>;"></i>
                <?php }  else { ?>
                        <i class="flex font-bold text-xs py-1 px-1 rounded-md text-white opacity-70 bg-yellow-500 fa fa-retweet"></i>
                <?php } ?>
            </div>
        </div>
    </div>
</div>