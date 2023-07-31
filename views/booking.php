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
        <a href=".?action=add" class="btn-download">
            <i class='bx bxs-cloud-upload'></i>
            <span class="text">ADD BUS</span>
        </a>
    </div>


    <form class="form">
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
                Customer Name
            </label>
            <input type="text" placeholder="<NAME>" class="form-input" required name="customer_name" id="customer_name" />
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
                <tr>
                    <td id="seat-1" data-name="1">1</td>
                    <td id="seat-2" data-name="2">2</td>
                    <td id="seat-3" data-name="3">3</td>
                    <td id="seat-4" data-name="4">4</td>
                    <td id="seat-5" data-name="5">5</td>
                    <td id="seat-6" data-name="6">6</td>
                    <td id="seat-7" data-name="7">7</td>
                    <td id="seat-8" data-name="8">8</td>
                    <td id="seat-9" data-name="9">9</td>
                    <td id="seat-10" data-name="10">10</td>
                </tr>
                <tr>
                    <td id="seat-11" data-name="11">11</td>
                    <td id="seat-12" data-name="12">12</td>
                    <td id="seat-131" data-name="13">13</td>
                    <td id="seat-14" data-name="14">14</td>
                    <td id="seat-15" data-name="15">15</td>
                    <td id="seat-16" data-name="16">16</td>
                    <td id="seat-17" data-name="17">17</td>
                    <td id="seat-18" data-name="18">18</td>
                    <td id="seat-19" data-name="19">19</td>
                    <td id="seat-20" data-name="20">20</td>
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
                <tr>
                    <td id="seat-21" data-name="21">21</td>
                    <td class="space">&nbsp;</td>
                    <td id="seat-22" data-name="22">22</td>
                    <td id="seat-23" data-name="23">23</td>
                    <td id="seat-24" data-name="24">24</td>
                    <td id="seat-25" data-name="25">25</td>
                    <td id="seat-26" data-name="26">26</td>
                    <td id="seat-27" data-name="27">27</td>

                    <td id="seat-28" data-name="28">28</td>
                    <td id="seat-29" data-name="29">29</td>
                </tr>
                <tr>
                    <td id="seat-30" data-name="30">30</td>
                    <td class="space">&nbsp;</td>
                    <td id="seat-31" data-name="31">31</td>
                    <td id="seat-32" data-name="32">32</td>
                    <td id="seat-33" data-name="33">33</td>
                    <td id="seat-34" data-name="34">34</td>
                    <td id="seat-35" data-name="35">35</td>
                    <td id="seat-36" data-name="36">36</td>

                    <td id="seat-37" data-name="37">37</td>
                    <td id="seat-38" data-name="38">38</td>
                </tr>
            </table>
        </div>
<button class="btn"  type="submit">Book</button>

    </form>




</section>