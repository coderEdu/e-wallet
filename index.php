<?php
session_start();

if ($_POST) {
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $_SESSION['show_searchBar']=true;
  $_SESSION['go_home']=true;

  include_once "conn.php";
  $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$user' AND clave = '$pass'");
  
  if (mysqli_num_rows($query)===1) {
    $row = mysqli_fetch_row($query);
    $_SESSION['logged_id']=$row[0];
    $_SESSION['user-name']=$row[1];
    $_SESSION['user-pass']=$row[2];
    header("Location: home.php");
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
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body background="img/login.png">
    <div class="container flex flex-col content-center items-center w-screen h-screen">
        <!-- Content here -->    
        <div class="text-center">
            <!-- login form -->
            <form action="index.php" method="post">
                <div class="form-group">
                    <input type="text" class="flex-none hover:flex-1" id="usuario" placeholder="Ingresa tu usuario" name="user">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control mt-2" id="contra" placeholder="Ingresa tu contraseña" name="pass">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Ingresar</button>
            </form>
        </div>    
    </div>    
</body>
</html>