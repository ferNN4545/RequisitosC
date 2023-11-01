<?php
include 'index.php';
include 'conexion.php';
?>

<h1> Listado de facultades </h1>

<div align ="right">
  <a class = "btn btn-primary" href="registro_facultades.php"> Adicionar </a>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM facultades";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["codigoFac"]."</td>";
                echo "<td>".$row["nombreFac"]."</td>";
                echo "<td>
                    <a class='btn btn-success'>Editar</a>
                    <a class='btn btn-danger'>Eliminar</a>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "0 resultados";
        }
        $conn->close();
    ?>
  </tbody>
</table>
</div>