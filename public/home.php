<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="output.css" rel="stylesheet">
    <title>Bienvenido</title>
</head>
<body>
    <div class="container flex flex-col w-full h-screen bg-yellow-50 mx-auto">
        <nav class="flex flex-row bg-yellow-400 w-full h-24 justify-between">
            <!-- logo -->
            <div class="w-24 h-full mx-6 my-2">
                <img src="img/atm-money-icon.png" alt="atm-money-icon.png">
            </div>
            <!-- mainmenu navbar -->
            <div class="">
                <ul class="flex flex-row w-fit h-full text-md p-6 space-x-4 items-center">
                    <a href="#"><li>Extraer</li></a>
                    <a href="#"><li>Depositar</li></a>
                    <a href="#"><li>Registro</li></a>
                    <a href="#"><li>Cerrar sesión</li></a>
                </ul>
            </div>
        </nav>
        <h1 class="flex flex-row text-2xl w-fit mx-auto content-center p-10 text-red-800">Bienvenido a tu Billetera Electrónica.</h1>
    </div>
</body>
</html>