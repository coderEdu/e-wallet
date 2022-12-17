<div class="hidden space-x-4 lg:flex">


    
    <div x-data="{dropdown: 'close'}">
        <button
            @click="dropdown = 'open'"
            class="flex items-center justify-center px-4 py-1 bg-cyan-700 text-xs text-white border rounded-full dark:border-neutral-700 focus:outline-none border-primary-500"
            id="headlessui-popover-button-18"
            type="button"
            aria-expanded="true"
            aria-controls="headlessui-popover-panel-19"
        >
            <span>Aplicar filtros</span><i class="ml-2 las la-angle-down"></i>
        </button>
        <div x-show="dropdown === 'open'" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-30" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                <form
                    x-on:click.away="dropdown = 'close'"
                    class="relative inline-block overflow-hidden text-left align-bottom transition-all transform bg-white shadow-xl rounded-3xl sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full"
                    data-request="FilterFacilities::onSubmit"
                >
                    <div class="relative flex-shrink-0 px-6 py-4 text-center border-b border-neutral-200 dark:border-neutral-800">
                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="headlessui-dialog-title-132">Filtros de búsqueda</h3>
                        <span class="absolute left-3 top-3">
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
                            <div class="py-7">
                                <h3 class="text-xl font-medium">Destacados</h3>
                                <div class="relative mt-6">
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
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-2"
                                                    name="facilities[]"
                                                    value="2"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-2" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Cochera semicubierta</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Lugar donde se guarda todo tipo de vehículos. En este caso es semicubierta, lo que significa que posee techo y, en ocasiones, uno o ambos laterales.
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-3"
                                                    name="facilities[]"
                                                    value="3"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-3" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Wifi</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Tecnología de red inalámbrica a través de la cual los dispositivos, como computadoras (portátiles y de escritorio), dispositivos móviles (teléfonos inteligentes y accesorios) y otros
                                                        equipos (impresoras y ⁪videocámaras), pueden interactuar con Internet.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-4"
                                                    name="facilities[]"
                                                    value="4"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-4" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Ambiente climatizado (frío/calor)</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        La climatización consiste en crear unas condiciones de temperatura adecuadas para la comodidad dentro de los espacios habitados.
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-34"
                                                    name="facilities[]"
                                                    value="34"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-34" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Ventilador de techo</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Ventilador de techo</p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-5"
                                                    name="facilities[]"
                                                    value="5"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-5" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Pileta o piscina</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Construcción o recipiente de grandes dimensiones para bañarse o nadar.</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-6"
                                                    name="facilities[]"
                                                    value="6"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-6" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Pileta o piscina climatizada</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Construcción o recipiente de grandes dimensiones para bañarse o nadar. En este caso está diseñada y equipada, con las instalaciones necesarias, para disfrutarla varios meses o incluso
                                                        todo el año, aunque el clima no sea el adecuado para el baño o para nadar.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-7"
                                                    name="facilities[]"
                                                    value="7"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-7" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Accesibilidad y Acondicionamiento</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Adaptaciones específicas para personas con diversidad funcional.</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-8"
                                                    name="facilities[]"
                                                    value="8"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-8" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Mascotas</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Se admiten mascotas con previa autorización.</p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-9"
                                                    name="facilities[]"
                                                    value="9"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-9" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Desayuno</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Desayunos a la carta o propuestos (continental, americano, buffet) según ofrezca el alojamiento.</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-10"
                                                    name="facilities[]"
                                                    value="10"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-10" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Asador o parrilla</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Estructura para asar en el alojamiento.</p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-11"
                                                    name="facilities[]"
                                                    value="11"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-11" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Ropa blanca</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Se refiere a la ropa (o productos téxtiles) tales como: sábanas, toallas, mantelería, etc.</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-12"
                                                    name="facilities[]"
                                                    value="12"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-12" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Smart TV</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Un Smart TV o televisor inteligente sirve para conectarse a internet y disfrutar de servicios normalmente no disponibles en televisores normales. Por ejemplo, navegar por internet, ver
                                                        series en Netflix, YouTube, etc
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-13"
                                                    name="facilities[]"
                                                    value="13"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-13" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">TV (No Smart)</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Televisor, ​tele​ o TV es un aparato electrónico destinado a la recepción y reproducción de señales de televisión. Conexión por cable o Direct TV.
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-14"
                                                    name="facilities[]"
                                                    value="14"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-14" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Casino</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Establecimiento en el que se practican juegos de azar apostando dinero y donde en ocasiones se ofrecen espectáculos, bailes u otras diversiones.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-15"
                                                    name="facilities[]"
                                                    value="15"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-15" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Spa</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Un spa es un establecimiento que brinda servicios vinculados a la relajación y el restablecimiento del bienestar.
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-7">
                                <h3 class="text-xl font-medium">Generales</h3>
                                <div class="relative mt-6">
                                    <div class="grid grid-cols-2 gap-8">
                                        <div class="flex flex-col space-y-5">
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
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-26"
                                                    name="facilities[]"
                                                    value="26"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-26" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Caja de seguridad</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Caja o compartimento de pequeño tamaño situado en un lugar seguro, generalmente en un área blindada, para que guarde en él dinero, objetos valiosos, documentos o valores.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-28"
                                                    name="facilities[]"
                                                    value="28"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-28" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Campo de Golf</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Campo o cancha de hierba natural al aire libre para practicar Golf.</p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-29"
                                                    name="facilities[]"
                                                    value="29"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-29" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Canchas de tenis o pádel</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Superficies de césped artificial, cemento o tierra para practicar dicho deporte.</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-33"
                                                    name="facilities[]"
                                                    value="33"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-33" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Centro de convenciones/eventos</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Es un lugar construido con el propósito de juntar asambleas, conferencias, seminarios o agrupaciones de diferentes caracteres, sea comercial, empresarial, científico o religioso, entre
                                                        otros.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-16"
                                                    name="facilities[]"
                                                    value="16"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-16" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Cocina equipada</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Incluye todos los elementos necesarios para ser completamente funcionales sin necesidad de incorporar ningún otro. Vajilla, utensilios y electrodomésticos.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-22"
                                                    name="facilities[]"
                                                    value="22"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-22" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Frigobar</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        El frigobar es un electrodoméstico muy similar a un refrigerador común, pero su tamaño es más pequeño. Se utiliza para enfriar bebidas y conservar alimentos más ligeros en la
                                                        habitación del hospedaje.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-24"
                                                    name="facilities[]"
                                                    value="24"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-24" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Gimnasio</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Espacio dotado de las instalaciones y los aparatos adecuados para hacer gimnasia y practicar ciertos deportes.</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-25"
                                                    name="facilities[]"
                                                    value="25"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-25" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Hidromasaje/jacuzzi</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        Las bañeras de hidromasaje o jacuzzis son, como su nombre indica, grandes bañeras climatizadas en las que, gracias a la acción de chorros de agua a presión y boquillas por las que se
                                                        expulsa aire comprimido se consigue recrear la misma acción que produciría un masaje corporal con efecto drenante.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-30"
                                                    name="facilities[]"
                                                    value="30"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-30" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Juegos para niños</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Espacio de juegos y/o de esparcimiento para niños.</p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-20"
                                                    name="facilities[]"
                                                    value="20"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-20" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Lavandería</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        El servicio de lavandería tiene bajo su responsabilidad tanto el lavado y planchado de la ropa de las habitaciones y mantelería del alojamiento.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-19"
                                                    name="facilities[]"
                                                    value="19"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-19" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Lavarropas o lavadora</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Electrodoméstico para lavar la ropa.</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-27"
                                                    name="facilities[]"
                                                    value="27"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-27" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Monitoreo de seguridad</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">
                                                        El monitoreo de cámaras de seguridad se realiza desde la central de monitoreo y su objetivo consiste en decodificar las señales de alarmas instaladas en el domicilio y accionar en
                                                        consecuencia.
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-17"
                                                    name="facilities[]"
                                                    value="17"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-17" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Plancha</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Pequeño electrodoméstico para planchar la ropa.</p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-23"
                                                    name="facilities[]"
                                                    value="23"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-23" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Resto/Bar</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Establecimiento en el que hay servicio de bar y de restaurante.</p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-32"
                                                    name="facilities[]"
                                                    value="32"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-32" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Sala de reuniones</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Es un espacio donde se toman la mayoría de decisiones o se cierran grandes acuerdos.</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-5">
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-31"
                                                    name="facilities[]"
                                                    value="31"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-31" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Salon de juegos</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Espacio con elementos para la diversión y el entretenimiento de los huéspedes (pool, metegol, etc)</p>
                                                </label>
                                            </div>
                                            <div class="flex text-sm sm:text-base">
                                                <input
                                                    id="f-18"
                                                    name="facilities[]"
                                                    value="18"
                                                    type="checkbox"
                                                    class="w-6 h-6 bg-white rounded focus:ring-action-primary text-primary-500 border-primary border-neutral-500 dark:bg-neutral-700 dark:checked:bg-primary-500 focus:ring-primary-500"
                                                />
                                                <label for="f-18" class="ml-3.5 flex flex-col flex-1 justify-center">
                                                    <span class="text-neutral-900 dark:text-neutral-100">Secador de pelo</span>
                                                    <p class="mt-1 text-sm font-light text-neutral-500 dark:text-neutral-400">Pequeño electrodoméstico para secar el pelo o cabello.</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-5 bg-neutral-50 dark:bg-neutral-900 dark:border-t dark:border-neutral-800">
                        <button
                            type="submit"
                            data-request="FilterFacilities::onRemove"
                            data-request-data="{filters: ['facilities'], redirect: true}"
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
    </div>
    <!--
    <button data-request="SearchResults::onRemove" data-request-data="{filters: 'all'}"><i class="las la-redo-alt"></i> Refrescar</button>
-->
</div>
