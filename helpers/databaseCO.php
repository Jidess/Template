<?php
require __DIR__.'/../config/config.php';
function conexion ()
{
    $dsn = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8';
$option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_PERSISTENT => true];

$pdo = null;

try {
    $pdo = new PDO($dsn, DBUSER, DBPWD);
} catch (PDOException $ex) {
    echo 'erreur de connexion' . $ex->getMessage();
    die();
} 
return $pdo;
}





