<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "prueba_dropi";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$id_usuario = $_POST['id_usuario'];
$nombre_colaborador = $_POST['nombre_colaborador'];
$numero_identificacion = $_POST['numero_identificacion'];
$cargo = $_POST['cargo'];
$area = $_POST['area'];


$sql = "INSERT INTO usuarios (id_usuario, nombre_colaborador, numero_identificacion,cargo, area) VALUES ('$id_usuario', '$nombre_colaborador', '$numero_identificacion', '$cargo', '$area')";
if ($conn->query($sql) === TRUE) {
    echo "Usuario agregado correctamente";
    header("Location: colaboradores.html"); // Redirigir a la página de colaboradores después de agregar
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();





?>