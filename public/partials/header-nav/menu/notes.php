<div class="relative" x-data="{dropdown: 'close'}">
    <button
        @click="dropdown = 'open'"
        class="flex items-center justify-center px-4 py-2 text-sm border rounded-full dark:border-neutral-700 focus:outline-none border-primary-500"
        id="headlessui-popover-button-18"
        type="button"
        aria-expanded="true"
        aria-controls="headlessui-popover-panel-19"
    >
        <span>Notas</span><i class="ml-2 las la-angle-down"></i>
    </button>
    <div x-show="dropdown === 'open'" x-on:click.away="dropdown = 'close'" class="absolute left-0 z-10 w-screen max-w-sm px-4 mt-3 sm:px-0" id="headlessui-popover-panel-21" style="display: none;">
        <form data-request="FilterPrice::onSubmit" class="overflow-hidden bg-white border shadow-xl rounded-2xl dark:bg-neutral-900 border-neutral-200 dark:border-neutral-700">
            <div class="relative flex flex-col px-5 py-6 space-y-8">
                <div class="flex justify-between space-x-5">
                    <div>
                        <label for="minPrice" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300">Mínimo</label>
                        <div class="relative mt-1 rounded-md">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"><span class="text-neutral-500 sm:text-sm">$</span></div>
                            <input type="number" name="price[min]" id="minPrice" class="block w-full pr-3 rounded-full focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm border-neutral-200 text-neutral-900" value="0" />
                        </div>
                    </div>
                    <div>
                        <label for="maxPrice" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300">Máximo</label>
                        <div class="relative mt-1 rounded-md">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"><span class="text-neutral-500 sm:text-sm">$</span></div>
                            <input type="number" name="price[max]" id="maxPrice" class="block w-full pr-3 rounded-full focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm border-neutral-200 text-neutral-900" value="100000" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between p-5 bg-neutral-50 dark:bg-neutral-900 dark:border-t dark:border-neutral-800">
                <button
                    type="submit"
                    data-request="FilterPrice::onRemove"
                    data-request-data="{filters: ['price'], redirect: true}"
                    class="relative inline-flex items-center justify-center h-auto px-4 py-2 text-sm font-medium transition-colors border rounded-full nc-Button sm:text-base sm:px-5 ttnc-ButtonThird text-neutral-700 border-neutral-200 dark:text-neutral-200 dark:border-neutral-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 dark:focus:ring-offset-0"
                >
                    Quitar
                </button>
                <button
                    type="submit"
                    class="relative inline-flex items-center justify-center h-auto px-4 py-2 text-sm font-medium transition-colors rounded-full nc-Button sm:text-base sm:px-5 ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-600 hover:bg-primary-700 text-neutral-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 dark:focus:ring-offset-0"
                >
                    Aplicar
                </button>
            </div>
        </form>
    </div>
</div>