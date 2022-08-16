<?php
    

   
    try {
        
        $sth = $pdo->query('SELECT * FROM clients');
        $clients = $sth->fetchAll(PDO::FETCH_OBJ);

        $sth = $pdo->query('SELECT type FROM showtypes');
        $showtypes = $sth->fetchAll(PDO::FETCH_OBJ);

        $sth = $pdo->query('SELECT lastName , firstName  FROM clients LIMIT 20');
        $clients20 = $sth->fetchAll(PDO::FETCH_OBJ);

        $sth = $pdo->query('SELECT lastName , firstName  FROM clients WHERE `card` = 1');
        $clientfidel = $sth->fetchAll(PDO::FETCH_OBJ);


        $sth = $pdo->query('SELECT lastName , firstName  FROM clients WHERE lastName LIKE "M%" ORDER BY lastName ASC');
        $clientM = $sth->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $ex) {
        echo 'erreur de requette' . $ex->getMessage();
        die();
    }
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/main.css">
    <title>Titre placeholder</title>
</head>
<body>
    

<pre>
    <?= //var_dump($clients); 
        //var_dump($showtypes);
        //var_dump($clients20);
        //var_dump($clientfidel);
        var_dump($clientM);?>
</pre>



    <script src="public/assets/js/app.js"></script>
</body>
</html>