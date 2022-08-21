<?php
include '../conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <title>Registrar usuario</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <h2>Nuevo usuario</h2>
            <form name="registroAdmin" action="" method="post">
                <input type="text" name="nombre" placeholder="Nombre" required /><br>
                <input type="text" name="apellido" placeholder="Apellido" required /><br>
                <input type="text" name="dni" placeholder="DNI" required /><br>
                <input type="correo" name="correo" placeholder="Correo" required /><br>
                <input type="text" name="estado" placeholder="Estado" required /><br>
                <input type="password" name="password" placeholder="Password" required /><br>
                <input type="submit" name="submit" value="Register" />
            </form>
        </div>
    </div>
</body>
<?php


// $pass_cifrado = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (nombre, apellido, dni, correo, estado, password) VALUES ('$nombre','$apellido','$dni','$correo','$estado','$password')";

if ($conn->query($query) == TRUE) {
    echo json_encode("success");
    //   header('Location: '.base_url('index.php'));
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
?>

</html>