<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try {
    include('/var/www/html/PHP/EV3_ASW/TercerOjo/db/connection.php');
    $id = $_GET['id'];
    $tipo = $_GET['tipo'];
    $tabla = ($tipo == 0) ? "cienciaFiccion" : "fantasia";

    $stmt = $conn->prepare("DELETE FROM `$tabla` WHERE id = ?");

    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Éxito";
    } else {
        echo "Falló";
    }

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
