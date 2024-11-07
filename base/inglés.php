<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa Azul Hotel</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/script.js" defer></script>
</head>
<body>

<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Nombre'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];

    $sql = "INSERT INTO usuarios (Nombre, correo, teléfono, fecha, Hora) VALUES ('$name', '$email', '$phone', '$reservation_date', '$reservation_time')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Reservation successful.');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<header>
    <nav>
        <ul>
            <li><a href="#home" data-es="Inicio" data-en="Home">Home</a></li>
            <li><a href="#about" data-es="Sobre Nosotros" data-en="About Us">About Us</a></li>
            <li><a href="#services" data-es="Servicios" data-en="Services">Services</a></li>
            <li><a href="#location" data-es="Ubicación" data-en="Location">Location</a></li>
            <li><a href="#contact" data-es="Contacto" data-en="Contact">Contact</a></li>
            <li><a href="#reservation" data-es="Reservaciones" data-en="Reservations">Reservations</a></li>
        </ul>
        <!-- Cambiar de regreso a español -->
        <a id="language-toggle" href="conexion.php" data-lang="en">Español</a>
    </nav>
</header>

<section id="home" class="section">
    <h1>Welcome to Brisas del Hotel</h1>
    <p>We are very happy to receive you. We hope your stay is comfortable, relaxing and memorable. Our team is on hand to make sure you enjoy everything we have to offer. If you need anything during your visit, don't hesitate to let us know. Enjoy your time with us!</p>
</section>

<section id="about" class="section">
    <h2>About Us</h2>
    <p>Hotel Brisas del Mar is a charming oceanfront retreat, ideal for those looking for a tropical getaway. It offers a stunning ocean view from most of its rooms and common areas, with the soothing sound of waves in the background. The rooms are spacious, with décor inspired by nautical and tropical style, using fresh colors and wood accents that evoke the natural beauty of the beach.</p>
</section>

<section id="services" class="section">
    <h2>Services</h2>
    <ul>
        <li>Rooms with ocean view.</li>
        <li>Spa and wellness.</li>
        <li>Outdoor pool.</li>
        <li>Direct access to the beach.</li>
        <li>Common areas.</li>
        <li>Fine dining restaurants.</li>
    </ul>
</section>

<section id="location" class="section">
    <h2>Location</h2>
    <p>Costa del Sol, at 61 kilometres.  1/1, Boulevard, Department of La Paz in El Salvador.</p>
</section>

<section id="contact" class="section">
    <h2>Contact</h2>
    <p>Email: brisasdelmar0@gmai1.com</p>
    <p>Phone: 7087-9100</p>
    <p>Facebook: Hotel Brisas del Mar</p>
</section>

<section id="reservation" class="section">
    <h2>Reservations</h2>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="Nombre" name="Nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="reservation_date" required>

        <label for="time">Time:</label>
        <input type="time" id="time" name="reservation_time" required>

        <button type="submit">Book</button>
    </form>
</section>

<footer>
    <p>© 2024 Playa Azul Hotel. All rights reserved.</p>
</footer>

<script src="js/script.js"></script>
</body>
</html>
