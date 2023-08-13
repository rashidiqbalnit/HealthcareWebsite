let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header=document.querySelector('.header');

menu.onclick = () =>{
menu.classList.toggle('fa-times');
navbar.classList.toggle('active');
}








/*it is used for team section*/
var swiper = new Swiper(".team-slider",{
  loop:true,
  grabCursor:true,
  spaceBetween:20,
  breakpoints: {
      0: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      },
      991: {
          slidesPerView: 3,
      },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});





/* it is for automatic scrolling image/
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}*/


