<?php
require_once "database.php";


function add_bus($bus_name, $routes_id, $destination)
{
    global $pdo;
    $query = 'INSERT INTO buses (bus_name,routes_id ) VALUES(:name, :route)';


    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':name', $bus_name);
    $stmt->bindValue(':route', $routes_id);
    $stmt->execute();

    $busID= $pdo->lastInsertId();

    $stmt->closeCursor();

    $busQuery = 'INSERT INTO bus_state (bus_id,routes_id ,current_location) VALUES(:name, :route, :location)';

    $BusStmt = $pdo->prepare($busQuery);
    $BusStmt->bindValue(':name', $busID);
    $BusStmt->bindValue(':route', $routes_id);
    $BusStmt->bindValue(':location', $destination);
    $BusStmt->execute();
    echo "<script>alert('Successfully Added');</script>";

    $BusStmt->closeCursor();



}


function add_route($destination_1, $destination_2)
{
    global $pdo;
    $query = 'INSERT INTO buses (destination_1,destination_2 ) VALUES(:dest1, :dest2)';


    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':dest1', $destination_1);
    $stmt->bindValue(':dest2', $destination_2);
    $stmt->execute();

    echo "<script>alert('Successfully Added');</script>";


    $stmt->closeCursor();

    
}



function change_bus_state(){
    global $pdo;

     // get the current date
     $currentDate = date('Y-m-d');

    $busquery = 'SELECT bus_id,routes.destination_1, routes.destination_2, routes.routes_id FROM bus_state LEFT JOIN routes ON bus_state.routes_id = routes.routes_id';
    
    $stmt = $pdo->query($busquery);
    $busStates = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($busStates as $busState) {
        $lastUpdateDate = $busState['update_date'];

        // check if the last update date is not the current date
        if ($lastUpdateDate !== $currentDate) {
            // bus needs to switch destinations
            $currentDestination = $busState['current_location'];
            $currentRouteID = $busState['routes_id'];

            
   
            // find the other destination based on the current route
            $otherDestination = ($currentDestination === $busState['destination_1']) ? $busState['destination_2'] : $busState['destination_1'];

            // update the current_destination and last_update_date for the bus
            $updateStmt = $pdo->prepare("UPDATE bus_state SET current_location = :destination, update_date = :current_date WHERE bus_id = :bus_id");
            $updateStmt->execute([
                'destination' => $otherDestination,
                'current_date' => $currentDate,
                'bus_id' => $busState['bus_id']
            ]);
        }
    }


}
