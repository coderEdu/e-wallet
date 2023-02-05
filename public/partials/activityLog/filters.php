<div class="space-x-4 lg:flex">    
    <div x-data="{dropdown: 'close'}">
        <button
            @click="dropdown = 'open'"
            class="flex items-center justify-center px-4 py-1 bg-white text-base text-green-900 border rounded-2xl dark:border-neutral-700 shadow-md hover:shadow-lg hover:transition-all focus:outline-none border-primary-500"
            id="headlessui-popover-button-18"
            type="button"
            aria-expanded="true"
            aria-controls="headlessui-popover-panel-19"
        >
            <span>Filtros</span><i class="ml-2 las la-angle-down"></i>
        </button>
        <div x-show="dropdown === 'open'" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity overlay" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

                <!-- begin form -->
                <form       
                    x-on:click.away="dropdown = 'close'"
                    class="relative inline-block overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-3xl sm:my-8 sm:align-middle sm:max-w-xl sm:w-fit"
                    action=""
                >
                    <div class="relative flex-shrink-0 px-6 py-4 text-center border-b border-neutral-200 dark:border-neutral-800">
                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="headlessui-dialog-title-132">Filtros de búsqueda</h3>
                        <span class="absolute left-[848px] top-3">
                            <button
                                x-on:click="dropdown = 'close'"
                                type="button"
                                class="flex items-center justify-center w-8 h-8 rounded-full text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-700 focus:outline-none"
                                tabindex="0"
                            >
                                <span class="sr-only">Cerrar</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                    <path
                                        fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                        </span>
                    </div>
                    <div class="flex-grow overflow-y-auto">
                        <div class="px-10 divide-y divide-neutral-200 dark:divide-neutral-800">

                            <div class="py-3"> <!-- first -->
                                <h3 class="text-base font-medium">Rango de fechas:</h3>
                                <div class="relative mt-6">
                                    <div class="flex flex-wrap justify-between items-center space-y-4 sm:space-y-0 sm:space-x-4">
        
                                        <?php include("filterByDate.php"); ?>
                             
                                    </div>
                                </div>
                            </div>

                            <div class="py-3"> <!-- second -->
                                <h3 class="text-base font-medium">Tipo:</h3>
                                <div class="relative mt-6">
                                    <div class="flex flex-row gap-8">

                                        <?php include("filterByType.php"); ?>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="py-3"> <!-- third - monto -->
                                <?php include("filterByAmount.php"); ?>
                            </div>

                            <div class="py-3"> <!-- concepto -->
                                <?php include("filterByConcept.php"); ?>
                            </div>

                            <div class="py-3"> <!-- sixth -->
                                <h3 class="text-base font-medium">Cuenta:</h3>
                                <div class="relative mt-6">
                                    <div class="flex flex-row gap-8">

                                        <?php include("filterByAccount.php"); ?>
                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- buttons -->
                    <div class="flex items-center justify-end p-3 space-x-4 bg-neutral-50 dark:bg-neutral-900 dark:border-t dark:border-neutral-800">
                        <button
                            type="submit"
                            class="relative inline-flex items-center justify-center h-auto px-4 py-2 bg-cyan-700 text-xs text-white font-medium transition-colors rounded-full sm:text-base sm:px-5 ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 dark:focus:ring-offset-0"
                        >
                            Aplicar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--
    <button data-request="SearchResults::onRemove" data-request-data="{filters: 'all'}"><i class="las la-redo-alt"></i> Refrescar</button>
-->
</div>