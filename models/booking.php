<?php
require_once "database.php";

function get_all_routes()
{
    global $pdo;

    $query = "SELECT * FROM routes";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $routes = $stmt->fetchAll();
    $stmt->closeCursor();
    return $routes;
}


function get_amount($route){
    global $pdo;

    $query = "SELECT amount FROM routes WHERE routes_id=:route";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':route', $route);
    $stmt->execute();
    $amount = $stmt->fetch();
    $stmt->closeCursor();
    return $amount;
}


function get_booked_seats($date)
{
    global $pdo;
    $query = "SELECT seat_no FROM bookings WHERE date=:date";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':date', $date);
    $stmt->execute();
    $bookings = $stmt->fetchAll();
    $stmt->closeCursor();
    return $bookings;
}


function book_bus($date, $route,  $customer_name, $id_no, $seat_no, $customer_contact)
{

    global $pdo;
    $customerQuery = "INSERT INTO customers(customer_name, id_no, contact) VALUES(:name, :id, :contact)";

    $customerStmt = $pdo->prepare($customerQuery);
    $customerStmt->bindValue(":name", $customer_name);
    $customerStmt->bindValue(":id", $id_no);
    $customerStmt->bindValue(":contact", $customer_contact);
    $customerStmt->execute();
    $customerID= $pdo->lastInsertId();
    $customerStmt->closeCursor();


    $bookingQuery = "INSERT INTO bookings(customer_id,seat_no,date,routes_id)
    VALUES( :id,:seat,:date,:route)";

    $bookingStmt = $pdo->prepare($bookingQuery);

    $bookingStmt->bindValue(":id", $customerID);
    $bookingStmt->bindValue(":seat", $seat_no);
    $bookingStmt->bindValue(":date", $date);
    $bookingStmt->bindValue(":route", $route);
   
    $bookingStmt->execute();
    echo "<script>alert('Successfully Booked');</script>";
  
    $bookingStmt->closeCursor();
    header("Location:../bus/views/download.php?id=".$customerID );
    exit;

}


function booking_details($route, $date){
    global $pdo;


    $query = "SELECT customers.customer_id, customers.customer_name,customers.id_no,bookings.seat_no,routes.destination_1, routes.destination_2,routes.amount, bookings.booking_date, customers.contact FROM customers LEFT JOIN bookings ON customers.customer_id = bookings.customer_id LEFT JOIN routes ON bookings.routes_id = routes.routes_id WHERE routes.routes_id = :route AND bookings.date = :date ORDER BY bookings.seat_no ASC";


    $statement = $pdo->prepare($query);
    $statement->bindValue(':route', $route);
    $statement->bindValue(':date', $date);
    $statement->execute();
    $customers = $statement->fetchAll(); 
    $statement->closeCursor();

    return $customers;
}

function single_customer($id){
    global $pdo;


    $query = "SELECT customers.customer_id,bookings.date, customers.customer_name,customers.id_no,bookings.seat_no,routes.destination_1, routes.destination_2,routes.amount, bookings.booking_date, routes.departure_time, customers.contact  FROM customers LEFT JOIN bookings ON customers.customer_id = bookings.customer_id LEFT JOIN routes ON bookings.routes_id = routes.routes_id WHERE customers.customer_id = :id";


    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id);
 
    $statement->execute();
    $customer = $statement->fetch(); 
    $statement->closeCursor();

    return $customer;
}