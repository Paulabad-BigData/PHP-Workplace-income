<?php

include 'templates/header.php';
include 'global/connection.php';
include 'global/methodsDB.php';
include 'global/conectors.php';


?>

<br>
<br>
<center><h2>Reporte Ingreso y Salida de Empleados</h2></center>

<table class="table mt-4 table-hover">
    <thead>
        <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA INGRESO</th>
            <th scope="col">FECHA SALIDA</th>
        </tr>
    </thead>
    <tbody>
    <?php

        $con = new methods;
        $sql = "SELECT * from ingreso,salida";
        

        $data = $con->show($sql);
        

        foreach ($data as $show) {

    ?>
        <tr>
          <th><?php echo $show['codigo'] ?></th>
          <th><?php echo $show['nombre'] ?></th>
          <th><?php echo $show['ingreso'] ?></th>
          <th><?php echo $show['salida'] ?></th>
        </tr>
        <?php } ?>
    </tbody>
</table>





<?php include 'templates/footer.php';