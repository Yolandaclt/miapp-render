<?php
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$port = getenv('DB_PORT');

try {
    // Usa pgsql y el formato correcto
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pass");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>✅ Conexión a PostgreSQL establecida.</p>";
} catch (PDOException $e) {
    echo "<p>❌ Error de conexión: " . $e->getMessage() . "</p>";
}
?>
