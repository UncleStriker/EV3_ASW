<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try{
    include('/var/www/html/PHP/EV3_ASW/TercerOjo/db/connection.php');

    $tipo = $_POST['tipo'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $fecha_publicacion = $_POST['fecha_publicacion'];

    if ($tipo == 0) {
        $sql_insert = "INSERT INTO cienciaFiccion (titulo, autor, editorial, fecha_publicacion) VALUES ('$titulo', '$autor', '$editorial', '$fecha_publicacion')";
    } else{
        $sql_insert = "INSERT INTO fantasia (titulo, autor, editorial, fecha_publicacion) VALUES ('$titulo', '$autor', '$editorial', '$fecha_publicacion')";
    }
    // if ($conn->query($sql_insert) === TRUE) {
    //     echo '<p class="success">Libro agregado exitosamente.</p>';
    // } else {
    //     echo '<p class="error">Error al agregar el libro: ' . $conn->error . '</p>';
    // }


}catch(Exception $e){
    echo ($e->getMessage());
}

?>