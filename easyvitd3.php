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


			<div id="content"> <!--content start -->
	<div class="container"> <!--container start -->
		<div class="col-md-12"> <!--col-md-12 start -->
			<ul class="breadcrumb"> <!-- Start --> 
				<li><a href="products.php">Products</a></li>
				<li>
				Easyvit-D3
			</li>
			</ul> <!-- End -->
		</div> <!--col-md-12 End -->

<div class="col-md-3"> <!--col-md-3 start -->
<!-- Sidebar Start -->
	<?php 
    include("includes/sidebar.php");
	 ?>
<!-- Sidebar End -->
		</div> <!--col-md-3 End -->									

		<div class="col-md-9"> <!--col-md-9 Start-->
			<div class="row" id="easyvitd3main"> <!--Row Start-->
				<div class="col-sm-6"> <!--col-sm-6 Start-->
					<div id="easyvitd3image"> <!--nutralrdimage Start-->
						<center>
							<img src="admin_area/product_images/Easyvit-D3.jpg" class="img-responsive">
						</center>
					</div> <!--nutralrdimage End-->
				</div> <!--col-sm-6 End-->

					<div class="col-sm-6"> <!--col-sm-6 Start-->
						<div class="box"> <!--Box Start-->
							<form action="nutralrd.php" method="post" class="form-horizontal">

								
								<div class="form-group"> <!--form-group Start-->
									<div class="col-md-7"> <!--col-md-7 Start-->
								<div class="dropdown"> <!--dropdown Start-->
									<button class="dropbtn">Tap To View Contains In Easyvit-D3</button>
									<div class="dropdown-viewcontains"> <!--dropdown-viewcontain Start-->
										<a href="#">1. Calcium Carbonate 1.25 mg.</a>
										<a href="#">2. Eqivalent to Element Calcium 500 mg.</a>
										<a href="#">2. Vitamin D3 250 IU.</a>
									</div> <!--dropdown-viewcontains End-->
								</div><!--dropdown Start-->
							</div> <!--col-md-7 End-->
						</div> <!--form-group End-->


								<div class="form-group"> <!--form-group Start-->
									<div class="col-md-7"> <!--col-md-7 Start-->
								<div class="dropdown"> <!--dropdown Start-->
									<button class="dropbtn">Tap To View Uses of Easyvit-D3</button>
									<div class="dropdown-viewuses"> <!--dropdown-viewuses Start-->
										<a href="#">1. used as bone joint supplement..</a>
									</div> <!--dropdown-viewuses End-->
								</div><!--dropdown Start-->
							</div> <!--col-md-7 End-->
						</div> <!--form-group End-->


								<div class="form-group"> <!--form-group Start-->
									<div class="col-md-7"> <!--col-md-7 Start-->
								<div class="dropdown"> <!--dropdown Start-->
									<button class="dropbtn">Tap To View Side Effects Of Easyvit-D3</button>
									<div class="dropdown-viewsideeffects"> <!--dropdown-viewsideeffects Start-->
										<a href="#">Sometimes Side Effects Occur.</a>
										<a href="#">2. Gas.</a>
										<a href="#">3. Vomiting.</a>
										<a href="#">4. Mood Change.</a>
										<a href="#">5. Nausea.</a>
									</div> <!--dropdown-viewsideeffects End-->
								</div><!--dropdown Start-->
							</div> <!--col-md-7 End-->
						</div> <!--form-group End-->


							</form> 
						</div> <!--Box End-->
					</div> <!--col-sm-6 End-->

			</div> <!--Row End-->

       	</div> <!--col-md-9 End-->



       	<div class="row">
		<div class="col-md-12">	
			<div class="box" id="nutralrd">
				<h4>Safety Advice</h4>
				<p>1. KIDNEY patients can not take this medicine without counsulting doctor.</p>
				<p>2. Same as HEART and CANCER Kidney patients can not take this medicine without counsulting doctor.</p>
			</div>
		</div>
	</div>


		</div> <!--container End -->
</div> <!--content End -->




<!--Footer Start-->
<?php 
include("includes/footer.php")
?>
<!--Footer End-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>