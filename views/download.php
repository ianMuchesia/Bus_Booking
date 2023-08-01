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
			<h2>SBISTechs Inc</h2>
		</div><!--End Info-->
	</center><!--End InvoiceTop-->

	<div id="mid">
		<div class="info">
			<h2>Contact Info</h2>
			<p>
				Address : street city, state 0000</br>
				Email : JohnDoe@gmail.com</br>
				Phone : 555-555-5555</br>
			</p>
		</div>
	</div><!--End Invoice Mid-->

	<div id="bot">

		<div id="table">
			<table>
				<tr class="tabletitle">
					<td class="item">
						<h2>Item</h2>
					</td>
					<td class="Hours">
						<h2>Qty</h2>
					</td>
					<td class="Rate">
						<h2>Sub Total</h2>
					</td>
				</tr>

				<tr class="service">
					<td class="tableitem">
						<p class="itemtext">Communication</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">5</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">$375.00</p>
					</td>
				</tr>

				<tr class="service">
					<td class="tableitem">
						<p class="itemtext">Asset Gathering</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">3</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">$225.00</p>
					</td>
				</tr>

				<tr class="service">
					<td class="tableitem">
						<p class="itemtext">Design Development</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">5</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">$375.00</p>
					</td>
				</tr>

				<tr class="service">
					<td class="tableitem">
						<p class="itemtext">Animation</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">20</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">$1500.00</p>
					</td>
				</tr>

				<tr class="service">
					<td class="tableitem">
						<p class="itemtext">Animation Revisions</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">10</p>
					</td>
					<td class="tableitem">
						<p class="itemtext">$750.00</p>
					</td>
				</tr>


				<tr class="tabletitle">
					<td></td>
					<td class="Rate">
						<h2>tax</h2>
					</td>
					<td class="payment">
						<h2>$419.25</h2>
					</td>
				</tr>

				<tr class="tabletitle">
					<td></td>
					<td class="Rate">
						<h2>Total</h2>
					</td>
					<td class="payment">
						<h2>$3,644.25</h2>
					</td>
				</tr>

			</table>
		</div><!--End Table-->

		<div id="legalcopy">
			<p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.
			</p>
		</div>

	</div><!--End InvoiceBot-->
</div><!--End Invoice-->

<?php include "../views/footer.php"; ?>