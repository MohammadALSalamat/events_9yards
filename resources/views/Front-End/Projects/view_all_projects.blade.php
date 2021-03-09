<style>
    *,
*:before,
*:after {
  box-sizing: border-box;
}
.product-card-container {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 850px;
}
.product-card-container .product-card {
  width: 25em;
  height: 25em;
  background: #ccc;
  position: relative;
  padding: 2em;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  transform-style: preserve-3d;
}
.product-card-container .product-card:after {
  content: "";
  width: 100%;
  height: 10px;
  border-radius: 50%;
  position: absolute;
  left: 0;
  bottom: -60px;
  box-shadow: 0 20px 20px rgba(0, 0, 0, 0.3);
}
.product-card-container .product-card .info-icon-container {
  cursor: pointer;
  position: absolute;
  top: 0;
  left: 0;
  margin: 1em 1em;
  z-index: 3;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: translateZ(20px);
}
.product-card-container .product-card .info-icon-container:hover .info-icon .bar-1 {
  width: 45px;
}
.product-card-container .product-card .info-icon-container:hover .info-icon .bar-2 {
  width: 36px;
}
.product-card-container .product-card .info-icon-container:hover .info-icon .bar-3 {
  width: 30px;
}
.product-card-container .product-card .info-icon-container .info-icon {
  cursor: pointer;
  position: relative;
  background: red;
}
.product-card-container .product-card .info-icon-container .info-icon .bar-1,
.product-card-container .product-card .info-icon-container .info-icon .bar-2,
.product-card-container .product-card .info-icon-container .info-icon .bar-3 {
  background: white;
  height: 1px;
  transition: all 0.4s ease;
}
.product-card-container .product-card .info-icon-container .info-icon .bar-2 {
  width: 30px;
}
.product-card-container .product-card .info-icon-container .info-icon .bar-1,
.product-card-container .product-card .info-icon-container .info-icon .bar-3 {
  width: 20px;
  position: absolute;
}
.product-card-container .product-card .info-icon-container .info-icon .bar-1 {
  top: 10px;
}
.product-card-container .product-card .info-icon-container .info-icon .bar-3 {
  bottom: 10px;
}
.product-card-container .product-card .info-icon-container p {
  font-size: 0.8rem;
  font-weight: 300;
  letter-spacing: 0.2rem;
  margin-left: 30px;
}
.product-card-container .product-card::before {
  content: "";
  background: rgba(0, 0, 0, 0.8);
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 2;
}
.product-card-container .product-card .header {
  display: flex;
  flex-direction: column;
  z-index: 2;
  position: relative;
  color: white;
}
.product-card-container .product-card .header h1 {
  font-size: 2em;
  text-transform: uppercase;
  font-weight: 700;
  margin-bottom: 1rem;
  transform: translateZ(50px);
}
.product-card-container .product-card .header button {
  color: white;
  border-radius: 50px;
  border: 1px solid white;
  background: rgba(0, 0, 0, 0);
  width: 15em;
  height: 3em;
  margin: 0 auto;
  text-transform: uppercase;
  letter-spacing: 0.15rem;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  margin-bottom: 1rem;
  transition: all 0.3s ease-in-out;
  transform: translateZ(10px);
}
.product-card-container .product-card .header button:hover {
  transform: translateZ(100px);
  background: white;
  color: black;
}
.product-card-container .product-card .header button:focus {
  outline: none;
}
.product-card-container .product-card .header button .fa-shopping-bag {
  margin-left: 1rem;
  transform: translateZ(50px);
}
.product-card-container .product-card .header em {
  font-style: italic;
  text-align: center;
  font-weight: 300;
  transform: translateZ(20px);
}
.product-card-container .product-card .product-img {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  bottom: -5rem;
  z-index: 3;
  transition: all 0.3s ease-in-out;
  perspective: 850px;
  transform: translateZ(40px);
}
.product-card-container .product-card .product-img img {
  width: 15em;
  filter: drop-shadow(0px 5px 5px rgba(0, 0, 0, 0.5));
}
.product-card-container .product-card .product-img:after {
  content: "";
  width: 100%;
  height: 10px;
  border-radius: 50%;
  position: absolute;
  left: 0;
  bottom: -10px;
}
.product-card-container .product-card .bg-img {
  width: 100%;
  height: 100%;
  overflow: hidden;
  position: absolute;
}
.product-card-container .product-card .bg-img img {
  width: 25em;
  z-index: 1;
}

.coords, .coords-2 {
  position: absolute;
  bottom: 0;
  left: 0;
  margin: 1rem;
}

.coords-2 {
  margin-bottom: 2rem;
}
</style>


<div class="product-card-container">
	<div class="product-card">
		<div class="info-icon-container">
			<div class="info-icon">
				<div class="bar-1"></div>
				<div class="bar-2"></div>
				<div class="bar-3"></div>
			</div>
<!-- 			<p>Customize</p> -->
		</div>

		<div class="header">
			<h1>Headphones</h1>
			<button>Add To Bag <i class="fa fa-shopping-bag"></i></button>
			<em>$70.00</em>
		</div> <!-- end of header -->
		<div class="product-img">
			<img src="https://goo.gl/HfpFyP" alt="" />
		</div>
		<div class="bg-img">
			<img src="https://goo.gl/U7XMDL" alt="" />
		</div>

	</div> <!-- end of product-card -->
</div><!-- end of product-card-container -->

<!-- <p class="coords"></p>
<p class="coords-2"></p> -->
<script>
    const card = $('.product-card'),
			coord = $('.coords'),
			coord2 = $('.coords-2')

$(document).on('mousemove', function(e) {
	let ax = -($(window).innerWidth()/2 - e.pageX)/20,
			ay = ($(window).innerHeight()/2 - e.pageY)/20
	card.css({
		transform: `rotateY(${ax}deg) rotateX(${ay}deg)`
	});
	// coord.text(`ax: ${ax}, ay: ${ay}`)
	coord.text(`half x: ${-($(window).innerWidth()/2 - e.pageX)}`)
	coord2.text(`pageX: ${e.pageX}, pageY: ${e.pageY}`)
})
</script>
