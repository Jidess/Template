<?php
require __DIR__.'/../helpers/databaseCO.php';


try {

    $sth = $pdo->query('SELECT type FROM showtypes');
    $showtypes = $sth->fetchAll(PDO::FETCH_OBJ);

} catch (PDOException $ex) {
    echo 'erreur de requette' . $ex->getMessage();
    die();
}