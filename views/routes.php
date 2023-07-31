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
            <input type="hidden" name="action" value="add_room">

            <h1>Add Route</h1>


            <div class="input-container">
                <label class="form-label">Route destination 1</label>
                <input class="form-input" placeholder="Room No" id="room_no" data-error="Enter Room No" name="room_no_add" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="input-container">
                <label class="form-label">Route destination 2</label>
                <input class="form-input" placeholder="Room No" id="room_no" data-error="Enter Room No" name="room_no_add" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="input-container">
                <label class="form-label">Amount</label>
                <input class="form-input" placeholder="Room No" id="room_no" data-error="Enter Room No" name="room_no_add" required>
                <div class="help-block with-errors"></div>
            </div>
            <button class="btn btn-success" type="submit">Add Room</button>
        </form>
    </div>

    <div class="form-container">
   
        <form action="." class="form" method="post">
            <input type="hidden" name="action" value="add_staff">
            <h1>2. Add Employee</h1>
            <div class="input-container">
                <label for="first_name" class="form-label">
                    First Name:
                </label>
                <input type="text" id="first_name" name="first_name" class="form-input" required>
            </div>
            <div class="input-container">
                <label for="last_name" class="form-label">
                    First Name:
                </label>
                <input type="text" id="last_name" name="last_name" class="form-input" required>
            </div>
            <div class="form-group col-lg-6">
                <label>Staff</label>
                <select class="form-input" id="staff_type" required name="staff" data-error="Select Staff Type">
                    <option selected disabled>Select Staff Type</option>
                    <option value="Manager">Manager</option>
                    <option value="Front Desk Receptionist">Front Desk Receptionist</option>
                    <option value="Housekeeping Manager">Housekeeping Manager</option>
                    <option value="Chef">Chef</option>
                    <option value="Waiter">Waiter</option>
                    <option value="Hotel Sales Manager">Hotel Sales Manager</option>

                </select>
                <div class="help-block with-errors"></div>
            </div>
            <div class="input-container">
                <label for="id_card_no" class="form-label">
                    ID Card Number:
                </label>
                <input type="number" id="id_card_no" name="idCard" class="form-input">
            </div>
            <div class="input-container">
                <label for="contact-no" class="form-label">
                    Contact Number:
                </label>
                <input type="number" name="contact_no" placeholder="Contact Number" id="contact_no" required class="form-input">
            </div>
            <div class="input-container">
                <label for="address" class="form-label">
                    Residential Address:
                </label>
                <input type="text" name="address" placeholder="Residential Address" id="address" required class="form-input">
            </div>
            <div class="input-container">
                <label for="salary" class="form-label">Salary </label>
                <input type="number" class="form-input" name="salary" placeholder="Salary" id="salary" data-error="Enter Salary" required>


            </div>
            <button type="submit" class="btn btn-lg btn-success" style="border-radius:0%">Submit</button>
        </form>
    </div>


</section>