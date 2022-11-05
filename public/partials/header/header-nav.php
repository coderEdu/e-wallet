<div class="flex flex-row header-rounded bg-yellow-400 w-full h-fit justify-between items-center">
    <div class="flex content-between items-center">

        <!-- logo -->
        <a href="home.php">
            <div class="flex w-14 h-14 md:w-16 md:h-16 py-2 ml-6">
                <img src="../img/atm-money-icon.png" alt="atm-money-icon.png">
            </div>
        </a>

        <!-- logged name -->
        <div class="font-sans text-lg md:text-xl">
            <span>Hola, Educoder!</span>
        </div>
    </div>

    <!-- mainmenu navbar -->
    <nav class="hidden md:flex">
        <ul class="flex flex-row w-fit h-full text-md p-6 space-x-4 items-center">

            <?php include "../partials/header-nav/menu/actions.php" ?>

            <!-- 
            <li x-data="{ open: false }">
                <a href="#" @click="open = ! open">Acciones
                    <ul>
                        <div x-show="open" @click.outside="open = false" class="absolute ">
                            <li><a href="#">Depositar</a></li>
                            <li><a href="#">Extraer</a></li>
                            <li><a href="#">Transferir</a></li>
                        </div>
                    </ul>
                </a>
            </li>
            -->

            <?php include "../partials/header-nav/menu/notes.php" ?>

            <!--
            <li>
                <a href="#">Notas
                    <ul class="hidden">
                        <a href="#"><li>Crear</li></a>
                        <a href="#"><li>Editar</li></a>
                        <a href="#"><li>Eliminar</li></a>
                        <a href="#"><li>Ver notas</li></a>
                    </ul>
                </a>
            </li>
            -->
            <li>
                <a href="log.php" class="flex items-center justify-center px-4 py-2 text-sm border rounded-full dark:border-neutral-700 focus:outline-none border-primary-500">Ver registro</a>
            </li>
        </ul>
    </nav>

    <!-- 
        <div x-data="{ open: false }">
            <button @click="open = ! open">Toggle</button>
        
            <div x-show="open" @click.outside="open = false">Contents...</div>
        </div>
    -->

    <!-- burger icon -->
    <div class="flex px-6 md:hidden">
        <img src="../img/icons8-menú-24.png" alt="">
    </div>
</div>