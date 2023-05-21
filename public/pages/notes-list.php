<?php session_start(); ?>
<?php include "../partials/header/header.php" ?>
<?php include "../partials/header/header-nav.php"; ?>        
<div class="container flex flex-col w-full mx-auto bg-default">    
    <section>

        <div class="w-full p-5 mb-3 mx-auto">
            <h1 class="font-sans font-normal text-2xl text-center text-blue-900">Todas tus notas.</h1>
        </div>
        
        <div class="flex flex-col mb-5 sm:flex-row sm:flex-wrap w-full justify-start items-start rounded-2xl">            
            <?php
            $id = $_SESSION['logged_id'];
            foreach(MyQueries::getNotesByIdLogged($conn, $id) as $fila) { 
            ?>            
                <div class="flex w-11/12 max-h-56 sm:w-[48.05%] md:w-[48.35%] lg:w-[32.1%] xl:w-[23.7%] 2xl:w-[24.1%] m-1.5 py-3 px-4 rounded-xl card-box-shadow card-box-shadow:hover bg-white"> <!-- begin card -->
                    <div class="flex flex-col w-full space-y-1.5">
                        
                        <div class="relative flex justify-between items-start w-full rounded-tr-md">
                            <div class="flex">
                                <p class="font-serif font-semibold text-base text-zinc-800"><?php echo ($fila[('titulo')]); ?></p>
                            </div>
                            <div class="flex justify-end items-center w-14 space-x-1">
                                <a href="">
                                    <div class="flex h-[18px]">
                                        <img src="../img/Actions-document-edit-icon.png" alt="edit-note" srcset="" >
                                    </div>
                                </a>
                                <a href="">
                                    <div class="flex h-5">
                                        <img src="../img/Actions-document-close-icon.png" alt="edit-note" srcset="" >
                                    </div>
                                </a>
                            </div>
                        </div>

                        <p class="w-full def-f-family font-light text-sm py-2 px-2 overflow-y-auto text-slate-700 bg-white border-2 border-slate-100 rounded"><?php echo ($fila['nota']); ?></p>

                        <div class="flex w-full justify-between items-center font-light text-sm font-serif text-neutral-700">
                            <div class="flex w-full">
                                <div>
                                    <span class="">c. <?php echo MyFx::formatDateToAccount($fila['fec_crea']); ?></span>
                                </div>
                            </div>
                            <div class="flex w-full">
                                <div class="flex w-full justify-end items-center">
                                    <span class="">m. <?php echo MyFx::formatDateToAccount($fila['fec_modif']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>  
        </div>
    </section>
</div>
<!-- footer -->
<?php include "../partials/footer/footer.php"; ?>