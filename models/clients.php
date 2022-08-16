<?php
require __DIR__.'/../helpers/databaseCO.php';



function getAllClients()
{
    $clients = [];
    try {
        $pdo = conexion();
        $sth = $pdo->query('SELECT * FROM clients');
        $clients = $sth->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $ex) {
        echo 'erreur de requette' . $ex->getMessage();
        die();
    }
    return  $clients;
}

function get20Clients( )
{
    $clients20 = [];
    $pdo = conexion();
    try {
        $sth = $pdo->query('SELECT lastName , firstName  FROM clients LIMIT 20');
        $clients20 = $sth->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $ex) {
        echo 'erreur de requette' . $ex->getMessage();
        die();
    }
    

    return $clients20;
}


function getClientFidel()
{
$clientfidel = [];
$pdo = conexion();
    try {
        $sth = $pdo->query('SELECT lastName , firstName  FROM clients WHERE `card` = 1');
        $clientfidel = $sth->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $ex) {
        echo 'erreur de requette' . $ex->getMessage();
        die();
    }

    return $clientfidel;

}


function getClientM()
{
    $clientM = [];
    $pdo = conexion();
    try {

        $sth = $pdo->query('SELECT lastName , firstName  FROM clients WHERE lastName LIKE "M%" ORDER BY lastName ASC');
        $clientM = $sth->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $ex) {
        echo 'erreur de requette' . $ex->getMessage();
        die();
    }

    return $clientM;
}



