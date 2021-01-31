//####################### Header scroll down function  ########################
// When the user scrolls the page, execute myFunction
window.onscroll = function() { myFunction() };

// Get the header
var header = document.getElementById("headre-fixed");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {

    if (window.pageYOffset > sticky) {
        header.classList.add("headre-fixed");
    } else {

        header.classList.remove("headre-fixed");
    }
}

function getRandomSize(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}

var allImages = "";

for (var i = 0; i < 16; i++) {
    var width = getRandomSize(200, 400);
    var height = getRandomSize(200, 400);
    allImages += '<img src="https://placekitten.com/' + width + '/' + height + '" alt="pretty kitty">';
}

$('#photos').append(allImages);


// auto slide show leading page

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

// auto slide show home page

var slideIndex = 0;
homeshowSlides();

function homeshowSlides() {
    var i;
    var slides = document.getElementsByClassName("HomemySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(homeshowSlides, 2000); // Change image every 2 seconds
}
