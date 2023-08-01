

<section class="section-dashboard">
    <div class="head-title">
        <div class="left">
            <h1>Book Seat</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Book Seat</a>
                </li>
            </ul>
        </div>
        <a href=".?action=route" class="btn-download">
            <i class='bx bxs-cloud-upload'></i>
            <span class="text">ADD BUS</span>
        </a>
    </div>


    <form class="form" method="post" action=".">
        <input type="hidden" name="action" value="book_bus">
        <h4>Select Route</h4>
        <select name="route" id="route" class="form-input">
            <option value="">You have not selected</option>
            <?php foreach ($routes as $route) : ?>
                <option value="<?= $route['routes_id']; ?>"><?= $route['destination_1'] . ' to ' . $route['destination_2']; ?> </option>
            <?php endforeach; ?>
        </select>

        <div class="input-container">
            <label for="TravelDate" class="form-label">
                Travel Date
            </label>
            <input type="date" placeholder="mm/dd/yyyy" id="TravelDate" name="travel_date" class="form-input" required>

        </div>

        <div class="input-container">
            <label for="amount" class="form-label">
                Amount
            </label>
            <input type="text" placeholder="<NAME>" class="form-input" required name="amount" id="amount" />
        </div>


        <div class="input-container">
            <label for="customer_name" class="form-label">
                Passenger Name
            </label>
            <input type="text" placeholder="<NAME>" class="form-input" required name="customer_name" id="customer_name" />
        </div>

        <div class="input-container">
            <label for="customer_name" class="form-label">
                Passenger Contact
            </label>
            <input type="text" placeholder="<NAME>" class="form-input" required name="customer_contact" id="customer_contact" type="number" />
        </div>

        <div class="input-container">
            <label for="id_no" class="form-label">
                ID Number
            </label>
            <input type="text" placeholder="<NAME>" class="form-input" required name="id_no" id="id_no" />
        </div>


        <!-- Seats Diagram -->
        <div class="input-container">
            <h2 style="text-align: center;">Select the Seat</h2>
            <table class="seatsDiagram">
                <tr id="first-row">
                    
                    
                    <td id="seat-1" data-name="1"  class="all-seats">1</td>
                    <td id="seat-2" data-name="2" class="all-seats">2</td>
                    <td id="seat-3" data-name="3" class="all-seats">3</td>
                    <td id="seat-4" data-name="4" class="all-seats">4</td>
                    <td id="seat-5" data-name="5" class="all-seats">5</td>
                    <td id="seat-6" data-name="6" class="all-seats">6</td>
                    <td id="seat-7" data-name="7" class="all-seats">7</td>
                    <td id="seat-8" data-name="8" class="all-seats">8</td>
                    <td id="seat-9" data-name="9" class="all-seats">9</td>
                    <td id="seat-10" data-name="10" class="all-seats">10</td>
                </tr>
                <tr id="second-row">
                    <td id="seat-11" data-name="11" class="all-seats">11</td>
                    <td id="seat-12" data-name="12" class="all-seats">12</td>
                    <td id="seat-131" data-name="13" class="all-seats">13</td>
                    <td id="seat-14" data-name="14" class="all-seats">14</td>
                    <td id="seat-15" data-name="15" class="all-seats">15</td>
                    <td id="seat-16" data-name="16" class="all-seats">16</td>
                    <td id="seat-17" data-name="17" class="all-seats">17</td>
                    <td id="seat-18" data-name="18" class="all-seats">18</td>
                    <td id="seat-19" data-name="19" class="all-seats">19</td>
                    <td id="seat-20" data-name="20" class="all-seats">20</td>
                </tr>
                <tr>
                    <td class="space">&nbsp;</td>
                    <td class="space">&nbsp;</td>
                    <td class="space">&nbsp;</td>
                    <td class="space">&nbsp;</td>
                    <td class="space">&nbsp;</td>
                    <td class="space">&nbsp;</td>
                    <td class="space">&nbsp;</td>
                    <td class="space">&nbsp;</td>
                    <td class="space">&nbsp;</td>
                    <td class="space">&nbsp;</td>
                </tr>
                <tr id="third-row">
                   
                    <td class="space">&nbsp;</td>
                    <td id="seat-21" data-name="21" class="all-seats">21</td>
                    <td id="seat-22" data-name="22" class="all-seats">22</td>
                    <td id="seat-23" data-name="23" class="all-seats">23</td>
                    <td id="seat-24" data-name="24" class="all-seats">24</td>
                    <td id="seat-25" data-name="25" class="all-seats">25</td>
                    <td id="seat-26" data-name="26" class="all-seats">26</td>
                    <td id="seat-27" data-name="27" class="all-seats">27</td>

                    <td id="seat-28" data-name="28" class="all-seats">28</td>
                    <td id="seat-29" data-name="29" class="all-seats">29</td>
                </tr>
                <tr id="fourth-row">
                <td class="space">&nbsp;</td>
                    <td id="seat-30" data-name="30" class="all-seats">30</td>
                   
                    <td id="seat-31" data-name="31" class="all-seats">31</td>
                    <td id="seat-32" data-name="32" class="all-seats">32</td>
                    <td id="seat-33" data-name="33" class="all-seats">33</td>
                    <td id="seat-34" data-name="34" class="all-seats">34</td>
                    <td id="seat-35" data-name="35" class="all-seats">35</td>
                    <td id="seat-36" data-name="36" class="all-seats">36</td>

                    <td id="seat-37" data-name="37" class="all-seats">37</td>
                    <td id="seat-38" data-name="38" class="all-seats">38</td>
                </tr>
            </table>
        </div>

        <div class="input-container">
            <label for="seat_no" class="form-label">
                Seat No. Selected
            </label>
            <input type="text" placeholder="Seat Number" class="form-input" required name="seat_no" id="seat_no" />
        </div>
<button class="btn"  type="submit">Book</button>

    </form>


    <script src="ajax/booking.js">

</script>

</section>