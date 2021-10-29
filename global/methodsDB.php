<?php


class methods{

    public function ingress($code){
        $con = new connect;
        $conexion = $con->connection();

        $registros = mysqli_query($conexion, "SELECT * FROM empleado WHERE codigo = '$code'")
         or die("Problemas en el select:" . mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registros)) {
            mysqli_query($conexion, "INSERT INTO ingreso (codigo,nombre,documento,dpto)  (SELECT codigo,nombre,documento,dpto FROM empleado)")
                or die("problemas en el select" . mysqli_error($conexion));
            mysqli_close($conexion);

            //echo "Acceso Autorizado";
            return true;
        } else {
            //echo "Acceso Denegado";
            return false;
        }
    }

    public function egress($code){
        $con = new connect;
        $conexion = $con->connection();

        $registros = mysqli_query($conexion,"SELECT * FROM empleado WHERE codigo = '$code'")
        or die("Problemas en el select:" .mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registros))
            {
            
                mysqli_query($conexion, "INSERT INTO salida (codigo,nombre,documento,dpto)  (SELECT codigo,nombre,documento,dpto FROM empleado)")
                    or die("problemas en el select" .mysqli_error($conexion));
                    mysqli_close($conexion);

                //echo "Acceso Autorizado";
                return true;
            }else
            {
                //echo "Acceso Denegado";
            
            }
   }
    

    public function show($sql){
        $con = new connect;
        $connection = $con->connection();

        $result = mysqli_query($connection,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);

    }

    public function update($id){
        
    }

    public function delete($id){
        $con = new connect;
        $connection = $con->connection();

        $sql ="DELETE FROM users WHERE id='$id'";
        $query = mysqli_query($connection,$sql);

        if($query){
            Header("Location:index.php");
        }else{
            echo "<script>alert('Error en bd');</script>";
        }

    }

    

}