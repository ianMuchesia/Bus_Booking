<?php 
include_once "../models/booking.php";

if(isset($_GET['id'])){
	$pass_id = $_GET['id'];

	$passenger = single_customer($pass_id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/style.css" type="text/css">
 
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<title>Bus</title>
</head>
<body>


<main id="">
		<!-- NAVBAR -->
		<nav>
			
			<!-- <h3>Bus Booking System</h3> -->
			
		</nav>
		<!-- NAVBAR -->



<div id="invoice-POS">

	<center id="top">
		<div class="logo"></div>
		<div class="info">
			<h2>Bus Services Inc</h2>
		</div><!--End Info-->
	</center><!--End InvoiceTop-->

	<div id="mid">
		<div class="info">
			<h2>Contact Info</h2>
			<p>
				
				Phone : 0<?=$passenger['contact']?></br>
			</p>
		</div>
	</div><!--End Invoice Mid-->

	<div id="bot">

		<div id="table">
			<table>
				<tr class="tabletitle">
					<td class="item">
						<h2>Passenger Name</h2>
					</td>
					<td class="Hours">
						<h2><?=$passenger['customer_name']?></h2>
					</td>
					
				</tr>

				<tr class="service">
					<td class="tableitem">
						<p class="itemtext">Contact</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">05220500</p>
					</td>
					
				</tr>


				<tr class="tabletitle">
					<td class="item">
						<h2>Route</h2>
					</td>
					<td class="Hours">
						<h2><?=$passenger['destination_1']. ' to '.$passenger['destination_2'];?></h2>
					</td>
					
				</tr>


				<tr class="service">
					<td class="tableitem">
						<p class="itemtext">Seat No</p>
					</td>
					<td class="tableitem">
						<p class="itemtext"><?=$passenger['seat_no']?></p>
					</td>
					
				</tr>
				<tr class="service">
					<td class="tableitem">
						<p class="itemtext">Booking Date</p>
					</td>
					<td class="tableitem">
						<p class="itemtext"><?=$passenger['booking_date']?></p>
					</td>
					
				</tr>

				<tr class="tabletitle">
					<td class="item">
						<h2>Departure Date</h2>
					</td>
					<td class="Hours">
						<h2><?=$passenger['date']?></h2>
					</td>
					
				</tr>

				<tr class="service">
					<td class="tableitem">
						<p class="itemtext">Departure Time</p>
					</td>
					<td class="tableitem">
						<p class="itemtext"><?=$passenger['departure_time']?></p>
					</td>
					
				</tr>



				

				



				<tr class="tabletitle">
					
					<td class="Rate">
						<h2>tax</h2>
					</td>
					<td class="payment">
						<h2>Ksh. 00.00</h2>
					</td>
				</tr>

				<tr class="tabletitle">
					
					<td class="Rate">
						<h2>Total</h2>
					</td>
					<td class="payment">
						<h2>Ksh. <?=$passenger['amount']?></h2>
					</td>
				</tr>

			</table>
		</div><!--End Table-->

		<div id="legalcopy">
			<p class="legal"><strong>Thank you for Travelling with us!</strong>  Arrive 30 minutes earlier before departure time
			</p>
		</div>

	</div><!--End InvoiceBot-->
</div><!--End Invoice-->



<button class="btn no-print" style="margin-top:50px;margin-left:48%;">PRINT</button><br>
<a href="../?action=booking_customer" style="margin-top:50px;margin-left:48%;" class="no-print btn btn-success">Back</a>
<script>
	const printBtn = document.querySelector("button");

   printBtn.addEventListener("click", () => window.print());
</script>
<?php include "../views/footer.php"; ?>