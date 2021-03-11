@extends('layouts.front-layout.main_desgin_project')
@section('content')

<style>
    HTML CSS JSResult Skip Results Iframe
EDIT ON
@import url(https://fonts.googleapis.com/css?family=Anaheim);

*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  box-sizing: border-box;
}
*:before,
*:after{
  box-sizing: border-box;
}

body{
  background-image: radial-gradient(white 30%, black 70%);
}
h1{
  display: table;
  margin: 5% auto 0;
  text-transform: uppercase;
  font-family: 'Anaheim', sans-serif;
  font-size: 4em;
  font-weight: 400;
  text-shadow: 0 1px white, 0 2px black;
}
.container1{
  margin: 4% auto;
  width: 210px;
  height: 140px;
  position: relative;
  perspective: 1000px;
}
#carousel{
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  animation: rotation 20s infinite linear;
}
#carousel:hover{
  animation-play-state: paused;
}
#carousel figure{
  display: block;
  position: absolute;
  width: 186px;
  height: 116px;
  left: 10px;
  top: 10px;
  background: black;
  overflow: hidden;
  border: solid 5px black;
}
#carousel figure:nth-child(1){transform: rotateY(0deg) translateZ(288px);}
#carousel figure:nth-child(2) { transform: rotateY(40deg) translateZ(288px);}
#carousel figure:nth-child(3) { transform: rotateY(80deg) translateZ(288px);}
#carousel figure:nth-child(4) { transform: rotateY(120deg) translateZ(288px);}
#carousel figure:nth-child(5) { transform: rotateY(160deg) translateZ(288px);}
#carousel figure:nth-child(6) { transform: rotateY(200deg) translateZ(288px);}
#carousel figure:nth-child(7) { transform: rotateY(240deg) translateZ(288px);}
#carousel figure:nth-child(8) { transform: rotateY(280deg) translateZ(288px);}
#carousel figure:nth-child(9) { transform: rotateY(320deg) translateZ(288px);}

img{
  -webkit-filter: grayscale(1);
  cursor: pointer;
  transition: all .5s ease;
  z-index: 9;
}
img:hover{
  -webkit-filter: grayscale(0);
  transform: scale(1.2,1.2);
  z-index: 10;
}

@keyframes rotation{
  from{
    transform: rotateY(0deg);
  }
  to{
    transform: rotateY(360deg);
  }
}
.bg-images{
    background: radial-gradient(gray 30%, black 70%);
}
/* todo: animate letters */
.letter {
  display: inline-block;
  opacity: 0;
  -webkit-animation: fadeIn 2s, moveDown 2s;
          animation: fadeIn 2s, moveDown 2s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-direction: alternate;
          animation-direction: alternate;
  -webkit-animation-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);
          animation-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);
}

.letter:nth-child(1) {
  -webkit-animation-delay: 0;
          animation-delay: 0;
}

.letter:nth-child(2) {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}

.letter:nth-child(3) {
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}

.letter:nth-child(4) {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}

.letter:nth-child(5) {
  -webkit-animation-delay: 1.2s;
          animation-delay: 1.2s;
}

.letter:nth-child(6) {
  -webkit-animation-delay: 1.4s;
          animation-delay: 1.4s;
}


@-webkit-keyframes fadeIn {
  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes moveDown {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}
@keyframes moveDown {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}


/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio .portfolio-item .portfolio-img {
  overflow: hidden;
}

.portfolio .portfolio-item .portfolio-img img {
  transition: all 0.8s ease-in-out;
}

.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 15px;
  bottom: 0;
  z-index: 3;
  right: 15px;
  transition: all ease-in-out 0.3s;
  background: rgba(0, 0, 0, 0.5);
  padding: 10px 15px;
}

.portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  color: #fff;
  font-weight: 600;
  color: #fff;
  margin-bottom: 0px;
}

.portfolio .portfolio-item .portfolio-info p {
  color: #fedac0;
  font-size: 14px;
  margin-bottom: 0;
}

.portfolio .portfolio-item .portfolio-info .preview-link, .portfolio .portfolio-item .portfolio-info .details-link {
  position: absolute;
  right: 40px;
  font-size: 24px;
  top: calc(50% - 18px);
  color: #fff;
  transition: 0.3s;
}

.portfolio .portfolio-item .portfolio-info .preview-link:hover, .portfolio .portfolio-item .portfolio-info .details-link:hover {
  color: #fd9f5b;
}

.portfolio .portfolio-item .portfolio-info .details-link {
  right: 10px;
}

.portfolio .portfolio-item .portfolio-links {
  opacity: 0;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 3;
  position: absolute;
  transition: all ease-in-out 0.3s;
}

.portfolio .portfolio-item .portfolio-links a {
  color: #fff;
  margin: 0 2px;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-item .portfolio-links a:hover {
  color: #fd9f5b;
}

.portfolio .portfolio-item:hover .portfolio-img img {
  transform: scale(1.2);
}

.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
}


/* style new */
/*
** Layout, Text & Colors
*/



/* The cover (expanding background) */
.cover {
  position: fixed;
  background: #EB5160;
  z-index: 100;
  transform-origin: 50% 50%;
}

/* The open page content */
.open-content {
  width: 100%;
  z-index: 110;
  position: absolute;
  opacity: 0;
  pointer-events: none;
}

.open-content img {
  position: relative;
  width: 90%;
  margin-left: 3%;
  margin-top: 20px;
  z-index: 5;
}

.open-content .text {
  background: #fff;
  margin-top: -56%;
  padding: 60% 5% 5% 5%;
  width: 80%;
  margin-left: 5%;
  margin-bottom: 5%;
}

.open-content .text h1, .open-content .text p {
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}

.close-content {
  display: block;
  position: absolute;
  right: 12px;
  top: 12px;
  width: 30px;
  height: 30px;
}

.close-content span {
  background: #222;
  width: 30px;
  height: 6px;
  display: block;
  position: absolute;
  top: 14px;
}

.x-1 {
  transform: rotate(45deg);
}

.x-2 {
  transform: rotate(-45deg);
}

/*
** Transitions
*/

.card {
  transition: opacity 200ms linear 320ms, transform 200ms ease-out 320ms;
}

.border {
  transition: opacity 200ms linear, transform 200ms ease-out;
}

.card img {
  transition: opacity 200ms linear 0ms, transform 200ms ease-in 0ms;
}

.card h1 {
  transform: translate3d(20%, 0px, 0px);
  transition: opacity 200ms linear 120ms, transform 200ms ease-in 120ms;
}

/* Clicked card */
.card.clicked img {
  transform: translate3d(0px, -40px, 0px);
  opacity: 0;
}

.card.clicked .border {
  opacity: 0;
  transform: scale(1.3);
}

.card.out, .card.out img {
  transform: translate3d(0px, -40px, 0px);
  opacity: 0;
}

.card.out h1, .card.clicked h1 {
  transform: translate3d(20%, -40px, 0px);
  opacity: 0;
}

.cover {
  transition: transform 300ms ease-in-out;
}

.open-content {
  transition: opacity 200ms linear 0ms;
}

.open-content.open {
  opacity: 1;
  pointer-events: all;
  transition-delay: 1000ms;
}

/*
** Media Queries
*/

@media screen and (max-width: 600px) {
  .card-column {
    width: 90%;
  }

  .column-1 {
    padding-top: 0px;
  }

  .open-content img {
    margin-top: 40px;
  }
}
</style>

<h1>
    <span class="letter">9</span>
    <span class="letter">Y</span>
    <span class="letter">A</span>
    <span class="letter">R</span>
    <span class="letter">D</span>
    <span class="letter">S</span>
</h1>

<h1> 9Yards Events </h1>
  <div class="container1">
    <div id="carousel">
        @foreach ($Projects as $sections)
        @if($sections->status==1)
           @foreach ($sections->projectImages as $image)
            @if($image->status == 1)
            <figure> <img src="{{ asset('img/projects/'.$image->Image) }}" alt="{{ $image->Image }}" width="100%"></figure>
            @else
            <img src="" alt="" style="display: none">
            @endif
            @endforeach
        @else
        <div style="display: none">
        </div>
        @endif
        @endforeach
    </div>
  </div>

 <!--
  Please note: this code is in no way ready to be used as is in production on your website. It will need to be adapted to be cross browser compliant & accessible. I just wanted to share how one might go about this effect with CSS & JS and no other dependencies
-->
{{-- <div class="container">
    <div class="card-column column-0">
      <div class="card card-color-0">
        <div class="border"></div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-00.jpg" />
        <h1>Hey now, you're an allstar</h1>
      </div>
      <div class="card card-color-2">
        <div class="border"></div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-02.jpg" />
        <h1>Hey now, you're a rock star</h1>
      </div>
    </div>
    <div class="card-column column-1">
      <div class="card card-color-1">
        <div class="border"></div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-01.jpg" />
        <h1>Get your game on, go play</h1>
      </div>
      <div class="card card-color-3">
        <div class="border"></div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-03.jpg" />
        <h1>Get the show on, get paid</h1>
      </div>
    </div>
  </div>

  <div id="cover" class="cover"></div>

  <div id="open-content" class="open-content">
    <a href="#" id="close-content" class="close-content"><span class="x-1"></span><span class="x-2"></span></a>
    <img id="open-content-image" src="" />
    <div class="text" id="open-content-text">
    </div>
  </div> --}}
  <!-- Second option -->

<div class="bg-images">
  <div class="row">
    <!-- this section is to show all th project s from the database -->
     @foreach ($Projects as $sections)
     @if($sections->status==1)
     <div class="card1">
     <div class="col-3">
        @foreach ($sections->projectImages as $image)
         @if($image->status == 1)
         <img src="{{ asset('img/projects/'.$image->Image) }}" alt="{{ $image->Image }}" width="100%">
         @else
         <img src="" alt="" style="display: none">
         @endif
         @endforeach
     </div>
     @else
     <div style="display: none">
     </div>
     @endif
     @endforeach
  </div>
 </div>
</div>

@endsection

<script>
  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);

// listing vars here so they're in the global scope
var cards, nCards, cover, openContent, openContentText, pageIsOpen = false,
    openContentImage, closeContent, windowWidth, windowHeight, currentCard;

// initiate the process
init();

function init() {
  resize();
  selectElements();
  attachListeners();
}

// select all the elements in the DOM that are going to be used
function selectElements() {
  cards = document.getElementsByClassName('card1'),
  nCards = cards.length,
  cover = document.getElementById('cover'),
  openContent = document.getElementById('open-content'),
  openContentText = document.getElementById('open-content-text'),
  openContentImage = document.getElementById('open-content-image')
  closeContent = document.getElementById('close-content');
}

/* Attaching three event listeners here:
  - a click event listener for each card
  - a click event listener to the close button
  - a resize event listener on the window
*/
function attachListeners() {
  for (var i = 0; i < nCards; i++) {
    attachListenerToCard(i);
  }
  closeContent.addEventListener('click', onCloseClick);
  window.addEventListener('resize', resize);
}

function attachListenerToCard(i) {
  cards[i].addEventListener('click', function(e) {
    var card = getCardElement(e.target);
    onCardClick(card, i);
  })
}

/* When a card is clicked */
function onCardClick(card, i) {
  // set the current card
  currentCard = card;
  // add the 'clicked' class to the card, so it animates out
  currentCard.className += ' clicked';
  // animate the card 'cover' after a 500ms delay
  setTimeout(function() {animateCoverUp(currentCard)}, 500);
  // animate out the other cards
  animateOtherCards(currentCard, true);
  // add the open class to the page content
  openContent.className += ' open';
}

/*
* This effect is created by taking a separate 'cover' div, placing
* it in the same position as the clicked card, and animating it to
* become the background of the opened 'page'.
* It looks like the card itself is animating in to the background,
* but doing it this way is more performant (because the cover div is
* absolutely positioned and has no children), and there's just less
* having to deal with z-index and other elements in the card
*/
function animateCoverUp(card) {
  // get the position of the clicked card
  var cardPosition = card.getBoundingClientRect();
  // get the style of the clicked card
  var cardStyle = getComputedStyle(card);
  setCoverPosition(cardPosition);
  setCoverColor(cardStyle);
  scaleCoverToFillWindow(cardPosition);
  // update the content of the opened page
  openContentText.innerHTML = '<h1>'+card.children[2].textContent+'</h1>'+paragraphText;
  openContentImage.src = card.children[1].src;
  setTimeout(function() {
    // update the scroll position to 0 (so it is at the top of the 'opened' page)
    window.scroll(0, 0);
    // set page to open
    pageIsOpen = true;
  }, 300);
}

function animateCoverBack(card) {
  var cardPosition = card.getBoundingClientRect();
  // the original card may be in a different position, because of scrolling, so the cover position needs to be reset before scaling back down
  setCoverPosition(cardPosition);
  scaleCoverToFillWindow(cardPosition);
  // animate scale back to the card size and position
  cover.style.transform = 'scaleX('+1+') scaleY('+1+') translate3d('+(0)+'px, '+(0)+'px, 0px)';
  setTimeout(function() {
    // set content back to empty
    openContentText.innerHTML = '';
    openContentImage.src = '';
    // style the cover to 0x0 so it is hidden
    cover.style.width = '0px';
    cover.style.height = '0px';
    pageIsOpen = false;
    // remove the clicked class so the card animates back in
    currentCard.className = currentCard.className.replace(' clicked', '');
  }, 301);
}

function setCoverPosition(cardPosition) {
  // style the cover so it is in exactly the same position as the card
  cover.style.left = cardPosition.left + 'px';
  cover.style.top = cardPosition.top + 'px';
  cover.style.width = cardPosition.width + 'px';
  cover.style.height = cardPosition.height + 'px';
}

function setCoverColor(cardStyle) {
  // style the cover to be the same color as the card
  cover.style.backgroundColor = cardStyle.backgroundColor;
}

function scaleCoverToFillWindow(cardPosition) {
  // calculate the scale and position for the card to fill the page,
  var scaleX = windowWidth / cardPosition.width;
  var scaleY = windowHeight / cardPosition.height;
  var offsetX = (windowWidth / 2 - cardPosition.width / 2 - cardPosition.left) / scaleX;
  var offsetY = (windowHeight / 2 - cardPosition.height / 2 - cardPosition.top) / scaleY;
  // set the transform on the cover - it will animate because of the transition set on it in the CSS
  cover.style.transform = 'scaleX('+scaleX+') scaleY('+scaleY+') translate3d('+(offsetX)+'px, '+(offsetY)+'px, 0px)';
}

/* When the close is clicked */
function onCloseClick() {
  // remove the open class so the page content animates out
  openContent.className = openContent.className.replace(' open', '');
  // animate the cover back to the original position card and size
  animateCoverBack(currentCard);
  // animate in other cards
  animateOtherCards(currentCard, false);
}

function animateOtherCards(card, out) {
  var delay = 100;
  for (var i = 0; i < nCards; i++) {
    // animate cards on a stagger, 1 each 100ms
    if (cards[i] === card) continue;
    if (out) animateOutCard(cards[i], delay);
    else animateInCard(cards[i], delay);
    delay += 100;
  }
}

// animations on individual cards (by adding/removing card names)
function animateOutCard(card, delay) {
  setTimeout(function() {
    card.className += ' out';
   }, delay);
}

function animateInCard(card, delay) {
  setTimeout(function() {
    card.className = card.className.replace(' out', '');
  }, delay);
}

// this function searches up the DOM tree until it reaches the card element that has been clicked
function getCardElement(el) {
  if (el.className.indexOf('card ') > -1) return el;
  else return getCardElement(el.parentElement);
}

// resize function - records the window width and height
function resize() {
  if (pageIsOpen) {
    // update position of cover
    var cardPosition = currentCard.getBoundingClientRect();
    setCoverPosition(cardPosition);
    scaleCoverToFillWindow(cardPosition);
  }
  windowWidth = window.innerWidth;
  windowHeight = window.innerHeight;
}

var paragraphText = '<p>Somebody once told me the world is gonna roll me. I ain\'t the sharpest tool in the shed. She was looking kind of dumb with her finger and her thumb in the shape of an "L" on her forehead. Well the years start coming and they don\'t stop coming. Fed to the rules and I hit the ground running. Didn\'t make sense not to live for fun. Your brain gets smart but your head gets dumb. So much to do, so much to see. So what\'s wrong with taking the back streets? You\'ll never know if you don\'t go. You\'ll never shine if you don\'t glow.</p><p>Hey now, you\'re an all-star, get your game on, go play. Hey now, you\'re a rock star, get the show on, get paid. And all that glitters is gold. Only shooting stars break the mold.</p><p>It\'s a cool place and they say it gets colder. You\'re bundled up now, wait till you get older. But the meteor men beg to differ. Judging by the hole in the satellite picture. The ice we skate is getting pretty thin. The water\'s getting warm so you might as well swim. My world\'s on fire, how about yours? That\'s the way I like it and I never get bored.</p>';
</script>
