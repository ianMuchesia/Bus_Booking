//route amount
const amountInput = document.querySelector('#route')

amountInput.addEventListener('change', ()=>{

    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'ajax/ajax.php?route='+amountInput.value,true)

    xhr.onload = function(){
        if(this.status === 200){
            const response = JSON.parse(this.responseText)
            document.querySelector("#amount").value = response.amount
        }
    }
    xhr.send()
})





const determineEmptySeats = (start, end, seatsArray) => {
  const seats = seatsArray;
  let output = "";
  for (let i = start; i <= end; i++) {
    if (seats.includes(i)) {
      output += `<td data-name="${i}" class="selected all-seats">${i}</td>`;
    } else {
      output += `<td class="seats all-seats" data-name="${i}">${i}</td>`;
    }
  }

  return output;
};

//Travel Date
const travelDate = document.querySelector("#TravelDate");
const firstrow = document.querySelector("#first-row");
const secondRow = document.querySelector("#second-row");
const thirdRow = document.querySelector("#third-row");
const fourthRow = document.querySelector("#fourth-row");

travelDate.addEventListener("change", () => {
  const xhr = new XMLHttpRequest();
  const selectedDate = travelDate.value;

  xhr.open("GET", "ajax/ajax.php?date=" + selectedDate, true);

  xhr.onload = function () {
    const bookedSeats = JSON.parse(this.responseText);
    console.log(bookedSeats);
    if (this.status === 200) {
      firstrow.innerHTML = determineEmptySeats(1, 10, bookedSeats);
      secondRow.innerHTML = determineEmptySeats(11, 20, bookedSeats);
      thirdRow.innerHTML =`<td class="space">&nbsp;</td>` + determineEmptySeats(21, 29, bookedSeats);
      fourthRow.innerHTML =`<td class="space">&nbsp;</td>` + determineEmptySeats(30, 38, bookedSeats);
    }
  };
  xhr.send();
});


//select seat 

document.querySelectorAll(".all-seats").forEach((element) => {
    element.addEventListener('click',function(){
        document.querySelector('#seat_no').value = "Seat " + this.innerHTML
    })
})



