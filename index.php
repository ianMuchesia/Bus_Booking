<?php
require_once "models/database.php";
require_once "models/dashboard.php";
require_once "models/booking.php";
require_once "models/routes.php";



include_once "./views/header.php";
include_once "./views/sidebar.php";



$date = filter_input(INPUT_POST, 'travel_date',FILTER_SANITIZE_SPECIAL_CHARS);
$route = filter_input(INPUT_POST, 'route', FILTER_SANITIZE_NUMBER_INT);
$amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_NUMBER_INT);
$customer_name = filter_input(INPUT_POST, 'customer_name',FILTER_SANITIZE_SPECIAL_CHARS);
$id_no = filter_input(INPUT_POST, 'id_no', FILTER_SANITIZE_NUMBER_INT);
$seat_no = filter_input(INPUT_POST, 'seat_no', FILTER_SANITIZE_NUMBER_INT);


$destination_1 = filter_input(INPUT_POST, 'destination_1',FILTER_SANITIZE_SPECIAL_CHARS);
$destination_2 = filter_input(INPUT_POST, 'destination_2',FILTER_SANITIZE_SPECIAL_CHARS);
if(isset($_POST['departure_time'])){
    $departure_time = $_POST['departure_time'];
}

















$action =  filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) {
    $action =  filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!$action) {
        $action = 'list_assignments';
    }
}





switch ($action) {
    case "bookings":
        $routes=get_all_routes();
       
        include_once "views/booking.php";
        break;
    case "book_bus":

        //print_r([$date, $route , $customer_name , $id_no, $seat_no]);
        book_bus($date, $route, $customer_name , $id_no, $seat_no);
        $routes=get_all_routes();
        include_once "views/booking.php";
        break;
    case "route":
        include_once "views/routes.php";
        break;
    case "add_route":
   
        add_route($destination_1, $destination_2, $amount,$departure_time);
        include_once "views/routes.php";
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
include_once "views/footer.php";

