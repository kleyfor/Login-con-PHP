<?php
    if(isset($_GET['nombre']) && isset($_GET['contraseña'])) {
        $conexion = new mysqli("localhost", "root", "", "administrador");
        $nom = $_GET['nombre'];
        $con = $_GET['contraseña'];
        while($datos=mysqli_query($conexion, "SELECT * FROM usuarios WHERE id=1")->fetch_assoc()){
          if($datos["nombre"]==$nom && $datos["contra"]==$con){
              header("location: inicio.php");
            }
            else{
              echo "<script>alert('No se ha iniciado la sesion')</script>";
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
    <title>Inicio</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-image: url(https://cdn.pixabay.com/photo/2018/08/21/23/29/forest-3622519_960_720.jpg);
            background-size: 75%;
        }
        .login{
            background-color: rgb(200, 190, 144);
            width: 396px;
            height: 654px;
            position: relative;
            left: 970px;
        }
        #titulo{
            text-align: center;
            margin-bottom: 100px;
            padding-top: 50px;
        }
        form{
            padding-left: 100px;
        }
        input{
            width: 200px;
            height: 25px;
            border-radius: 50px;
            margin-bottom: 50px;
        }
        label{
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <div class="login">
        <h1 id="titulo">Bienvenido</h1>
        <form method="get">
            <label for="nombre">Nombre</label>
            <br>
            <input name="nombre" id="nombre" type="text" placeholder="nombre">
            <br>
            <label for="contraseña">Contraseña</label>
            <br>
            <input name="contraseña" type="password" placeholder="contraseña">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>