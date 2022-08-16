<?php
require __DIR__.'/../helpers/databaseCO.php';

// Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.


function allShows()
{
    $fullshow = [];
    $pdo = conexion();
    try {

        $sth = $pdo->query('SELECT `title` , `performer` , `date`, `startTime`  FROM shows ORDER BY title ASC');
        $fullshow = $sth->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $ex) {
        echo 'erreur de requette' . $ex->getMessage();
        die();
    }

    return $fullshow;
}