<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="description" content="product" />
	<meta name="keywords" content="Group Activity" />
	<meta name="author" content="Tharushi" />

	<title>Product Page</title>
	<link href="styles/main-product.css" rel="stylesheet">
</head>

<body>

	<?php include('topnav.php'); ?>

	<main>

		<p class="brand-heading">
			Soni
		</p>

		<aside class="item-one">

			<figure>
				<div class="container">
					<img class="img" src="images/XY7Z.jpg" alt="soni-2" height="380px" width="450px">

					<div class="middle">
						<div class="text-hover">
							Rs. 1600.00
						</div>
					</div>
				</div>

				<p id="p-1"> XY7Z - Gen 01 </p>
				<button onclick="location.href = 'sub-product-1.php'"; id="item-btn" style="vertical-align:middle"><span> View product </span></button>
			</figure>

			<figure>
				<div class="container">
					<img class="img" src="images/AN - 4.jpg" alt="soni-3" height="380px" width="430px">

					<div class="middle">
						<div class="text-hover">
							Rs. 5600.00
						</div>
					</div>
				</div>

				<p id="p-1"> AN 4 - Global </p>
				<button onclick="location.href = 'sub-product-2.php'";  id="item-btn" style="vertical-align:middle"><span> View product </span></button>
			</figure>

		</aside>

		<aside class="item-two">

			<figure>
				<div class="container">
					<img class="img" src="images/mp3.jpg" alt="soni-1" height="380px" width="430px">

					<div class="middle">
						<div class="text-hover">
							Rs. 2000.00
						</div>
					</div>
				</div>

				<p id="p-1"> XY7R - LK ver. </p>
				<button onclick="location.href = 'sub-product-3.php'"; id="item-btn" style="vertical-align:middle"><span> View product </span></button>
			</figure>

		</aside>

		<br>
		<hr>

		<p class="brand2-heading">
			Taple
		</p>

		<aside class="item-three">

			<figure>
				<div class="container">
					<img class="img" src="images/taple classic.jpg" alt="tapple-1" height="380px" width="430px">

					<div class="middle">
						<div class="text-hover">
							Rs. 5000.00
						</div>
					</div>
				</div>

				<p id="p-1"> Taple Classic. </p>
				<button onclick="location.href = 'sub-product-4.php'";  id="item-btn" style="vertical-align:middle"><span> View product </span></button>
			</figure>

			<figure>
				<div class="container">
					<img class="img" src="images/gen z.jpg" alt="tapple-2" height="380px" width="430px">

					<div class="middle">
						<div class="text-hover">
							Rs. 1100.00
						</div>
					</div>
				</div>

				<p id="p-1"> Taple Gen Z's </p>
				<button  onclick="location.href = 'sub-product-5.php'"; id="item-btn" style="vertical-align:middle"><span> View product </span></button>
			</figure>

		</aside>

		<aside class="item-four">

			<figure>
				<div class="container">
					<img class="img" src="images/NW 2.jpg" alt="tapple-3" height="380px" width="430px">

					<div class="middle">
						<div class="text-hover">
							Rs. 4500.00
						</div>
					</div>
				</div>

				<p id="p-1"> Taple NW-02 </p>
				<button onclick="location.href = 'sub-product-6.php'";  id="item-btn" style="vertical-align:middle"><span> View product </span></button>
			</figure>

		</aside>

	</main>

	<aside class="main-aside">

		<br>
		<img src="images/black_friday_1510703480.png" width="210px" height="150px" style="margin-left: 35px;">

		<ul>
			<li id="aside-soni"> 10% off for Soni </li>
			<li id="aside-taple"> Special offers for Taple users... </li>
		</ul>

		<p id="sign-up"> Sign up for getting </p>
		<p id="dis-value"> 60% </p>
		<p id="sign-up"> discount for all items. </p>
		<br><hr id="aside-hr"><br>

		<!-- <img id="img-aside" src="images/OIP (1).jpeg"> -->

		<div class="container">
			<div class="main-content">
				<!-- Main content of your page -->
	
				<!-- Example Review Section -->
				<section>
				<div class="reviews">
					<h2>Customer Reviews</h2>
					<div class="review">
						<p> "ENJOYABLE & HIGH QUALITY MUSIC PLAYER<br>
							I am again grateful to Sony for releasing this product. It's an enjoyable experience. I had the
							XY7Z - Gen 01 previously but the larger screen & updated form factor of the XY7Z - Gen 01 make it feel like more 
							 than just an upgrade to that player but in a different class." </p>
						<p class="author">- John Doe </p>
					</div>
					<div class="review">
						<p> "GREAT SOUND BUT LACKING ONE CRITICAL FEATURE!<br>
							I purchased with high hopes given the audio capabilities coupled with the Android 12 operating system. 
							Sound using wired headphones did not disappoint and being able to install Apple Music, 
							Tidal and other popular music apps was a big plus. However my one big complaint is the lack of integration with Android Auto." </p>
						<p class="author">- PM8DK </p>
					</div>
				</div>
			</section>
			</div>
	
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Your existing sidebar content -->
	
				<!-- New Review Section in Sidebar -->
				<section>
				<div class="sidebar-reviews">
					<h3>Latest Reviews</h3>
					<div class="sidebar-review">
						<p> "GREAT BUT EU VERSION VOLUME ISSUES AGAIN<br>
							Sales assured me the UK version still had High Gain and wasn't volume capped like the previous Sony Android DAPs so ordered, 
							but on immediate arrival I confirmed No High gain and volume needing to about 30 steps higher for same volume output as International 
							versions. I'm now awaiting Amazon Japan stock to import one. Beautiful player but avoid EU ones unless you 
							only intend to use easy to drive IEMs. " </p>
						<p class="author">- Chanaka Silva </p>
					</div>
					<div class="sidebar-review">
						<p> "GREAT MUSIC<br>
							Bought this n found the music to be crystal clear without distortion. I am hearing new instrument from songs I have listen for years. 
							Connection was easy to use n battery life was like 8 hours without wifi" </p>
						<p class="author">- steve smith </p>
					</div>
				</div>
			</section>
			</div>
		</div>

	</aside>

	<?php include('footer.php'); ?>

</body>

</html>