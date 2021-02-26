<?php
  ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>LipaMsanii</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mixtape template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>




<div class="super_container">
	
	<!-- Header -->
<?php
include 'header.php';
?>


	<!-- Home -->
<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/index2.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle"></div>
								<div class="home_title"><h1>Music is world</h1></div>
								<div class="home_link"><a href="#">Support KE artists</a></div>
								<div class="home_link">	
								
			</div>
							</div>
						</div>
					</div>
				</div>

				


			</div>
		</div>
	</div>


	<!-- Featured Album -->

	<div class="featured_album">
		<div class="background_image featured_background" style="background-image:url(images/featured.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6">
					<div class="section_title_container">
						<div class="section_subtitle">Music</div>
						<div class="section_title"><h1>All Genre of Music</h1></div>
					</div>
				</div>
			</div>
			<div class="row featured_row row-lg-eq-height">

				<!-- Featured Album Image -->
				<div class="col-md-6">
					<div class="featured_album_image">
						<div class="image_overlay"></div>
						<div class="background_image" style="background-image:url(images/featured_album2.jpg)"></div>
						<!-- <img src="images/featured_album.jpg" alt=""> -->
					</div>
				</div>

				<!-- Featured Album Player -->
				<div class="col-md-6 featured_album_col">
					<div class="featured_album_player_container d-flex flex-column align-items-start justify-content-center">
						<div class="featured_album_player">
							<div class="featured_album_title_bar d-flex flex-row align-items-center justify-content-start">
								<div class="featured_album_title_container">
									<div class="featured_album_artist">Doofy Jax</div>
									<div class="featured_album_title"></div>
								</div>
								<div class="featured_album_link ml-auto"><a href="#">Login to buy album</a></div>
							</div>


							<div id="jplayer_1" class="jp-jplayer"></div>
							<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
								<div class="jp-type-playlist">
									<div class="jp-playlist">
										<ul>
											<li></li>
										</ul>
									</div>
									<div class="player_details d-flex flex-row align-items-center justify-content-start">
										<div class="jp-details">
											<div>playing</div>
											<div class="jp-title" aria-label="title">&nbsp;</div>
										</div>

										<div class="jp-controls-holder ml-auto">
											<button class="jp-play" tabindex="0"></button>
										</div>
									</div>
									

									<div class="player_controls">
										<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
											<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-start">
												<div><div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div></div>
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div class="jp-play-bar"></div>
													</div>
												</div>
												<div><div class="jp-duration ml-auto" role="timer" aria-label="duration">&nbsp;</div></div>
											</div>

											<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-start ml-auto">
												<button class="jp-mute" tabindex="0"></button>
												<div class="jp-volume-bar">
													<div class="jp-volume-bar-value"></div>
												</div>
											</div>

										</div>
									</div>

									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Shows -->

	<div class="shows">
		<div class="container">
			<div class="row" style="z-index:10;">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle">All genres</div>
						<div class="section_title"><h1>Recent Uploads</h1></div>
					</div>
				</div>
			</div>
			<div class="row shows_row">
				
				<!-- Shows List -->
				<div class="col-lg-8 order-lg-1 order-2 shows_list_col">
					<div class="shows_list_container">
						<ul class="shows_list">

							<!-- Show -->
<?php
$select = mysqli_query($server, "SELECT * FROM `music`") or die('Mysql Error');
                                      while ($column=mysqli_fetch_array($select)) {
                                      	echo "
							<li class='d-flex flex-row align-items-center justify-content-start'>
								<div><div class='show_date'><h6>$column[5]</h6></div></div>
								<div class='show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center'>
									<div class='show_name'><a href='#'>$column[1]</a></div>
									<div class='show_location'>$column[2]</div>
								</div>
								<div class='ml-auto'><div class='show_shop trans_200'><a href='uploads/$column[4]'>Play </a></div></div>
							</li>
                                      	";
                                      }
?>


						</ul>
					</div>
				</div>

				<!-- Shows Image -->
				<div class="col-lg-4 order-lg-2 order-1">
					<div class="shows_image">
						<div class="image_overlay"></div>
						<img src="images/shows.jpg" alt="https://unsplash.com/@anthonydelanoix">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Artist -->

	
		<br><br><br><br><br><br><br>
	<!-- Extra -->

	<div class="extra">
		<div class="extra_container">
			<div class="background_image" style="background-image:url(images/extra.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="extra_content d-flex flex-column align-items-start justify-content-center">
							<div class="extra_title"><h1>Buy the Music</h1></div>
							<div class="extra_text">
								<p>Hello there! Browse and stream music for free, pay with mpesa or paypal to download the content.
								Confirm your details before sending the fee. Enjoy your music. Search for more. </p>
							</div>
							<div class="extra_button"><a href="#">Buy Now</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
			<div class="newsletter_container">
				<div class="newsletter_title"><h2>Receive Updates</h2></div>
				<form action="process.php" id="newsletter_form" class="newsletter_form">
					<input type="phone" class="newsletter_input" placeholder="Your phone number" required="required">
					<button class="newsletter_button">Subscribe</button>
				</form>





			</div>
			<div class="footer_lists d-flex flex-sm-row  flex-column align-items-start justify-content-start ml-xl-auto">

				<!-- Useful Links -->
				

				<!-- Connect -->
				<div class="footer_list">
					
					
				</div>

			</div>
		</div>

		<br><br>
		<div class="copyright_bar">
			<div class="container">
      <center><div class="copyright">
        &copy; Copyright <strong>LIPA MSANII</strong>. All Rights Reserved.
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Developed by <a href="" style="color: #06c0f6;">Jax Music</a>
      </div></center>
    </div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php
ob_end_flush(); // learn
?>