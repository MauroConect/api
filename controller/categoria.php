<?php
require_once ("../config/conexion.php");
require_once ("../models/Categoria.php");
//instanciamos la clase
$categoria= new Categoria();

switch ($_GET["op"]){

    case "GetAll":
        $datos=$categoria->get_categorias();
        //colocar el resultante de datos en un json
            echo json_encode("$datos");
    break;
    
    }


?>