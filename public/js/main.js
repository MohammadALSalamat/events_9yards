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