<?php
$host = "db";
$dbname = "logdb";
$user = "appuser";
$pass = "apppass";

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3>Conexión exitosa a la base de datos</h3>";

    $stmt = $pdo->query("SELECT * FROM log");

    echo "<h4>Listado de logs:</h4>";
    echo "<ul>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . $row['hora'] . " - " . $row['actividad'] . " - " . $row['estado'] . "</li>";
    }

    echo "</ul>";

} catch (PDOException $e) {
    echo "<h3>Error de conexión:</h3>";
    echo $e->getMessage();
}
?>
