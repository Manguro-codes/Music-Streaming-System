<!DOCTYPE html>
<html lang="en">
<head>
<title>All Music</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mixtape template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
<?php
include 'header.php';
?>

	<!-- Home -->

	<div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/elements.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
<?php
$select = mysqli_query($server, "SELECT * FROM `users` WHERE `email`='$user_email'") or die('Mysql Error');
                                      while ($column=mysqli_fetch_array($select)) {
                                      	echo "<div class='home_subtitle'>$column[3]</div>";
?>					
					<div class="home_title">All Songs</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Discs -->

	<div class="discs">
		<div class="container">

			<div class="row discs_row">
				                            <?php
                                    if(isset($_GET['id']))
                                    {
                                        $id = $_GET['id'];
                                        $delete = mysqli_query($server, "DELETE FROM `music` WHERE `id`='$id'");
                                            if ($delete) {
                                                  echo "<div class='alert alert-block alert-success'>
                                                   <button type='button' class='close' data-dismiss='alert'>×</button>
                                                    Music was successfully removed.<br/> </div>";
                                                }else {
                                                  echo "<div class='alert alert-block alert-danger'>
                                                   <button type='button' class='close' data-dismiss='alert'>×</button>
                                                   Failed to remove. Please try again.<br/> </div>";
                                                }

                                    }
                            ?>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>music_name</th>
                                        <th>artist</th>
                                        <th>genre</th>
                                        <th>file</th>
                                        <th>date</th>
                                        <th>time</th>
                                        <th>Email</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                  $select = mysqli_query($server, "SELECT * FROM `music`") or die('Mysql Error');
                                      while ($column=mysqli_fetch_array($select)) {
                                    echo " <tr>
                                            <td>$column[0]</td>
                                            <td>$column[1]</td>
                                            <td>$column[2]</td>
                                            <td>$column[3]</td>
                                            <td><a class='btn btn-primary' href='uploads/$column[4]'>Play $column[4]<a/></td>
                                            <td>$column[5]</td>
                                            <td>$column[6]</td>
                                            <td>$column[7]</td>
                                            <td><a class='btn btn-primary' href='allmusic.php?id=$column[0]'>Delete<a/></td>";
                                      }

                                      //picking task

                                    
                                ?>
                                </tbody>
                            </table>

			
              </div>
				</div>

			</div>
		</div>
	</div><br><br><br><br><br><br>

	<!-- Artist -->



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
<script src="js/about.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mixtape template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
<?php
include 'header.php';
?>

	<!-- Home -->

	<div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/elements.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">

                           <div class='home_subtitle'>$column[3]</div>
				
					<div class="home_title">My Profile</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Discs -->

	<div class="discs">
		<div class="container">

			<div class="row discs_row">
				
				<!-- Disc -->
				<div class="col-xl-4 col-md-4">
					<div class="disc">
						<a href="single.html">
							<?php
echo "<div class='disc_image'><img src='pics/$column[11]' alt='https://unsplash.com/@tanelah'></div>";

							?>
							<div class="disc_container">
								<div>
									<div class="disc_content_1">
										<div class="disc_title">Mixtape</div>
										<div class="disc_subtitle">Music For the People</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Disc -->
				<div class="col-xl-4 col-md-4">

					<form action="#" method="POST" class="contact_form" id="contact_form" enctype="multipart/form-data">
					<div class="disc_subtitle">                           
					<br>
					<label>ID NO</label>
					<input type="number" value="<?php echo"$column[0]";?>" placeholder="Id No:" maxlength="8" name="id_no" class="form-control" id="id_no" required><br>
					<label>Name</label>
                    <input name="name" Placeholder="Name" value="<?php echo"$column[1]";?>" type="text" class="form-control" id="name" required><br>

                    <label>DOB</label>
                    <input name="dob" type="date" value="<?php echo"$column[4]";?>" class="form-control" id="date" required><br>

                    <label>Gender</label>
                    <select name="gender" class="form-control" required>
                      <option value="<?php echo"$column[5]";?>"><?php echo"$column[5]";?></option>
                      <option value="">---------</option>
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select><br><br>


					</div>
				</div>

				<div class="col-xl-4 col-md-4">

					<div class="disc_subtitle"> 
					<label>Phone no</label>  
                    <input name="phone_no" type="number" value="<?php echo"$column[6]";?>" maxlength="10" value="07" class="form-control" id="phone_no" required><br>

                    <label>Email</label>
                    <input name="email" type="email" value="<?php echo"$column[7]";?>" placeholder="yourmail@provider.com" value="" class="form-control" id="email" required><br>

                    <label>Profile</label>
                    <label>Upload Profile</label>
                    <input name="fileToUpload" type="file" value="" class="form-control" id="fileToUpload" required><br>


                    <label>Password</label>
                    <input name="password" value="<?php echo"$column[8]";?>" type="password" placeholder="Password" class="form-control" id="password" required><br>
                    <input type="submit" name="update" class="btn btn-lg btn-success btn-block" value="update">
                </div>
                    <?php
}
                    ?>
                </form>
                </div>
                </div>
				</div>

			</div>
		</div>
	</div><br><br><br><br><br><br>

	<!-- Artist -->


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
        Developed by <a href="https://www.instagram.com/doofyjax/?hl=en" style="color: #06c0f6;">Jax Music</a>
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
<script src="js/about.js"></script>
</body>
</html>