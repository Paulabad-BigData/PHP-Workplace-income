<?php

//include 'global/connection.php';

$conexion = mysqli_connect("localhost", "root", "paula", "asistencia") or die ("Problemas de conexion");


$result = mysqli_query($conexion, "SELECT * FROM ingreso(codigo,nombre,ingreso) &salida(salida) WHERE codigo='$code',nombre='$nombre',ingreso='$ingreso',salida='$salida'");



include 'templates/header.php';


?>


            <div class="col-12" style="margin-top: 2%;">
            <h2>Reporte Ingreso y Salida de Empleados</h2>
            <?php

            echo "<table>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>CODIGO</th>";
                        echo "<th>NOMBRE</th>";
                        echo "<th>FECHA INGRESO</th>";
                        echo "<th>FECHA SALIDA</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = mysql_fetch_row($result)){
                    echo "<tr>";
                    echo "
                        <td>" . $row['codigo'] . "</td>
                        <td>" . $row['nombre'] . "</td>
                        <td>" . $row['ingreso'] . "</td>
                        <td>" . $row['salida'] . "</td>
                        ";
                    echo "</tr>";
                }
                echo "</tbody>";
            echo "</table>";

            ?>
            </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<?php include 'templates/footer.php';
      