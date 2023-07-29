<?php
require_once "database.php";


function add_bus($bus_name, $routes_id){
    global $pdo;
    $query = 'INSERT INTO buses (bus_name,routes_id ) VALUES(:name, :route)';


    $stmt = $pdo ->prepare($query);
    $stmt->bindValue(':name', $bus_name);
    $stmt->bindValue(':route', $routes_id);
}