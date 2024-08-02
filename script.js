let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick=() =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};
window.onscroll=() =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    loop:true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  })

  function togglePopup() {
    var popup = document.getElementById("popup");
    var content = document.getElementById("content");
    if (popup.style.display === "block") {
        popup.style.display = "none";
        content.classList.remove("blur-background");
    } else {
        popup.style.display = "block";
        content.classList.add("blur-background");
    }
}

// function togglePopup1(id) {
//     var popup1 = document.getElementById("popup1");
//     var content = document.getElementById("content");

//     var link = "delete_reservation.php?id="+id;
//     document.getElementById("deletelink").setAttribute("href",link);
//     console.log("test");
//     console.log(document.getElementById("deletelink").href);
//     // document.getElementById("deletelink").click()

//     if (popup1.style.display === "block") {
//         popup1.style.display = "none";
//         // content.classList.remove("blur-background");
//     } else {
//         popup1.style.display = "block";
//         // content.classList.add("blur-background");
//     }
// }


   
