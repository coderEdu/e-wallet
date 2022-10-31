<?php include "includes/partials/header.php" ?>
<div class="container flex flex-col w-full h-screen mx-auto bg-default">
    <?php include "includes/partials/header-nav.php"; ?>        
    
    <!-- account list -->
    <?php include "includes/partials/home/account-list.php" ?>
    
    <div class="flex flex-col sm:flex-row sm:flex-wrap w-full mt-4 gap-6 sm:gap-0 content-between items-center sm:items-start rounded-2xl">
        <!-- last movs list -->
        <?php include "includes/partials/home/last-movs-list.php" ?>


        <!-- list of last notes -->
        <?php include "includes/partials/home/last-note-list.php" ?>            
    </div>

    <!-- footer -->
    <?php include "includes/partials/footer.php"; ?>
</div>