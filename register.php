<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    try {
        $stmt->execute([$username, $password]);
        echo "Registro exitoso. <a href='login.html'>Iniciar sesión</a>";
    } catch (PDOException $e) {
        echo "Error al registrar usuario: " . $e->getMessage();
    }
}
?>