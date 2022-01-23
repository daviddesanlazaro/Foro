<?php

if(isset($_POST["editar_tema"])){
    $titulo = $_POST["titulo"];
    $comentario = $_POST["textTema"];

    if (!(($titulo == "") || ($comentario == ""))) { // Si el título y el comentario están completos se modifica el tema
        $tema = new temas_modelo($_POST["idTema"], $titulo, 0, $comentario);
        $controlador = new temas_controlador();
        $respuesta = $controlador->editar($tema);

        if (gettype($respuesta) == "string") {
            echo "Se ha producido un error";

            // Si no ocurre ningun error...
        } else {
            echo "Se ha editado el tema";
        }
    }
}