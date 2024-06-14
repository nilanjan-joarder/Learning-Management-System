function toggleLogout() {
    var logoutDiv = document.getElementById("logout");
    if (logoutDiv.style.display === "none") {
      logoutDiv.style.display = "block";
      logoutDiv.style.visibility = "visible";

    } else {
      logoutDiv.style.display = "none";
      logoutDiv.style.visibility = "hidden";
    }
  }


  const daysTag = document.querySelector(".days"),
currentDate = document.querySelector(".current-date"),
prevNextIcon = document.querySelectorAll(".icons span");
// getting new date, current year and month
let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();
// storing full name of all months in array
const months = ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];
const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";
    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }
    for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                     && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }
    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
    daysTag.innerHTML = liTag;
}
renderCalendar();
prevNextIcon.forEach(icon => { // getting prev and next icons
    icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
        if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
            // creating a new date of current year & month and pass it as date value
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear(); // updating current year with new date year
            currMonth = date.getMonth(); // updating current month with new date month
        } else {
            date = new Date(); // pass the current date as date value
        }
        renderCalendar(); // calling renderCalendar function
    });
});


function move() {
    var elem = document.getElementById("myBar");   
    var width = 0;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++; 
            elem.style.width = width + '%'; 
            elem.innerHTML = width * 1 + '%';
        }
    }
}
move();


function toggleFavorite() {
    var btn = document.querySelector('.favorite-btn');
    btn.classList.toggle('selected');
  }






  function storeenroll(id){
    
    var courses = JSON.parse(localStorage.getItem("id")) || [];
    courses.push(id);

    courses=JSON.stringify(courses);
    localStorage.setItem("id",courses);
    window.location.href = "purchased.php";
    alert("Successfully Purchased! Click 'OK' to visit your purchased courses");
   
   

}

function showenroll()
{
    var courses = JSON.parse(localStorage.getItem("id")) || [];

    for(var i=0;i<courses.length;i++)
    {
        console.log(courses[i]+"2");
        var div=document.getElementById(courses[i]+"2");
        div.style.visibility="visible";
        div.style.display="block";
    }


}



function showvideo(){
    var video = document.getElementById('videorecording-div');
    var note= document.getElementById('class-notes-div');
    video.style.display="block";
    note.style.display="none";
    document.getElementById('classnotes').style.textDecoration = "underline";
    document.getElementById('classrecord').style.textDecoration = "none";


}

function shownote(){
    var video = document.getElementById('videorecording-div');
    var note= document.getElementById('class-notes-div');
    video.style.display="none";
    note.style.display="block";
    document.getElementById('classnotes').style.textDecoration = "none";
    document.getElementById('classrecord').style.textDecoration = "underline";

}