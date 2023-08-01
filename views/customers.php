<section class="section-dashboard">
    <div class="head-title">
        <div class="left">
            <h1>All Customers</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">All Customers</a>
                </li>
            </ul>
        </div>
        <a href=".?action=add_route" class="btn-download">
            <i class='bx bxs-cloud-upload'></i>
            <span class="text">ADD ROUTE/BUS</span>
        </a>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID No</th>
                    <th>Name</th>
                    <th>Travel Date</th>
                    <th>Seat No</th>
                    <th>Route</th>
                    <th>Fare Amount</th>
                </tr>
            </thead>
            <tbody>
             
                    <?php foreach($customers as $customer): ?>
                        <tr>
                    <td><?=$customer['id_no']?></td>
                    <td><?=$customer['customer_name']?></td>
                    <td><?=$customer['date']?></td>
                    <td><?=$customer['seat_no']?></td>
                    <td><?=$customer['destination_1'] . ' to ' . $customer['destination_2'];?></td>
                    <td><?='Ksh. ' . $customer['amount']?></td>
                    </tr>
                    <?php endforeach; ?>

               
                
            </tbody>
        </table>
    </div>

</section>