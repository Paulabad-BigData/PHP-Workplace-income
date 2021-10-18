<?php

// Para iniciar sesión

session_start();

$mensaje = "";

if (isset($_POST['btnAccion'])) 
{
    switch($_POST['btnAccion'])
    {
        case 'Buscar':
            $code = $_POST['codigo'];
            if(is_string($code))
            {
                
            }
            break;
    }
}

