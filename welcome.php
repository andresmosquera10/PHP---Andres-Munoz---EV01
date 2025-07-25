<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.html");
    exit();
}
?>
<h2>Bienvenido al sistema</h2>
<a href="logout.php">Cerrar sesión</a>