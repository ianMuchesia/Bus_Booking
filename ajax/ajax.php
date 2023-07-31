<?php
require_once "../models/booking.php";
if(isset($_GET['date'])){
    
    $date = $_GET["date"];

    $bookedSeats = get_booked_seats($date);
    echo json_encode($bookedSeats);
}

?>