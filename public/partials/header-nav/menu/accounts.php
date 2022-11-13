<div class="relative" x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false">
    <button        
        class="flex items-center justify-center px-4 py-2 text-sm border rounded-full dark:border-neutral-700 focus:outline-none border-primary-500 hover:bg-amber-500"
        id="headlessui-popover-button-18"
        type="button"
        aria-expanded="true"
        aria-controls="headlessui-popover-panel-19"
    >
        <span>Cuentas</span><i class="ml-2 fa fa-angle-down"></i>
    </button>
    <div  x-show="open" x-transition class="absolute left-0 z-10 w-full max-w-sm px-0 mt-3 sm:px-0" id="headlessui-popover-panel-21">
        <div class="overflow-hidden bg-yellow-400 border shadow-xl rounded-2xl dark:bg-neutral-900 border-neutral-200 dark:border-neutral-700">
            <div class="relative w-full flex flex-col px-0 py-3 space-y-8">
                <ul class="space-y-0 text-sm">
                    <li><a href="#" class="block pl-3 hover:bg-amber-500 py-2">Crear</a></li>
                    <li><a href="#" class="block pl-3 hover:bg-amber-500 py-2">Editar</a></li>
                    <li><a href="#" class="block pl-3 hover:bg-amber-500 py-2">Eliminar</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>