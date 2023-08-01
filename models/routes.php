<?php
require_once "database.php";




function add_route($destination_1, $destination_2,$amount, $time)
{
    global $pdo;

    $query = 'INSERT INTO routes (destination_1,destination_2,amount, departure_time ) VALUES(:dest1, :dest2,:amount, :time)';


    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':dest1', $destination_1);
    $stmt->bindValue(':dest2', $destination_2);
    $stmt->bindValue(':amount', $amount);
    $stmt->bindValue(':time', $time);
    $stmt->execute();
    $stmt->closeCursor();

    $query2 = 'INSERT INTO routes (destination_1,destination_2,amount, departure_time ) VALUES(:dest1, :dest2,:amount, :time)';


    $stmt2 = $pdo->prepare($query2);
    $stmt2->bindValue(':dest1', $destination_2);
    $stmt2->bindValue(':dest2', $destination_1);
    $stmt2->bindValue(':amount', $amount);
    $stmt2->bindValue(':time', $time);
    $stmt2->execute();

    echo "<script>alert('Route Successfully Added');</script>";


    $stmt2->closeCursor();

    
}
