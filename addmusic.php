s<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Music</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mixtape template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
<?php
include 'header.php';
?>
	<!-- Home -->

	<div class="home">
		<div class="home_inner" >
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
			<div  class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">To continue</div>
					<div class="home_title">Upload Music</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Form -->
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
                          


                            <?php
if (isset($_POST['add_music'])) {
                              $email = $_SESSION['ses']['0'];
                              $music_name = $_POST['music_name'];
                              $artist = $_POST['artist'];
                              $genre = $_POST['genre'];

                              $date=date('Y-m-d');
                              $time= date("G:i:s");


                        


//Uploading file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$file = basename($_FILES["fileToUpload"]["name"]);

// Check if file already exists
if (file_exists($target_file)) {
        echo "<div class='alert alert-block alert-danger'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Sorry, File already exists.<br/> </div>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='alert alert-block alert-danger'>
          <button type='button' class='close' data-dismiss='alert'>×</button>
          Sorry, your file was not uploaded.<br/> </div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<div class='alert alert-block alert-success'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              The file ". basename( $_FILES['fileToUpload']['name']). " has been uploaded.<br/> </div>";
    } else {
        echo "<div class='alert alert-block alert-danger'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Sorry, there was an error uploading your file.<br/> </div>";
    }
}
//Uploading file
                              $insert = mysqli_query($server, "INSERT INTO `music`(`music_name`, `artist`, `genre`, `file`, `date`, `time`, `email`)  VALUES ('$music_name', '$artist','$genre', '$file', '$date','$time','$email')") or die(mysqli_error($server));
                              


                                if ($insert) {
                                  echo "<div class='alert alert-block alert-success'>
                                   <button type='button' class='close' data-dismiss='alert'>×</button>
                                   Music Successfully uploaded<br/> </div>";
                                }else {
                                  echo "<div class='alert alert-block alert-danger'>
                                   <button type='button' class='close' data-dismiss='alert'>×</butcommentton>
                                   Uploading failed. Please try again.<br/> </div>";
                                }
                              
                              
	
}
                            ?>			




					<div class="contact_form_container">
						<form action="#" enctype="multipart/form-data" method="POST" class="contact_form" id="contact_form">
	
							<input type="text" name="music_name" class="form-control" placeholder="Music name" required="required">

							<input type="text" name="artist" class="form-control" placeholder="Artist" required="required">

							<input type="text" name="genre" class="form-control" placeholder="Genre" required="required">

                            <input name="fileToUpload" id="fileToUpload" type="file" class="form-control" id="fileToUpload" required>

							<button name="add_music" class="contact_button">Upload</button>
						</form>
					</div>
				</div>
			<div class="col-lg-4"></div>

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
        Developed by <a href="https://www.instagram.com/doofyjax/" style="color: #06c0f6;">Jax Music</a>
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
<script src="js/contact.js"></script>
</body>
</html>