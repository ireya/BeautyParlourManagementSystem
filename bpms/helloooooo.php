
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
  ?>
<!doctype html>
<html lang="en">
  <head>
    

    <title>Parlour Management System | service Page </title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<?php include_once('includes/header.php');?>

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

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner services ">
        <div class="container">   
            <div class="main-titles-head text-center">
            <h3 class="header-name ">
                Our Service
            </h3>
        </div>
</div>
</div>
<div class="breadcrumbs-sub">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">Services</li>
</ul>
</div>
</div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-recent-work-hobbies" > 
    <div class="recent-work ">
        <div class="container">
            <div class="row about-about">
            <?php
// database connection information
$host = "localhost";
$user = "root";
$password = "";
$database = "bpmsdb";
// create a database connection
$conn = mysqli_connect($host, $user, $password, $database);

// check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$ret=mysqli_query($conn,"select * from  tblservices");
$services = array();
while ($row=mysqli_fetch_array($ret)) {
    $services[] = $row;
}
?>

<!-- Bootstrap carousel markup -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < count($services); $i++) { ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0) echo 'class="active"'; ?>></li>
        <?php } ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php for ($i = 0; $i < count($services); $i++) { ?>
          <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $services[$i]['ServiceName']; ?></h5>
                    <p><?php echo $services[$i]['Description']; ?></p>
                    <p><?php echo $services[$i]['Price']; ?></p>
                </div>
            <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                <img style="width: 300px;height: 500px;" src="admin/images/<?php echo $services[$i]['Image']; ?>" class="d-block w-100" alt="<?php echo $services[$i]['ServiceName']; ?>">

            </div>
        <?php } ?>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


            
            </div>
        </div>
    </div>
</section>


<?php include_once('includes/footer.php');?>
<!-- move top -->
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