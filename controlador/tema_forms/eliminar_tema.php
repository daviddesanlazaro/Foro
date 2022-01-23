<?php

if(isset($_POST["eliminar_tema"])){
    $controlador = new temas_controlador();
    $respuesta = $controlador->eliminar($_POST["idTema"]);

    if(gettype($respuesta) == "string"){
        echo "Se ha producido un error";

//         Si no ocurre ningun error...
    }else{
        echo "Se ha eliminado el comentario";
    }
}