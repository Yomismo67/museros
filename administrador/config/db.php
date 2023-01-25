<?php
$servidor = "localhost";
$usuario = "usuario";
$password = "password";
$basedatos = "nombre_bd";
// pubicar en /var/www/html
// Crear conexión
$conn = mysqli_connect($servidor, $usuario, $password, $basedatos);

// Comprobar conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuarios (nombre, apellido, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>