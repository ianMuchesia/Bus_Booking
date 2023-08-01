<?php
require_once "../models/database.php";
require_once "../models/booking.php";
require_once "../models/customers.php";
if(isset($_GET['date'])){
    
    $date = $_GET["date"];

    $bookedSeats = get_booked_seats($date);
    echo json_encode($bookedSeats);
}

if(isset($_GET['route'])){
    $route = $_GET["route"];
    $amount = get_amount($route);
    echo json_encode($amount);
}

if(isset($_GET['routeDetails']) &&  isset($_GET['dateDetails'])){
    $bookingDetails = booking_details($_GET['routeDetails'], $_GET['dateDetails']);
    
    echo json_encode($bookingDetails);
}

if (isset($_POST['login'])) {
    print_r([1, 
    2]);
    global $pdo;
    $email = $_POST['email'];
    $password = $_POST['password'];

    print_r([$email, $password]);
    if (!$email && !$password) {
        header('Location:../views/login.php?empty');
    } else {
        // Prepare the SQL statement with placeholders
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $pdo->prepare($query);

        // Bind values to the prepared statement placeholders
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        // Execute the prepared statement
        $stmt->execute();

        // Get the result
      
        $user = $stmt->fetch();
        $stmt->closeCursor();

        if ($user) {
            // Start the session and store user data
            session_start();
            $_SESSION['name'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];

            // Redirect to the desired location
            header('Location: ../index.php');
            exit;
        } else {
            echo "<script>alert('something wrong')</script>";
            header('Location: ../views/login.php?loginE');
            exit();
        }
    }
}
