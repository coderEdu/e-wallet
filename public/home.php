<?php include "includes/header.php" ?>
    <div class="container flex flex-col w-full h-screen mx-auto bg-default">
        <?php include "includes/header-nav.php"; ?>
        
        <h1 class="flex flex-row text-lg sm:text-xl w-fit mx-auto content-center p-8 lg:p-10 text-slate-900">Bienvenido/a a tu Billetera Electrónica.</h1>

        <!-- account list -->
        <div class="flex flex-col mb-5 sm:flex-row sm:flex-wrap w-full content-between items-center rounded-2xl">
            <div class="flex w-full h-32 sm:w-[47.5%] md:w-[31.2%] lg:w-[23.4%] xl:w-[23.7%] 2xl:w-[23.9%] m-2 py-4 px-6 rounded-2xl card-box-shadow card-box-shadow:hover bg-white">
                <div class="flex flex-col w-[80%]">
                    <p class="font-serif mb-1 text-md text-zinc-500">GOTECH</p>
                    <h2 class="def-f-family font-medium text-2xl text-black"><i class="fa fa-dollar-sign"></i> 164589,00</i></h2>
                    <div>
                        <span class="font-bold text-sm mr-1 text-green-700"><i class="fa fa-arrow-down"></i></span>
                        <span class="text-sm text-zinc-500">12</span>
                        <div class="inline-block w-4"></div>
                        <span class="font-bold text-sm mr-1 text-red-700"><i class="fa fa-arrow-up"></i></span>
                        <span class="text-sm text-zinc-500">34</span>
                    </div>
                </div>
                <div class="flex flex-col w-[20%]">
                    <div class="bg-emerald-100 w-16 h-16 md:w-12 md:h-12 xl:w-16 xl:h-16 rounded-full">
                        <i class="fa fa-suitcase"></i>
                    </div>
                </div>
            </div>
            <div class="flex w-full h-32 sm:w-[47.5%] md:w-[31.2%] lg:w-[23.4%] xl:w-[23.7%] 2xl:w-[23.9%] m-2 rounded-2xl bg-slate-400"></div>
            <div class="flex w-full h-32 sm:w-[47.5%] md:w-[31.2%] lg:w-[23.4%] xl:w-[23.7%] 2xl:w-[23.9%] m-2 rounded-2xl bg-slate-400"></div>
            <div class="flex w-full h-32 sm:w-[47.5%] md:w-[31.2%] lg:w-[23.4%] xl:w-[23.7%] 2xl:w-[23.9%] m-2 rounded-2xl bg-slate-400"></div>
            <div class="flex w-full h-32 sm:w-[47.5%] md:w-[31.2%] lg:w-[23.4%] xl:w-[23.7%] 2xl:w-[23.9%] m-2 rounded-2xl bg-slate-400"></div>          
        </div>

        <div class="flex flex-col sm:flex-row sm:flex-wrap w-full content-between items-center rounded-2xl">
            <!-- last movements -->
            <div class="flex w-full h-64 sm:w-[47.5%] md:w-[47.8%] lg:w-[48.4%] xl:w-[48.7%] 2xl:w-[48.9%] m-2 rounded-2xl bg-slate-400"></div>

            <!-- last notes -->
            <div class="flex w-full h-64 sm:w-[47.5%] md:w-[47.8%] lg:w-[48.4%] xl:w-[48.7%] 2xl:w-[48.9%] m-2 rounded-2xl bg-slate-400"></div>
        </div>
        <?php include "includes/footer.php"; ?>
    </div>