<section class="section-dashboard">
    <div class="head-title">
        <div class="left">
            <h1>Add Bus/Route</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Add Bus/Route</a>
                </li>
            </ul>
        </div>

    </div>
    <div class="form-container">
        <form id="addRoom" data-toggle="validator" role="form" action="." method="post" class="form">
            <input type="hidden" name="action" value="add_route">

            <h1>Add Route</h1>


            <div class="input-container">
                <label class="form-label">Route destination 1</label>
                <input class="form-input" placeholder="destination 1" id="destination_1" data-error="Enter Room No" name="destination_1" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="input-container">
                <label class="form-label">Route destination 2</label>
                <input class="form-input" placeholder="destination 2" id="destination_2" data-error="Enter Room No" name="destination_2" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="input-container">
                <label class="form-label">Amount(Fare)</label>
                <input type="number" class="form-input" placeholder="e.g 2000" id="amount" data-error="Enter Room No" name="amount" required>
                <div class="help-block with-errors"></div>
            </div>
       
            
            <div class="input-container">
                <label class="form-label">Departure Time</label>
                <input type="time" id="departure_time" name="departure_time" class="form-input" required>
                <div class="help-block with-errors"></div>
            </div>
            <button class="btn btn-success" type="submit">Add Route</button>
        </form>
    </div>




</section>