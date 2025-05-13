<?php
// Validar si hay sesión activa
if (!isset($_SESSION["id"]) ) {
    // Si no hay sesión, redirigir al login
    header("Location: index.php");
    exit;
}
$id = $_SESSION["id"];
$medico = new Medico($id);
$medico -> consultar();
echo "Hola " . $medico -> getNombre() . " " . $medico -> getApellido();
echo "Usted tiene la especialidad: " . $medico -> getEspecialidad() -> getNombre();
?>