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

        header("Location: home.php");
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="../output.css" rel="stylesheet">
</head>
<body background="../img/login.webp">
    <div class="flex items-center content-center w-screen min-h-screen">
        <!-- Content here -->    
        <div class="flex text-sm sm:text-xs text-center mx-auto h-1/2 bg-neutral-100 rounded-2xl opacity-80">
            <!-- login form -->
            <form action="index.php" method="post" class="p-12 space-y-4">
                <div class="">
                    <input type="text" class="bg-slate-100 py-1 px-2 border-2 border-orange-300 rounded-xl" id="usuario" placeholder="Ingresa tu usuario" name="user_name">
                </div>
                <div class="">
                    <input type="password" class="bg-slate-100 py-1 px-2 border-2 border-orange-300 rounded-xl" id="contra" placeholder="Ingresa tu contraseña" name="user_pass">
                </div>
                <button type="submit" class="bg-blue-600 text-indigo-50 py-2 px-4 border-2 border-blue-700 rounded-xl">Ingresar</button>
            </form>
        </div>    
    </div>    
</body>
</html>