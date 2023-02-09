<?php 
session_start();
include_once "../partials/header/header.php";
include_once "../partials/bd/conn.php";
include_once "../classes/functions.php";
include_once "../queries/myQueries.php";
?>

<?php include "../partials/header/header-nav.php"; ?>        
<div class="container flex flex-col w-full mx-auto bg-default">
    
    <!-- account list -->
    <?php include "../partials/home/account-list.php" ?>
    
    <div class="flex flex-col mb-10 sm:flex-row sm:flex-wrap w-full mt-6 lg:mt-6 xl:mt-8 gap-9 sm:gap-0 justify-between items-center sm:items-start rounded-2xl">
        <!-- last movs list -->
        <?php include "../partials/home/last-movs-list/last-movs-list.php" ?>


        <!-- last notes list -->
        <?php include "../partials/home/last-notes-list/last-notes-list.php" ?>            
    </div>
</div>
<!-- footer -->
<?php include "../partials/footer/footer.php"; ?>