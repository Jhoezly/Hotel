<?php
include '../base/conexion.php';
// Resto del código...

// Recibir y sanitizar las entradas
$name = $_POST['Nombre'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$reservation_date = $_POST['reservation_date'];
$reservation_time = $_POST['reservation_time'];

// Preparar la sentencia SQL para evitar inyecciones
$stmt = $conexion->prepare("INSERT INTO reservacion (Nombre, email, phone, reservation_date, reservation_time) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $reservation_date, $reservation_time);

// Ejecutar la consulta
if ($stmt->execute()) {
    // Redirigir a la página de confirmación de éxito
    header("Location: confirmacion.php?name=$name&date=$reservation_date&time=$reservation_time");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
