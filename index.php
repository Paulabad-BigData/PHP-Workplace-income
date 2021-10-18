<?php

//require("connection.php");

$conexion = mysqli_connect("localhost", "root", "paula", "asistencia") or die ("Problemas de conexion");


$mensaje ="";

$code = $_POST['codigo'];

$registros = mysqli_query($conexion,"SELECT * FROM empleado WHERE codigo = '$code'")
or die("Problemas en el select:" .mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)){
    echo "Acceso Autorizado";
    //$mensaje = "Acceso Autorizado";
}else{
    echo "Acceso Denegado";
    //$mensaje = "Acceso Denegado";
}

mysqli_query($conexion, "INSERT INTO ingreso (codigo,nombre,documento,dpto)  (SELECT codigo,nombre,documento,dpto FROM empleado)")
        or die("problemas en el select" .mysqli_error($conexion));
        mysqli_close($conexion);






//include 'global/connection.php';
//include 'global/methodsDB.php';
//include 'home.php';
include 'templates/header.php';


?>
          <div class="row"style="margin-top: 2%;">
          <center><h1>Registro Empleados</h1></center>

              <div class="col-6" style="margin-top: 2%;">
                  <form action="index.php" method="POST">
                    <div class="form-group">
                        <h3>Ingreso</h3>
                        <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpCode" placeholder="Codigo">
                    </div>
                    <br>
                    <button type="submit" name="" value="Buscar" class="btn btn-success">Ingreso</button>
                    <br>
                    <br>

                    <input class="form-control" type="text" placeholder="Mensaje" <?php echo $mensaje; ?> readonly>

                </form>
                
              </div>



              <div class="col-6" style="margin-top: 2%;">
                  <form action="" method="POST">
                    <div class="form-group">
                        <h3>Salida</h3>
                        <input type="text" class="form-control" name="code" id="code" aria-describedby="helpCode" placeholder="Codigo">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning">Salida</button>
                </form>
              </div>
              
          </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php

include 'templates/footer.php';
      