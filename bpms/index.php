<!doctype html>
<html lang="en">
  <head>
   
    <title>Parlour Management System | Home Page</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Alkatra&display=swap');
      .banner-text{
    text-align: center;
    color: white;
    padding-top: 180px;
}
.banner-text h1{
    font-size: 80px;
    font-family: 'Alkatra', cursive;
}
.banner-text p{
    font-size:20px;
    color: black;
    font-style: italic;
}
.banner-text a{
    text-decoration: none;
    color: #080000;
    font-size: 20px;
}
.banner-text button{
    width: 20%;
    height: 1.5cm;
    text-align: center;
    text-decoration: none;
    /* font-size: 100%; */
    display: inline-block;
    margin-top: 3%;
    background-color: #919191;
    padding: 129x 0;
    color: #895757;
    position: relative;
    z-index: 1;
    transition: color 0.5s;
}
@media screen and (max-width:770px){
    .banner-text h1{
        font-size: 53px;
    }
    .banner-text a{
        display: block;
        margin: 20px auto;
    }
    .banner-text button{
        width: 50%; 
        height: 10%;
    }

}
    </style>
  </head>
  <body id="home">

<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1><a class="navbar-brand" href="index.php"> <!--<span class="fa fa-line-chart" aria-hidden="true"></span> -->
            Parlour Management System
            </a></h1>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
        <span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                     
                                         <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.php">feedback</a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>                                    </ul>
                
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<div class="w3l-hero-headers-9">
  <div class="css-slider">
    <input id="slide-1" type="radio" name="slides" checked>
    <section class="slide slide-one">
      <div class="container">
      <div class="banner-text" style="margin-bottom:200px;">
                <h1 STYLE="COLOR:white;">PARLOUR RESERVATION</h1>
                <P><pre style=" font-size:20px;
    color: white;
    font-style: italic;">     If it makes you feel beautiful, then do it...</pre></P>
                <button><a href="login.php"><SPAN></SPAN>LOGIN</a></button>
                <button><a href="signup.php"><span></span>SIGN IN</a></button>
            </div>
      </div>
      
    </section>
    <input id="slide-2" type="radio" name="slides">
    <section class="slide slide-two">
      <div class="container">
        <div class="banner-text" style="margin-bottom:50%">
          <h4>Creative Styling</h4>
          <h3>beauty parlour<br>
            fashion for woman</h3>
            <br>
            <br>
          <a href="book-appointment.php" class="btn logo-button top-margin">Get An Appointment</a>
        </div>
      </div>
      <!-- <nav>
        <label for="slide-2" class="prev">&#10094;</label>
        <label for="slide-1" class="next">&#10095;</label>
      </nav> -->
    </section>
    <header>
      <label for="slide-1" id="slide-1"></label>
      <label for="slide-2" id="slide-2"></label>
    </header>
  </div>
</div> 
<section class="w3l-call-to-action_9">
    <div class="call-w3 ">
        <div class="container">
            <div class="grids">
                    <div class="grids-content row">

                        <div class="column col-lg-4 col-md-6 color-2 ">
                            <div>
                            <h4 class=" ">Our Salon is Most Popular</h4>
                            <p class="para ">Eline Hair and Beauty Salon Offers - Beauty Services</p>
                            <a href="about.php" class="action-button btn mt-md-4 mt-3">Read more</a>
                        </div>
                    </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 back-image  ">
                            <img src="https://www.psypost.org/wp-content/uploads/2020/01/woman-putting-on-makeup.jpg" alt="product" class="img-responsive ">
                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 back-image2 ">
                            <img src="assets/images/7.jpg" alt="product" class="img-responsive ">
                          </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="w3l-teams-15">
	<div class="team-single-main ">
		<div class="container">
		
				<div class="column2 image-text">
					<h3 class="team-head ">Come experience the secrets of relaxation</h3>
					<p class="para  text ">
						Best Beauty expert at your home and provides beauty salon at home. Home Salon provide well trained beauty professionals for beauty services at home including Facial, Clean Up, Bleach, Waxing,Pedicure, Manicure, etc.</p>
						<a href="book-appointment.php" class="btn logo-button top-margin mt-4">Get An Appointment</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-specification-6">
    <div class="specification-layout ">
        <div class="container">
            <div class=" row">
                <div class="col-lg-6 back-image">
                    <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
                </div>
                <div class="col-lg-6 about-right-faq align-self">
                    <h3 class="title-big"><a >Clean and Recommended Hair Salon</a></h3>
                    <p class="mt-3 para"> Their array of beauty parlour services include haircuts, hair spas, colouring, texturing, styling, waxing, pedicures, manicures, threading, body spa, natural facials and more.</p>
                        <div class="hair-cut">
                            <div >
                    <ul class="w3l-right-book">
                        <li><span class="fa fa-check" aria-hidden="true"></span><a >Hair cut with Blow dry</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a >Color & highlights</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a >Shampoo & Set</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a >Blow Dry & Curl</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a >Advance Hair Color</a></li>
                    </ul>
                </div>
                    <div  class="image-right">
                        <ul class="w3l-right-book">
                            <li><span class="fa fa-check" aria-hidden="true"></span><a >Back Massage</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a >Hair Treatment</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a >Face Massage</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a >Skin Care</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a >Body Therapies</a></li>
                        </ul>
                </div>
            </div>
        </div>
</section>
<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 footer-1">
            <h6 class="footer-title-29">Contact Us</h6>
            <ul>
                            <li>
                <span class="fa fa-map-marker"></span> <p>890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR).</p>
              </li>
              <li><span class="fa fa-phone"></span><a href="tel:+7-800-999-800"> +7896541236</a></li>
              <li><span class="fa fa-envelope-open-o"></span><a href="mailto:parlour@mail.com" class="mail">
                  info@gmail.com</a></li>            </ul>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-4 footer-list-29 footer-2 ">
  
            <ul>
              <h6 class="footer-title-29">Useful Links</h6>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php"> Services</a></li>
              <li><a href="contact.php">Contact us</a></li>
            </ul>
          </div>
         
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4">
                        <h6 class="footer-title-29">About Us </h6>
            <p>        Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials &amp; fashion hair colourings.</p>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29"> Parlour Management System </p>
  
        <div class="col-lg-4 main-social-footer-29">
          <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
          <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
          <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
          <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
        </div>
  
      </div>
    </div>
  </section><!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html>