<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisas del Mar</title>
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
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Nombre'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];

    $sql = "INSERT INTO usuarios (Nombre, correo, teléfono, fecha, Hora) VALUES ('$name', '$email', '$phone', '$reservation_date', '$reservation_time')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Reservación realizada con éxito.');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<header>
    <nav>
        <ul>
            <li><a href="#home" data-es="Inicio" data-en="Home">Inicio</a></li>
            <li><a href="#about" data-es="Sobre Nosotros" data-en="About Us">Sobre Nosotros</a></li>
            <li><a href="#services" data-es="Servicios" data-en="Services">Servicios</a></li>
            <li><a href="#location" data-es="Ubicación" data-en="Location">Ubicación</a></li>
            <li><a href="#contact" data-es="Contacto" data-en="Contact">Contacto</a></li>
            <li><a href="#reservation" data-es="Reservaciones" data-en="Reservations">Reservaciones</a></li>
        </ul>
<!-- Botón de cambio de idioma -->
<a id="language-toggle" href="inglés.php" data-lang="es">English</a>

    </nav>
</header>

<section id="home" class="section">
    <h2 data-es="Bienvenidos al Hotel Playa Azul" data-en="Welcome to Playa Azul Hotel">Bienvenidos al Hotel Brisas del Mar</h2>
    <p data-es="Disfruta de una experiencia única en nuestras instalaciones frente al mar." 
       data-en="Enjoy a unique experience at our beachfront facilities.">Nos sentimos muy felices de recibirte. Esperamos que tu estancia sea cómoda, relajante y memorable. Nuestro equipo está a tu disposición para asegurarse de que disfrutes de todo lo que tenemos para ofrecerte. Si necesitas algo durante tu visita, no dudes en hacérnoslo saber.

¡Que disfrutes tu tiempo con nosotros!</p>
</section>

<section id="about" class="section">
    <h2 data-es="Sobre Nosotros" data-en="About Us">Sobre Nosotros</h2>
    <p data-es="En Hotel Playa Azul, ofrecemos un ambiente relajante y cómodo para nuestros huéspedes."
       data-en="At Playa Azul Hotel, we offer a relaxing and comfortable environment for our guests.">Hotel Brisas del Mar es un encantador refugio frente al océano, ideal para quienes buscan una escapada tropical. Ofrece una impresionante vista al mar desde la mayoría de sus habitaciones y áreas comunes, con el sonido relajante de las olas de fondo. Las habitaciones son amplias, con decoración inspirada en el estilo náutico y tropical, utilizando colores frescos y detalles en madera que evocan la belleza natural de la playa.

</p>
</section>

<section id="services" class="section">
    <h2 data-es="Servicios" data-en="Services">Servicios</h2>
    <ul>
        <li data-es="Habitaciones con vista al mar" data-en="Rooms with sea view">Habitaciones con vista al mar.</li>
        <li data-es="Spa y bienestar" data-en="Spa and wellness">Spa y bienestar.</li>
        <li data-es="Restaurantes de alta cocina" data-en="Gourmet restaurants">Restaurantes de alta cocina.</li>
        <li data-es="Habitaciones con vista al mar" data-en="Rooms with sea view">Piscina al aire libre.</li>
        <li data-es="Spa y bienestar" data-en="Spa and wellness">acceso directo a la playa.</li>
        <li data-es="Restaurantes de alta cocina" data-en="Gourmet restaurants">Áreas comúnes.</li>
        <li data-es="Habitaciones con vista al mar" data-en="Rooms with sea view">Deportes acuáticos.</li>
        <li data-es="Restaurantes de alta cocina" data-en="Gourmet restaurants">Restaurantes de alta cocina.</li>


    </ul>
</section>

<section id="location" class="section">
    <h2 data-es="Ubicación" data-en="Location">Ubicación</h2>
    <p data-es="Nos encontramos en la costa de Playa Azul, el lugar perfecto para desconectar."
       data-en="We are located on the coast of Playa Azul, the perfect place to disconnect.">Costa del Sol, en kilómetros 61.  1/1, Bulevar, Departamento de La Paz en El Salvador.</p>
</section>

<section id="contact" class="section">
    <h2 data-es="Contacto" data-en="Contact">Contacto</h2>
    <p>Email: brisasdelmar01@gmail.com</p>
    <p>Teléfono: 7087-9100</p>
    <p>Facebook: Hotel Brisas del Mar</p>
</section>

<section id="reservation" class="section">
    <h2 data-es="Reservaciones" data-en="Reservations">Reservaciones</h2>
    <form action="" method="POST">
        <label for="name" data-es="Nombre:" data-en="Name:">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" required>

        <label for="email" data-es="Correo Electrónico:" data-en="Email:">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone" data-es="Teléfono:" data-en="Phone:">Teléfono:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="date" data-es="Fecha:" data-en="Date:">Fecha:</label>
        <input type="date" id="date" name="reservation_date" required>

        <label for="time" data-es="Hora:" data-en="Time:">Hora:</label>
        <input type="time" id="time" name="reservation_time" required>

        <button type="submit" data-es="Reservar" data-en="Book">Reservar</button>
    </form>
</section>

<footer>
    <p data-es="© 2024 Hotel Playa Azul. Todos los derechos reservados." 
       data-en="© 2024 Playa Azul Hotel. All rights reserved.">© 2024 Hotel Playa Azul. Todos los derechos reservados.</p>
</footer>

<script src="js/script.js"></script>
</body>
</html>
