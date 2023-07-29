<section class="section-dashboard">
    <div class="head-title">
        <div class="left">
            <h1>Dashbard</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Home</a>
                </li>
            </ul>
        </div>
       
        <a  href=".?action=add" class="btn-download">
            <i class='bx bxs-cloud-upload'></i>
            <span class="text">ADD BUS</span>
        </a>
    </div>

    <ul class="box-info">
        <li>
            <em class=" fa fa-xl fa-bus box-info-icons  "></em>
            <span class="text">
                <h3><?= $buses ?></h3>
                <p>Buses</p>
            </span>
        </li>
        <li>
            <i class=" fa fa-xl fa-bookmark box-info-icons"></i>
            <span class="text">
                <h3><?= $bookings ?></h3>
                <p>Total Booked</p>
            </span>
        </li>
       
        <li>
        <em class="fa fa-xl fa-road box-info-icons " ></em>
            <span class="text">
            <h3><?=$routes ?></h3>
						<p>Routes</p>
            </span>
        </li>
        <li>
        <em class="fa fa-xl fa-users box-info-icons " ></em>
            <span class="text">
            <h3><?=$customers?></h3>
						<p>Total Customers</p>
            </span>
        </li>
        
        <li>
            <em class="fa fa-xl fa-check-circle box-info-icons  "></em>
            <span class="text">
            <h3><?= $seats?></h3>
						<p>Total Seats</p>
            </span>
        </li>
        <li>
            <em class="fa fa-xl fa-minus-circle box-info-icons  "></em>
            <span class="text">
            <h3><?= $emptySeats?></h3>
						<p>Empty Seats</p>
            </span>
        </li>
    </ul>



</section>