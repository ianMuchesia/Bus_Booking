<?php   // $action =  filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);?>

<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-bus'></i>
			<span class="text"> Bus Booking System</span>
		</a>
		<ul class="side-menu top">
			<li class="<? echo $action==='dashboard'?'active':''?>">
			<a href=".?action=dashboard"><em class="fa fa-dashboard">&nbsp;</em>
					
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li  class="<? echo $action==='bookings'?'active':''?>">
			<a href=".?action=bookings"><em class="fa fa-calendar">&nbsp;</em>
                    Book Seat
                </a>
			</li>
			<li  class="<? echo $action==='route'?'active':''?>">
			<a href=".?action=route"><em class="fa fa-bed">&nbsp;</em>
                    Add Route/Bus
                </a>
			</li>
			<li  class="<? echo $action==='booking_customer'?'active':''?>">
			<a href=".?action=booking_customer"><em class="fa fa-users">&nbsp;</em>
                Bookings
                </a>
			</li>
			<li  class="<? echo $action==='customers'?'active':''?>">
			<a href=".?action=customers"><em class="fa fa-comments">&nbsp;</em>
                    All Customer Records
                </a>
			</li>
			<li  class="<? echo $action==='logout'?'active':''?>">
			<a href=".?action=logout"><em class="fa fa-user">&nbsp;</em>
                    Logout
                </a>
			</li>
		</ul>
		<ul class="side-menu">
			<!-- <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li> -->
		</ul>
	</section>
	<!-- SIDEBAR -->

