<?php
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $matricula = $_POST['matricula'];

    echo"<h1>Practica de formulario</h1><BR>";
    echo"Tu nombre es: ".$nombre."<BR>";
    echo"Tu apellido es: ".$apellido."<BR>";
    echo"Tu correo es: ".$correo."<BR>";
    echo"Tu matricula es: ".$matricula."<BR><BR>";
    echo"<BR>";


    $servename = "localhost";
    $database = "formulario";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servename, $username, $password, $database);

    if(!$conn){
        die("Fallo en la conexion: ".mysqli_connect_error());
    }

    echo"<BR>";
    echo"Conexion Correcta <BR>";


    $sql = "INSERT INTO registro (nombre, apellido, correo, matricula)
    VALUES ('$nombre', '$apellido', '$correo', '$matricula')";

    if(mysqli_query($conn, $sql)){
        echo"<BR>";
        echo"Registro guardado";
    } else{
        echo "Error".$sql."<BR>".mysqli_error($conn);
    }

    mysqli_close($conn);



?>