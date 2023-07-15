<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try{
    include('/var/www/html/PHP/EV3_ASW/TercerOjo/db/connection.php');
    $tipo = $_GET['tipo'];ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if($tipo == 0){
        $tabla = "cienciaFiccion";
    }else{
        $tabla = "fantasia";
    }

    $sql = "SELECT * FROM $tabla";

    $resultado = $conn->query($sql);
    if(isset($resultado->num_rows )){
        if ($resultado->num_rows > 0) {
            $resp = [
                "message"=>"Se encontraron ",
                "data" => ( $resultado->fetch_all())
            ];
        }else{
            $resp = [
                "message"=>"No Se encontraron resultados",
                "data" => []
            ];
        }
    }else{
        $resp = [
            "message"=>"No Se encontraron resultados",
            "data" => []
        ];
    }
    
    echo (json_encode($resp));
}catch(Exception $e){
    echo ($e->getMessage());
}

?>