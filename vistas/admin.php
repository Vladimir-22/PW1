<?php
include '../conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Administrador</title>
</head>

<body>
    <div class="container">
        <h2>Usuarios</h2>
        <form action="addUser.php">
            <input type="submit" value="Agregar usuario" />
        </form>
        <table style="background-color: white; color: black;">
            <tr>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

                    <tr>
                        <td><?php echo "" . $row["nya"] . "" ?></td>
                        <td><?php echo "" . $row["correo"] . "" ?></td>
                        <td><?php echo "" . $row["estado"] . "" ?></td>
                        <td>Dar de baja</td>
                    </tr>
            <?php
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>

</html>