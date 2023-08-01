
//Booking Details
let dateDetails = document.getElementById("date-details")
const currentDate= new Date()
  .toISOString()
  .split("T")[0];
  dateDetails.value = currentDate
const routeDetails = document.getElementById("route-details")


//By wrapping the loadBookingDetails() function call inside an anonymous function, you ensure that the function is executed only when the event (change in this case) occurs, not immediately.
routeDetails.addEventListener('change', function () {
    loadBookingDetails(dateDetails.value, routeDetails.value);
  });
  
  dateDetails.addEventListener('change', function () {
    loadBookingDetails(dateDetails.value, routeDetails.value);
  });
  

  function loadBookingDetails(date, route){



    const xhr = new XMLHttpRequest();
    xhr.open("GET", `ajax/ajax.php?dateDetails=${date}&routeDetails=${route}`,true)

    xhr.onload = function(){
      if(this.status === 200){
      
        const response = JSON.parse(this.responseText)
        let output;
        if (response.length > 0){
         output =   response.map(item=>(
                `<tr>
                <td>${item.seat_no}</td>
               
                <td>${item.customer_name}</td>
                <td>${item.id_no}</td>
                <td>${item.destination_1} - ${item.destination_2}</td>
                <td>Ksh. ${item.amount}</td>
                <td>${item.booking_date}</td>
                <td><a href="views/download.php?id=${item.customer_id}" class="btn btn-warning">Print</td></td>
                <tr>`
            )).join("") 
        }else{
            output=`<h4 style="text-align:center; padding:2em 0em;">No Booked Seat Yet</h4>`
        }
        document.querySelector('#booking-details').innerHTML = output
      }
    }
    xhr.send();
  }

  loadBookingDetails(dateDetails.value,routeDetails.value)