<div class="relative" x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false">
    <button        
        class="flex items-center justify-center px-4 py-2 text-sm border rounded-full focus:outline-none border-primary-500 hover:text-slate-800"
        id="headlessui-popover-button-18"
        type="button"
        aria-expanded="true"
        aria-controls="headlessui-popover-panel-19"
    >
        <span></span><i class="fa fa-angle-down"></i>
    </button>
    <div  x-show="open" x-transition class="absolute left-0 z-10 w-[150px] max-w-sm pt-3 px-0 mt-0 sm:px-0" id="headlessui-popover-panel-21">
        <div class="overflow-hidden bg-white border shadow-xl rounded-lg border-neutral-200">
            <div class="relative flex flex-col px-0 py-3 space-y-8">
                <ul class="space-y-0 text-sm text-slate-900">
                    <li><a href="close-session.php" class="block pl-4 hover:bg-zinc-100 py-2">Cerrar sesión</a></li>
                    <li><a href="#" x-on:click="isChangePasswordOpen = true, open = false" class="block pl-4 hover:bg-zinc-100 py-2">Cambiar clave</a></li>
                    <li><a href="#" class="block pl-4 hover:bg-zinc-100 py-2">Editar perfil</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>