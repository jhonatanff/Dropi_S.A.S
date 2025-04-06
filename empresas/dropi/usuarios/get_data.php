<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba_dropi";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos
$sql = "SELECT id_usuario, nombre_colaborador, numero_identificacion, cargo, area FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = [];
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode(["status" => "success", "data" => $data]);
} else {
    echo json_encode(["status" => "error", "message" => "No se encontraron datos."]);
}

// Cerrar la conexión
$conn->close();
?>