<?php
// Validar si hay sesión activa
if (!isset($_SESSION["id"]) ) {
    // Si no hay sesión, redirigir al login
    header("Location: index.php");
    exit;
}
$id = $_SESSION["id"];
$admin = new Admin($id);
$admin -> consultar();
echo "Hola " . $admin -> getNombre() . " " . $admin -> getApellido();
?>


AQUI VA EL MENU