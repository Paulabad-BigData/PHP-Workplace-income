<?php

$mensaje = "";

if(isset($_POST['button'])) {

    $code = $_POST['codigo'];

    switch($_POST['button']){       
        case 'ingress':
        
            $con = new methods;
            $prueba = $con->ingress($code);
            
            if($prueba){
                $mensaje = "Acceso Autorizado";
                return $mensaje;
            }else{
                $mensaje = "Acceso Denegado";
                return $mensaje;
            }
            

        case 'egress':
           
            $con = new methods;
            $prueba = $con->egress($code);

            if($prueba){
                $mensaje = "Empleado Salio";
                return $mensaje;
            }else{
                $mensaje = "No se encontro al Empleado";
                return $mensaje;
            }


        break;
        case 'delete':
            $id = $_POST['id'];

            $con = new methods;
            $prueba = $con->delete($id);
        break;
            
    }

}