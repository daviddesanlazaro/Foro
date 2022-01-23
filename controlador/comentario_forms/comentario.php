<?php

if(isset($_POST["nuevo_comentario"])){

    if (!($_POST["text"] == "")) { // Si el comentario está completo se inserta
        $comentario = new comentarios_modelo(0, $_POST["text"], $_SESSION["ID"], $_POST["tema_id"]);
        $controlador = new comentarios_controlador();
        $respuesta = $controlador->registrar($comentario);

        if(gettype($respuesta) == "string"){
            echo "Se ha producido un error";

    //         Si no ocurre ningun error...
        }else {
            echo "Se ha registrado el comentario";
        }
    }
}