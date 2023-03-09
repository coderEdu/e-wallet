<?php
$_SESSION['activate_menu_transfer']=false;
$_SESSION['activate_menus']=false;
$_SESSION['activate_menu_reg']=false;
$_SESSION['activate_menus_notes']=false;
$user = $_SESSION['logged_id'];
$accCounter=0;
$movCounter=0;
$noteCounter=0;

foreach(MyQueries::getAccountsByLogged($conn, $user) as $fila) { $accCounter++; }
foreach(MyQueries::getLastMovs($conn, $user) as $fila) { $movCounter++; }
foreach(MyQueries::getNotesByIdLogged($conn, $user) as $fila) { $noteCounter++; }

if ($accCounter > 1) {
    $_SESSION['activate_menu_transfer']=true;
    $_SESSION['activate_menus']=true;
} elseif ($accCounter > 0) {
    $_SESSION['activate_menus']=true;
} else {
    $_SESSION['activate_menu_transfer']=false;
    $_SESSION['activate_menus']=false;
}

($noteCounter > 0) ? $_SESSION['activate_menus_notes']=true : $_SESSION['activate_menus_notes']=false;
($_SESSION['activate_menus'] && $movCounter > 0) ? $_SESSION['activate_menu_reg']=true : $_SESSION['activate_menu_reg']=false;
?>