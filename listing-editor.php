<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	<link rel='stylesheet' id='altitude-pro-theme-css'  href='http://perfectreal.staging.wpengine.com/wp-content/themes/altitude-pro-perfectrealty/style.css?ver=1.0.2' type='text/css' media='all' />
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="shadow">
		<a href="index.php"><img width="360px" src="images/logo.png" /></a>
	</header>
	<div class="container">
		<div class="col-md-9">
			<div class="overview shadow">
				<div class="overview-img no-feature-image">
					<div class="no-feature-image-inner">
						<button class="add-feature-image" type="button"  data-toggle="modal" data-target="#upload-featured-image">Add Featured Image</button>
					</div>
				</div>
				<!-- Code for Images
				<div class="overview-img" style="background-image: url(http://perfectreal.staging.wpengine.com/wp-content/uploads/2016/03/54052-Viar-Drive-Shelby-Twp-Michigan-48315-copy.jpg);">
				</div>
				-->
				<div class="change-image-mobile"><button href="#">Change Featured Image</button></div>
				<div class="overview-details">
					<h2>$920,000</h2>
					<span>4121 Ledgestone Drive</span><br>
					<span>Troy, MI 48098</span><br>
					<hr>
					<ul>
						<li><b>Bedrooms:</b> 4</li>
						<li><b>Bathrooms:</b> 4.5</li>
						<li><b>Type Single:</b> Family Home</li>
						<li><b>Square Feet:</b> 4,6000</li>
					</ul>
				</div><!-- end: overview-details -->
			</div><!-- end: overview shadow -->
			<button class="text-button change-image-desktop">Change Featured Image</button>
			<div class="shadow images-section">
			 <h2>Images</h2>
				 <button data-target="#upload-images-modal" data-toggle="modal" class="button upload-images-button">Upload Images
				 </button>
			<div class="clearfix"></div>
				<div class="images-sub-section">
					<div class="image-container">
						<img src="http://placehold.it/250x170" />
						<br>
						<button class="button move-button" data-toggle="popover" data-placement="top">Move</button>
					</div>
					<div class="image-container">
						<img src="http://placehold.it/250x170" />
						<br>
						<button class="button move-button">Move</button>
					</div>				
					<div class="image-container">
						<img src="http://placehold.it/250x170" />
						<br>
						<button class="button move-button">Move</button>
					</div>				
					<div class="image-container">
						<img src="http://placehold.it/250x170" />
						<br>
						<button class="button move-button">Move</button>
					</div>				
					<div class="image-container">
						<img src="http://placehold.it/250x170" />
						<br>
						<button class="button move-button">Move</button>
					</div>				
					<div class="image-container">
						<img src="http://placehold.it/250x170" />
						<br>
						<button class="button move-button">Move</button>
					</div>				
					<div class="image-container">
						<img src="http://placehold.it/250x170" />
						<br>
						<button class="button move-button">Move</button>
					</div>				
					<div class="image-container">
						<img src="http://placehold.it/250x170" />
						<br>
						<button class="button move-button">Move</button>
					</div>				
					<div class="image-container">
						<img src="http://placehold.it/250x170" />
						<br>
						<button class="button move-button">Move</button>
					</div>
					<div class="image-container"></div>
					<div class="image-container"></div>
				</div><!-- end: images-sub-section -->
			</div><!-- end: images-section -->
			<div class="shadow listing-contact-info">
				<h2>Listing and Contact Information</h2>
				<div class="col-md-6">
					<div class="listing-contact-info-section">
						<button class="button edit-button" type="button"  data-toggle="modal" data-target="#edit-contact-info">edit</button>
						<div class="listing-contact-info-section-inner">
							<h3>Your Contact Information</h3>
							<span class="your-contact-info-subtitle">not visible to the public</span>
							<ul>
								<li><b>Name:</b><br>John Doe</li>
								<li><b>Your current address:</b><br>(same as listing address)</li>
								<li><b>Your phone number:</b><br>555-555-5555</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="listing-contact-info-section">
						<button class="button edit-button" type="button" data-toggle="modal" data-target="#edit-listing-home-address">edit</button>
						<div class="listing-contact-info-section-inner">
							<h3>Listing Home Address</h3>
							<span>4121 Ledgstone Dr.</span>
							<br>
							<span>Troy, MI 48098</span>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="listing-contact-info-section">
					<button class="button edit-button" type="button"  data-toggle="modal" data-target="#edit-info-about-listing">edit</button>
					<div class="listing-contact-info-section-inner">
						<h3>Information About the Listing</h3>
						<b>Description:</b>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
						<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
						<ul class="col-md-6">
							<li><b>Listing price:</b><br>$920,000</li>
							<li><b>Property type:</b><br>Single family residential</li>
							<li><b>Lot size:</b><br>Width -<br>Depth -</li>
							<li><b>Number of floors:</b><br></li>
						</ul>
						<ul class="col-md-6">
							<li><b>HOA/Maintenance:</b><br></li>
							<li><b>Bedrooms:</b><br>4</li>
							<li><b>Bathrooms:</b><br>4.5</li>
							<li><b>House/condo squre footage</b><br></li>
							<li><b>Year built:</b><br></li>

						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="specific-info-section listing-contact-info-section">
					<button class="button edit-button" type="button"  data-toggle="modal" data-target="#edit-specific-property-info">edit</button>
					<div class="listing-contact-info-section-inner">
						<h3>Specific Information About the Property</h3>
						<div class="col-md-6">
							<ul>
								<li><b>Rooms:</b></li>
								<li>Living room</li>
								<li>Dining room</li>
								<li>Walk-in Closet</li>
								<li>Master Bath</li>
								<li>Storage Space</li>
								<li>Pantry</li>
								<li>Attic</li>
							</ul>
							<ul>
								<li><b>Exterior Features:</b></li>
								<li>Balcony, Deck or Patio</li>
								<li>Yard</li>
								<li>Lawn</li>
								<li>Lake</li>
								<li>Sprinkler System</li>
							</ul>
							<ul>
								<li><b>Technology Wiring:</b></li>
								<li>Cable-ready</li>
								<li>High-speed Internet</li>
								<li>Wired</li>
							</ul>
						</div><!-- end: col-md-6 -->
						<div class="col-md-6">
							<ul>
								<li><b>Included Appliances:</b></li>
								<li>Range / Oven</li>
								<li>Refrigerator</li>
								<li>Dishwasher</li>
								<li>Microwave</li>
								<li>Garbage Disposal</li>
								<li>Trash Compactor</li>
								<li>Washer</li>
								<li>Dryer</li>
							</ul>
							<ul>
								<li><b>Heating and Cooling:</b></li>
								<li>Heat: fored air</li>
								<li>Central A/C</li>
								<li>Ceiling Fans</li>
								<li>Double pane / Storm windows</li>
							</ul>
							<ul>
								<li><b>Additional Features:</b></li>
								<li>Hardwood floor</li>
								<li>Tile floor</li>
								<li>Fireplace</li>
								<li>Jacuzzi / Whirlpool</li>
								<li>Hot tub / Spa</li>
								<li>Skylights</li>
							</ul>
						</div><!-- end: col-md-t -->
					</div>
				</div><!-- end: specific-info-section -->
			</div><!-- end: listing-contact-info -->
		</div><!-- end: col-md-9 -->
		<div class="col-md-3">
			<div class="sidebar2 hidden-xs hidden-sm">
				<div class="status">status: draft</div>
				<button href="#" class="button publish-button">Publish</button>
				<br>
				<br>
				<button class="text-button view-listing-button">View Listing</button>
			</div>
		</div><!-- end: col-md-3 -->
	</div><!-- end: container -->

<?php include 'modals-popovers.php' ;?>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Popover Javascript -->
<script src="script.js"></script>


</body>