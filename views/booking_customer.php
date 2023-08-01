<section class="section-dashboard">
    <div class="head-title">
        <div class="left">
            <h1>Booking Details</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Booking Details</a>
                </li>
            </ul>
        </div>
        <a href=".?action=add_route" class="btn-download">
            <i class='bx bxs-cloud-upload'></i>
            <span class="text">ADD ROUTE/BUS</span>
        </a>
    </div>
    <div class="table-container form">
        <h3 style="text-align: center;">Options</h3>
        <div class="options">
        <div class="input-container">
            <label for="" class="form-label">Select Route</label>
            <select name="routes" id="route-details" class="form-input">
               
                <?php foreach ($routes as $route) : ?>
                <option value="<?= $route['routes_id']; ?>"><?= $route['destination_1'] . ' to ' . $route['destination_2']; ?> </option>
            <?php endforeach; ?>

            </select>
        </div>
        <div class="input-container">
            <label for="" class="form-label">Select Date</label>
            <input type="date" name="date" id="date-details" class="form-input">
        </div>
        </div>
    </div>
    <div class="table-container">
        <table class="table-customers">
            <thead>
                <tr>
                <th>Seat No</th>
                    
                    <th>Name</th>
                    <th>ID no</th>
                    <th>Route</th>
                    <th>Fare Amount</th>
                    <th>Booking Date</th>
                </tr>
            </thead>
            <tbody id="booking-details">
            
               
                
            </tbody>
        </table>
    </div>



    <script src="ajax/booking_customer.js">

</script>
</section>