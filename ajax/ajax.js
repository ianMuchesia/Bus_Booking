
const determineEmptySeats = (start, end, seatsArray)=>{
    const seats = seats
   let output = '';
    for(let i = start; i<=end;i++){
        if(seats.includes(i)){
            output+=`<td id="seat-${i}" data-name="${i}" class="selected">${i}</td>`
        }else{
            output+=`<td id="seat-${i}" data-name="${i}">${i}</td>`
        }
    }




}
  

//Travel Date
const travelDate = document.querySelector('#TravelDate')

travelDate.addEventListener('change', ()=>{


    const xhr = new XMLHttpRequest();
    const selectedDate = travelDate.value;

    xhr.open('GET', 'ajax/ajax.php?date='+selectedDate ,true);

    xhr.onload = function(){
       // const bookedSeats = JSON.parse(this.responseText)
        console.log(this.responseText)
    }
    xhr.send();
    
})