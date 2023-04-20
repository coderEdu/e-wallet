<div class="header-rounded bg-yellow-200 w-full h-fit">
    <div class="flex flex-row flex-wrap w-full xl:w-[82%] justify-between items-center mx-auto">
        <div class="flex content-between items-center">
    
            <!-- logo -->
            <a href="home.php">
                <div class="flex w-14 h-14 md:w-16 md:h-16 py-2 ml-6">
                    <img src="../img/atm-money-icon.png" alt="atm-money-icon.png">
                </div>
            </a>
    
            <!-- logged name -->
            <div class="flex font-sans text-base lg:text-lg">
                <span class="flex">Hola, <span class="font-sans ml-2 font-medium text-green-800"> <?php echo strtoupper($_SESSION['user-name']); ?>!</span></span>
                <div class="flex"><?php include "../partials/header-nav/menu/sessions.php" ?></div>
            </div>
        </div>
    
        <!-- navbar mainmenu -->
        <nav class="hidden xl:flex">
            <ul class="flex flex-row w-fit h-full text-md p-6 -space-x-4 items-center">
                <?php include "../partials/header-nav/menu/accounts.php" ?>
                <?php include "../partials/header-nav/menu/actions.php" ?>
                <?php include "../partials/header-nav/menu/notes.php" ?>
            </ul>
        </nav>
    
        <!-- burger icon -->
        <div class="flex px-6 xl:hidden">
            <img src="../img/icons8-menú-24.png" alt="">
        </div>
    </div>
</div>