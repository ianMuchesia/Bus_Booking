<?php
require_once "database.php";


function count_total_buses(){
    global $pdo;
    $query = 'SELECT COUNT(*) FROM buses';

    $statement= $pdo->prepare($query);
    $statement->execute();
    $count = $statement->fetch();
    $statement -> closeCursor();
    return $count[0];
}


function count_total_bookings(){
    global $pdo;
    $query = 'SELECT COUNT(*) FROM bookings';

    $statement= $pdo->prepare($query);
    $statement->execute();
    $count = $statement->fetch();
    $statement -> closeCursor();
    return $count[0];
}


function count_total_routes(){
    global $pdo;
    $query = 'SELECT COUNT(*) FROM routes';

    $statement= $pdo->prepare($query);
    $statement->execute();
    $count = $statement->fetch();
    $statement -> closeCursor();
    return $count[0];
}



function count_total_customers(){
    global $pdo;
    $query = 'SELECT COUNT(*) FROM customers';

    $statement= $pdo->prepare($query);
    $statement->execute();
    $count = $statement->fetch();
    $statement -> closeCursor();
    return $count[0];
}