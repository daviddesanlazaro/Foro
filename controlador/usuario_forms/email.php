<?php 
                
    class Email{
        
        /** 
        * function
        * email_registrar($array_formdata) 
        * Envía email de confirmación de registro y devuelve mensaje de confirmación de
         * registro y si el email fue enviado o no.
        * 
        * email.php
        *
        * @param Array $array_formdata
        * @return String
        */
        public static function email_registrar(array $array_formdata){
            // Configurar SMPT
            $email = $array_formdata["email"];
            $asunto = "Confirmación de registro";
            $mensaje = "Ha sido registrado en nuestro foro. Bienvenido";
            $headers = "From: sender\'s email";
            
            // Envía email.
            $resultado = mail($email, $asunto, $mensaje, $headers);
            //Comprueba si el email ha sido enviado y devuelte el mensaje correspondiente.
            if($resultado){
                return $resultado = '<p class="ok-form">El registro ha sido exitoso. Recibirá un mail de confirmación a '.$email.'</p>';
            }else{
                return $resultado = '<p class="ok-form">Su cuenta ha sido registrada pero ha habido un error al enviar el email a '.$email.'</b></p>';
            }
            
        }
    }