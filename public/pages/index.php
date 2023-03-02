<?php
session_start();

if ($_POST) {
  $user_name = $_POST['user_name'];
  $user_pass = $_POST['user_pass'];

  include_once "../partials/bd/conn.php";
  include_once "../queries/myQueries.php";

  foreach (MyQueries::authLogin($conn, $user_name, $user_pass) as $row) {
    if ($row) {
        $_SESSION['logged_id']=$row['id'];
        $_SESSION['user-name']=$row['usuario'];
        $_SESSION['user-pass']=$row['clave'];
        $_SESSION['open-note']='false';

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
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->    
    <link href="../output.css" rel="stylesheet">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <!-- alpine cdn -->
        <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
   
</head>
<body x-data="{ 'isNewExtOpen': true }" background="../img/login.webp">
    <?php include_once "new-user.php"; ?>
    <div class="flex items-center content-center w-screen min-h-screen">
        <!-- Content here -->    
        <div class="flex text-sm sm:text-xs sm:w-80 text-center mx-auto h-1/2 bg-neutral-100 rounded-2xl opacity-90">
            <!-- login form -->
            <form action="index.php" method="post" class="p-12 space-y-4 mx-auto">
                <p class="text-xl text-neutral-900">Inicio de sesión</p>
                <div class="">
                    <input type="text" class="bg-slate-100 py-1 px-2 border-2 border-orange-300 rounded-xl" id="usuario" placeholder="Ingresa tu usuario" name="user_name">
                </div>
                <div class="">
                    <input type="password" class="bg-slate-100 py-1 px-2 border-2 border-orange-300 rounded-xl" id="contra" placeholder="Ingresa tu contraseña" name="user_pass">
                </div>
                <div class="flex flex-col space-y-2">
                    <button type="submit" class="bg-blue-600 text-indigo-50 py-2 px-4 border-2 border-blue-700 rounded-xl">Ingresar</button>
                    <button type="button" x-on:click="isNewUserOpen = true" class="bg-green-600 text-indigo-50 py-2 px-4 border-2 border-green-700 rounded-xl">Crear Usuario</button>
                </div>
            </form>  
        </div>    
    </div>  
</body>
</html>