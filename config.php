<?php
// Configurazione del database
#$db_host = '35.184.102.226';
#$db_name = 'image_catalog';
#$db_user = 'root';
#$db_pass = 'admin123';

// Database configuration with ENV variables. Set default values as well 
$db_host = getenv('DB_HOST') ?: '35.184.102.226';
$db_name = getenv('DB_NAME') ?: 'image_catalog';
$db_user = getenv('DB_USER') ?: 'appmod-phpapp-user';
$db_pass = getenv('DB_PASS') ?: 'Access#123';



try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

session_start();
?>
