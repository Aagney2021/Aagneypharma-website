<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aagney Pharmaceuticals LLP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>
		<div id="top"> <!--Top Bar Start-->
			<div class="container"> <!--Container Start-->
				<div class="col-md-12 offer"> <!--col-md-12 offer Start-->
					<a href="#" class="btn btn-success btn-large">
							Welcome To Aagney Pharmaceuticals LLP	
					</a>
				</div> <!--col-md-12 offer  End-->
			</div> <!--Container End-->
		</div> <!--Top Bar End--> 

		<div class="navbar navbar-default" id="navbar"> <!--navbar navbar-default Bar Start--> 
			<div class="container"> <!--container start-->
				<div class="navbar-header"> <!--navbar-header Start--> 
					<a class="navbar-brand home" href="index.php">
						<img src="images/aagney.png" alt="Aagney Pharma" class="hidden-xs">
						<img src="images/aagney-sm.png" alt="Aagney Pharma" class="visible-xs">
					</a>

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only"> Toggle Navigation</span>
						<i class="fa-sharp fa-solid fa-align-justify"></i>

					</button>
				</div> <!--navbar-header End--> 
				
					<div class="navbar-collapse collapse" id="navigation"> <!--navbar-collapse collapse Start-->
						<div class="padding-nav">
							<ul class="nav navbar-nav navbar-left">
								<li>
									<a href="products.php">Products</a>
								</li>
								<li>
									<a href="career.php">Career</a>
								</li>
								<li>
									<a href="aboutus.php">About Us</a>
								</li>
								<li>
									<a href="contactus.php">Contact Us</a>
								</li>
							</ul>
						</div>	
					</div> <!--navbar-collapse collapse End-->

			</div> <!--container End-->
		</div> <!--navbar navbar-default Bar End-->

<div class="container" id="slider"> <!--Container Start-->
	<div class="col-md-12"> <!--Col-md-12 Start-->
		<div class="carousel slide" id="myCarousel" data-ride="Carousel"> <!--Carousel slide Start-->
			<ol class="carousel-indicators">
				<li data-target="myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="myCarousel" data-slide-to="1"></li>
				<li data-target="myCarousel" data-slide-to="2"></li>
				<li data-target="myCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner"> <!--Carousel-inner Start-->
				<div class="item active">
					<img src="admin_area/slider_images/1.jpg">
				</div>
				<div class="item">
					<img src="admin_area/slider_images/2.jpg">
				</div>
				<div class="item">
					<img src="admin_area/slider_images/3.jpg">
				</div>
				<div class="item">
					<img src="admin_area/slider_images/4.jpg">
				</div>
			</div> <!--Carousel-inner End-->
			<a href="#myCarousel" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a href="#myCarousel" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div> <!--Carousel Slide End-->
	</div> <!--Col-md-12 End-->
</div> <!--Container End-->

			<div id="advantage"> <!-- advantage Start -->
		<div class="container"> <!-- container Start -->
			<div class="same-height-row"> <!-- same-height-row Start -->
				<div class="col-sm-4"> <!-- col-sm-4 Start --> 
					<div class="box same-height"> <!-- box same-height Start -->
						<div class="icon"> <!-- icon Start -->
							<i class="fa fa-heart"></i>
						</div> <!-- icon End -->
						<h3><a href="#"> BEST PRICES</h3>
							<p>You can buy a BEST Quality Medicine At Affordable Price with us.</p>
					</div> <!-- box same-height End -->
				</div> <!-- col-sm-4 End -->

				<div class="col-sm-4"> <!-- col-sm-4 Start --> 
					<div class="box same-height"> <!-- box same-height Start -->
						<div class="icon"> <!-- icon Start -->
							<i class="fa fa-heart"></i>
						</div> <!-- icon End -->
						<h3><a href="#"> 100% GUARANTEED RESULT</h3>
							<p>Always Works To Enhance Quality</p>
					</div> <!-- box same-height End -->
				</div> <!-- col-sm-4 End -->

				<div class="col-sm-4"> <!-- col-sm-4 Start --> 
					<div class="box same-height"> <!-- box same-height Start -->
						<div class="icon"> <!-- icon Start -->
							<i class="fa fa-heart"></i>
						</div> <!-- icon End -->
						<h3><a href="#"> WE CARE FOR OUR CUSTOMERS</h3>
							<p>We can not afford to lose your trust.</p>
					</div> <!-- box same-height End -->
				</div> <!-- col-sm-4 End -->

			</div> <!-- same-height-row End -->

		</div> <!-- container End -->
	</div> <!-- advantage End -->



<div id="midcontent">
	<div class="container">
	<div class="same-width-row">
			<div class="col-md-12">	
			<div class="box" id="welcome">
				<h2>WELCOME TO AAGNEY PHARMACEUTICALS LLP</h2>
				<h4>Our objective is to provide products with trusted quality at affordable price to the customer. At AAGNEY PHARMACEUTICALS LLP, We belive that quality can build trust and make relation strong with customer.</h4>
			</div>
		</div>
	</div>
</div>
</div>



<!--Footer Start-->
<?php 
include("includes/footer.php")
?>
<!--Footer End-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>