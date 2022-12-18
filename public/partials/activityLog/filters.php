<div class="hidden space-x-4 lg:flex">    
    <div x-data="{dropdown: 'close'}">
        <button
            @click="dropdown = 'open'"
            class="flex items-center justify-center px-4 py-1 bg-white text-base text-blue-800 border rounded-full dark:border-neutral-700 focus:outline-none border-primary-500"
            id="headlessui-popover-button-18"
            type="button"
            aria-expanded="true"
            aria-controls="headlessui-popover-panel-19"
        >
            <span>Ver filtros</span><i class="ml-2 las la-angle-down"></i>
        </button>
        <div x-show="dropdown === 'open'" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-30" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

                <!-- begin form -->
                <form       
                    x-on:click.away="dropdown = 'close'"
                    class="relative inline-block overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-3xl sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full"
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

                            <div class="py-7"> <!-- first -->
                                <h3 class="text-lg font-medium">Entre fechas:</h3>
                                <div class="relative mt-6">
                                    <div class="grid grid-cols-2 gap-8">
                                        <?php include("filterByDate.php"); ?>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-1"
                                                    name="facilities[]"
                                                    value="1"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-1" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Cochera cubierta</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Lugar donde se encierran y guardan todo tipo de vehículos. En este caso totalmente cubierta. Garage.</p>
                                                </label>
                                            </div>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>

                            <div class="py-7"> <!-- second -->
                                <h3 class="text-lg font-medium">Tipo:</h3>
                                <div class="relative mt-6">
                                    <div class="flex flex-row gap-8 mb-5">

                                        <?php include("filterByType.php"); ?>
                                        
                                    </div>
                                    <div class="grid grid-cols-2 gap-8">
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-1"
                                                    name="facilities[]"
                                                    value="1"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-1" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Cochera cubierta</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Lugar donde se encierran y guardan todo tipo de vehículos. En este caso totalmente cubierta. Garage.</p>
                                                </label>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>

                            <div class="py-7"> <!-- third -->
                                <h3 class="text-xl font-medium">Generales</h3>
                                <div class="relative mt-6">
                                    <div class="grid grid-cols-2 gap-8">
                                        <div class="flex flex-col space-y-5">
                                            <!--
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-21"
                                                    name="facilities[]"
                                                    value="21"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-21" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Amenities</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Se refiere a los objetos que el hotel pone a disposición del huésped para su estancia, tales como: útiles de baño como jabones y geles o productos de bienvenida.
                                                    </p>
                                                </label>
                                            </div>
-->
                                        </div>                                        
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
                        <button
                            type="submit"
                            data-request="FilterFacilities::onRemove"
                            data-request-data="{filters: ['facilities'], redirect: true}"
                            class="relative inline-flex items-center justify-center h-auto px-4 py-2 bg-cyan-700 text-xs text-white font-medium transition-colors border rounded-full sm:text-base sm:px-5 ttnc-ButtonThird border-neutral-200 dark:text-neutral-200 dark:border-neutral-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 dark:focus:ring-offset-0"
                        >
                            Quitar
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
