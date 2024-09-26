<?php
session_start();
session_unset(); // Limpiar todas las variables de sesión
session_destroy(); // Destruir la sesión

// Eliminar la cookie 'bienvenida' de todas las formas posibles
if (isset($_COOKIE['bienvenida'])) {
    setcookie('bienvenida', '', time() - 3600, '/'); // Ruta raíz
    setcookie('bienvenida', '', time() - 3600, '/', $_SERVER['SERVER_NAME']); // Con el dominio explícito
    setcookie('bienvenida', '', time() - 3600); // Sin parámetros adicionales
}

// Redirigir al usuario a la página de login
header('Location: login.php');
exit();
?>
