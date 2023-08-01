
//Booking Details
let dateDetails = document.getElementById("date-details")
 dateDetails.value= new Date()
  .toISOString()
  .split("T")[0];

const routeDetails = document.getElementById("route-details")


routeDetails.addEventListener('change', loadBookingDetails)
dateDetails.addEventListener('change',loadBookingDetails)
  function loadBookingDetails(){



    const xhr = new XMLHttpRequest();
    xhr.open("GET", `ajax/ajax.php?dateDetails=${dateDetails.value}&routeDetails=${routeDetails.value}`,true)

    xhr.onload = function(){
      if(this.status === 200){
        const response = JSON.parse(this.responseText)

        document.querySelector('#booking-details').innerHTML = response.map(item=>(
            `<tr>
            <td>${item.seat_no}</td>
           
            <td>${item.customer_name}</td>
            <td>${item.id_no}</td>
            <td>${item.destination_1} - ${item.destination_2}</td>
            <td>Ksh. ${item.amount}</td>
            <td>Ksh. ${item.booking_date}</td>
            <tr>`
        )) 
      }
    }
    xhr.send();
  }
