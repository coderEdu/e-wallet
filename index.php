<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body background="img/login.webp" style="height: auto; backdrop-filter: blur(5px);">
    <div class="container-fluid relative pt-5">
        <!-- Content here -->    
        <div class="row" style="height: 300px;"></div>
        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <form action="home.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-light">Usuario</label>
                        <input type="text" class="form-control mt-2" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Ingresa tu usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-light mt-4">Contraseña</label>
                        <input type="password" class="form-control mt-2" id="contra" name="contra" placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Ingresar</button>
                </form>
            </div>
        </div>    
    </div>    
</body>
</html>