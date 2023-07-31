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


function book_bus($date, $route,  $customer_name, $id_no, $seat_no)
{

    global $pdo;
    $customerQuery = "INSERT INTO customers(customer_name, id_no) VALUES(:name, :id)";

    $customerStmt = $pdo->prepare($customerQuery);
    $customerStmt->bindValue(":name", $customer_name);
    $customerStmt->bindValue(":id", $id_no);
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

}
