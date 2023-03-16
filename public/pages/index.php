<?php
session_start();
include_once "../partials/bd/conn.php";
include_once "../queries/myQueries.php";
include_once "nUser-validate.php";

if (isset($_POST['user_name']) && isset($_POST['user_pass'])) {
  $user_name = $_POST['user_name'];
  $user_pass = $_POST['user_pass'];


  foreach (MyQueries::authLogin($conn, $user_name, $user_pass) as $row) {
    if ($row) {
        $_SESSION['logged_id']=$row['id'];
        $_SESSION['user-name']=$row['usuario'];
        $_SESSION['user-pass']=$row['clave'];
        $_SESSION['open-note']='false';
        $_SESSION['wallets']='true';

        header("Location: home.php");
    }
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="../css/myStyles.css" rel="stylesheet">
    <link href="../output.css" rel="stylesheet">

    <!-- FontAwesome Kit -->
    <script src="https://kit.fontawesome.com/cf3e3a7ec6.js" crossorigin="anonymous"></script>

    <!-- alpine cdn -->
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
   
</head>
<body x-data="{ 'isNewUserOpen': false }" background="../img/login.webp">
    <?php include_once "new-user.php"; ?>
    <div class="flex items-center content-center w-screen min-h-screen">
        <!-- Content here -->    
        <div class="flex text-sm sm:text-xs w-[80%] sm:w-80 text-center mx-auto h-1/2 bg-white rounded-2xl opacity-100">
            <!-- login form -->            
            <form action="index.php" method="post" class="p-8 space-y-4 mx-auto">
                <p class="flex text-xl justify-center py-2 mb-3 rounded-xl text-neutral-900 bg-zinc-50">Inicio de sesión</p>
                <input type="text" class="bg-slate-100 py-2 px-2 border-2 sm:text-sm text-center border-orange-300 rounded-xl w-full" id="usuario" placeholder="Ingresa tu usuario" name="user_name">
                <input type="password" class="bg-slate-100 py-1 px-2 border-2 sm:text-base text-center border-orange-300 rounded-xl w-full" id="contra" placeholder="Ingresa tu contraseña" name="user_pass">
                
                <div class="flex flex-col pt-3 space-y-2">
                    <button type="submit" class="bg-blue-600 text-indigo-50 py-2 px-4 border-2 border-blue-700 rounded-xl">Ingresar</button>
                    <button type="button" x-on:click="isNewUserOpen = true" class="bg-green-600 text-indigo-50 py-2 px-4 border-2 border-green-700 rounded-xl">Nuevo Usuario</button>
                </div>
                <div class="flex w-full justify-end font-sans font-normal text-sm text-blue-700">
                    <a href="#">Olvidé mi contraseña</a>    
                </div>
            </form>  
        </div>    
    </div>  
</body>
</html>