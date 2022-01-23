<?php

if(isset($_POST["editar_comentario"])){
    if (!($_POST["text"] == "")) { // Si el comentario está completo se modifica
        $comentario = new comentarios_modelo($_POST["id"], $_POST["text"], 0, 0);
        $controlador = new comentarios_controlador();
        $respuesta = $controlador->editar($comentario);

        if (gettype($respuesta) == "string") {
            echo "Se ha producido un error";

//         Si no ocurre ningun error...
        } else {
            echo "Se ha editado el comentario";
        }
    }
}