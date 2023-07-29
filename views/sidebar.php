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
			<li  class="<? echo $action==='room'?'active':''?>">
			<a href=".?action=room"><em class="fa fa-bed">&nbsp;</em>
                    Manage Rooms
                </a>
			</li>
			<li  class="<? echo $action==='staff'?'active':''?>">
			<a href=".?action=staff"><em class="fa fa-users">&nbsp;</em>
                    Staff Section
                </a>
			</li>
			<li  class="<? echo $action==='complaints'?'active':''?>">
			<a href=".?action=complaints"><em class="fa fa-comments">&nbsp;</em>
                    Manage Complaints
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

