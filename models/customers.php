<?php
require_once "database.php";



function get_all_customers(){
    global $pdo;

    $query = "SELECT customers.customer_id,customers.customer_name,customers.id_no,bookings.seat_no, bookings.date,routes.destination_1, routes.destination_2,routes.amount FROM customers LEFT JOIN bookings ON customers.customer_id = bookings.customer_id LEFT JOIN routes ON bookings.routes_id = routes.routes_id";


    $statement = $pdo->prepare($query);
   
    $statement->execute();
    $customers = $statement->fetchAll(); 
    $statement->closeCursor();

    return $customers;
}
