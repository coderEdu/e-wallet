<?php include "includes/header.php" ?>
    <div class="container flex flex-col w-full h-screen mx-auto bg-default">
        <?php include "includes/header-nav.php"; ?>        
        
        <!-- account list -->
        <?php /* include "includes/partials/home/account-list.php" */ ?>

        <div class="flex flex-col sm:flex-row sm:flex-wrap w-full content-between items-center rounded-2xl">
            <!-- last movements -->
            <div class="flex flex-col w-11/12 h-auto sm:w-[47.5%] md:w-[47.8%] lg:w-[48.4%] xl:w-[48.7%] 2xl:w-[48.9%] m-2 rounded-2xl mov-card-b-shadow bg-white">
                <div class="flex flex-row w-full ml-4 justify-center items-center">
                    <span class="flex "><i class="fa fa-money-bill text-xl text-slate-500""></i></span>
                    <h1 class="flex font-sans text-lg sm:text-lg w-full mx-auto content-start px-3 py-4  text-slate-700">Tus últimos movimientos</h1>
                </div>
                <div class="flex w-full h-0.5 border-b-2 border-gray-200"></div>

                <!-- first movement card -->
                <!--
                <div class="flex w-full h-auto py-4 px-6 mb-1 card-box-shadow card-box-shadow:hover bg-white">
                    <div class="flex flex-col w-[80%] divide-y-2">

                        <div class="flex w-full justify-between">
                            <p class="font-serif mb-1 text-md text-zinc-500">GOTECH</p>
                            <h3 class="font-serif mb-1 text-md text-zinc-500">9 mar 2022 1:26:04</h3>
                        </div>

                        <div class="flex w-full pt-1 justify-between">
                            <div class="flex flex-wrap w-3/4 gap-2">
                                <span class="text-zinc-600">Paddle con Andy, Sergio y Dampier en...</span>
                            </div>
                            <a href="#">
                                <h2 class="def-f-family font-medium text-2xl text-black"><i class="fa fa-dollar-sign"></i> 400,0</i></h2>
                            </a>
                        </div>

                    </div>
                    <div class="flex flex-col w-[20%] items-end">
                        <div class="flex bg-green-100 w-16 h-16 md:w-12 md:h-12 xl:w-16 xl:h-16 rounded-full items-center">
                            <i class="fa fa-money text-[1.5rem] md:text-[1.4rem] xl:text-[1.5rem] text-green-500 mx-auto"></i>
                        </div>
                        <i class="flex text-red-700 fa fa-arrow-up"></i>
                    </div>
                </div>
                -->

                <!-- second movement card -->
                <!--
                <div class="flex w-full h-auto py-4 px-6 mb-1 card-box-shadow card-box-shadow:hover bg-white"> 
                    <div class="flex flex-col w-[80%] divide-y-2">

                        <div class="flex w-full justify-between">
                            <p class="font-serif mb-1 text-md text-zinc-500">GOTECH</p>
                            <h3 class="font-serif mb-1 text-md text-zinc-500">13 oct 2022 14:21:44</h3>
                        </div>

                        <div class="flex flex-row-reverse w-full justify-between">
                            <a href="#">
                                <h2 class="def-f-family font-medium text-2xl text-black"><i class="fa fa-dollar-sign"></i> 3342,68</i></h2>
                            </a>
                            <div class="flex flex-wrap w-3/4 gap-2">
                                <span class="text-zinc-600">Compré el mouse Logi m280 en ML.</span>
                            </div>
                        </div>

                    </div>
                    <div class="flex flex-col w-[20%] items-end">
                        <div class="flex bg-green-100 w-16 h-16 md:w-12 md:h-12 xl:w-16 xl:h-16 rounded-full items-center">
                            <i class="fa fa-money text-[1.5rem] md:text-[1.4rem] xl:text-[1.5rem] text-green-500 mx-auto"></i>
                        </div>
                        <i class="flex text-red-700 fa fa-arrow-up"></i>
                    </div>
                </div>
                -->

                 <!-- third movement card -->
                 <div class="flex w-full h-auto py-4 px-6 mb-1 card-box-shadow card-box-shadow:hover bg-white"> 
                    <div class="flex flex-col w-full divide-y-2">

                        <div class="flex w-full justify-between">
                            <span class="flex font-serif mb-1 py-0 px-3 bg-green-200 rounded-xl text-md text-zinc-900">GOTECH</span>
                            <h3 class="font-serif mb-1 text-md text-zinc-500">24 oct 2022 17:12:04</h3>
                        </div>

                        <div class="flex flex-row-reverse w-full justify-between">
                            <a href="#">
                                <h2 class="def-f-family font-medium text-2xl text-black"><i class="fa fa-dollar-sign"></i> 2500,00</i></h2>
                            </a>
                            <div class="flex flex-wrap w-3/4 gap-2">
                                <span class="text-zinc-600">Franquito me pagó el arreglo....</span>
                            </div>
                        </div>

                    </div>
                    <!--
                    <div class="hidden sm:flex flex-col w-[20%] items-end">
                        <div class="flex bg-green-100 w-16 h-16 md:w-12 md:h-12 xl:w-16 xl:h-16 rounded-full items-center">
                            <i class="fa fa-money text-[1.5rem] md:text-[1.4rem] xl:text-[1.5rem] text-green-500 mx-auto"></i>
                        </div>
                        <i class="flex text-green-700 fa fa-arrow-down"></i>
                    </div>
                    -->
                </div>
            </div>

            <!-- last notes -->
            <div class="flex w-11/12 h-64 sm:w-[47.5%] md:w-[47.8%] lg:w-[48.4%] xl:w-[48.7%] 2xl:w-[48.9%] m-2 rounded-2xl bg-slate-400"></div>
        </div>

        <?php include "includes/footer.php"; ?>
    </div>