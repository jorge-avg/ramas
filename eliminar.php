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
    echo"Conexion Correcta <BR>";
    echo"<BR>";

    $eliminar = $_POST['eliminar'];
    mysqli_query($conn, "DELETE FROM registro WHERE matricula=$eliminar")
        or die ("Error al eliminar datos");
    mysqli_close($conn);
    echo"Eliminado correctamente";

?>