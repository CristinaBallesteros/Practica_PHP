<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
<div class="group">

    <form method="POST" action="">
    <h2><em> Formulario de Registro </em></h2>
<label for="nombre">Nombre<span><em>(requerido)</em></span></label>
<input type="text" id="nombre" name="nombre" class= "form-input" required/>

    <label for="apellido">Apellido<span><em>(requerido)</em></span>:</label>
    <input type="text" id="apellido" name="apellido" class= "form-input" required/>

    <label for="email">Email<span><em>(requerido)</em></span>:</label>
    <input type="email" id="email" name="email" class= "form-input" />
       <input class= "form-btn" name="submit" type="submit" value="Subscribirse">
<br><br>
<?php

      if($_POST) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cursosql";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error) {
          die("Se ha producido un error de conexión:" . $connection->connect_error);
        }

        $sql = "INSERT INTO usuario(NOMBRE, APELLIDO, EMAIL)
        VALUES ('$nombre', '$apellido', '$email')";

        if ($conn->query($sql) === TRUE ) {
          echo "Se ha creado el registro satisfactoriamente.";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
      }
  ?>

  </form>

  </div>
</body>
</html>