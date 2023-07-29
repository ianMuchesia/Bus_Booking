<?php
require_once "models/database.php";
require_once "models/dashboard.php";


include_once "./views/header.php";
include_once "./views/sidebar.php";




$action =  filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) {
    $action =  filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!$action) {
        $action = 'list_assignments';
    }
}





switch ($action) {
    case "bookings":
        include_once "views/booking.php";
        break;

    default:
        $buses = count_total_buses();
        $routes = count_total_routes();
        $bookings = count_total_bookings();
        $customers = count_total_customers();
        $seats = $buses * 38;
        $emptySeats = $seats - $bookings;
        include_once "views/dashboard.php";
}
