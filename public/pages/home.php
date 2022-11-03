<?php include "../partials/header/header.php" ?>
<div class="container flex flex-col w-full h-screen mx-auto bg-default">
    <?php include "../partials/header/header-nav.php"; ?>        
    
    <!-- account list -->
    <?php include "../partials/home/account-list.php" ?>
    
    <div class="flex flex-col sm:flex-row sm:flex-wrap w-full mt-4 gap-6 sm:gap-0 justify-between items-center sm:items-start rounded-2xl">
        <!-- last movs list -->
        <?php include "../partials/home/last-movs-list.php" ?>


        <!-- list of last notes -->
        <?php include "../partials/home/last-note-list.php" ?>            
    </div>

</div>

<!-- footer -->
<?php include "../partials/footer/footer.php"; ?>