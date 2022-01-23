<?php

if(isset($_POST["eliminar_comentario"])){
    $controlador = new comentarios_controlador();
    $respuesta = $controlador->eliminar($_POST["id"]);

    if(gettype($respuesta) == "string"){
        echo "Se ha producido un error";

//         Si no ocurre ningun error...
    }else{
        echo "Se ha eliminado el comentario";
    }
}