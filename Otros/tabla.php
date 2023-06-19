<?php
    $servename = "localhost";
    $database = "formulario";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servename, $username, $password, $database);

    if(!$conn){
        die("Fallo en la conexion: ".mysqli_connect_error());
    }

    echo"<BR>";
    /*echo"Conexion Correcta <BR>";*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos2.css">
</head>
<body>
    <table >
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Matricula</td>
        </tr>

        <?php
            $sql="SELECT * FROM registro";
            $resultado=mysqli_query($conn, $sql);

            while($mostrar=mysqli_fetch_array($resultado)){
                ?>

            <tr>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['apellido']?></td>
                <td><?php echo $mostrar['correo']?></td>
                <td><?php echo $mostrar['matricula']?></td>
            </tr>
            <?php
            }
            ?>

      
    </table>
    
</body>
</html>