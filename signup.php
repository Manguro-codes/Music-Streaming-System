<!DOCTYPE html>
<html lang="en">
<head>
<title>Signup</title>
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

			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
			<div  class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">To continue</div>
					<div class="home_title">Sign Up</div>

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
                              if (isset($_POST['sign_up'])) {

                              //FETCHING INPUTS
                              $id_no = $_POST['id_no'];
                              $name = $_POST['name'];
                              $role = "musician";
                              $dob = $_POST['dob'];
                              $gender = $_POST['gender'];
                              $phone_no = $_POST['phone_no'];
                              $email = $_POST['email'];
                              $password = md5($_POST['password']);
                              $re_password = md5($_POST['re_password']);
                              $date=date('Y-m-d');
                              $time= date("G:i:s");

                                if($password != $re_password)
                                {
                                 echo "<div class='alert alert-block alert-danger'>
                                            <button type='button' class='close' data-dismiss='alert'>×</button>
                                            Passwords do not match. Please try again.
                                            <br/>
                                         </div>";
                                    
                                }else{
                                $emailCheck = mysqli_query($server, "SELECT * FROM `users` WHERE email = '$email'  ");
                                $count=mysqli_num_rows($emailCheck);
                                if ($count != null) {
                                    echo "<div class='alert alert-block alert-danger'>
                                            <button type='button' class='close' data-dismiss='alert'>×</button>
                                            <strong>Registration failed</strong><br/>
                                            Email already in use by a different account.
                                            <br/>
                                         </div>";
                                }else{


//Uploading pic
$target_dir = "pics/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$pic = basename($_FILES["fileToUpload"]["name"]);

// Check if pic already exists
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
          Sorry, your pic was not uploaded.<br/> </div>";
// if everything is ok, try to upload pic
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<div class='alert alert-block alert-success'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              The pic ". basename( $_FILES['fileToUpload']['name']). " has been uploaded.<br/> </div>";
    } else {
        echo "<div class='alert alert-block alert-danger'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Sorry, there was an error uploading your pic.<br/> </div>";
    }
}
//Uploading pic

                                  $insert = mysqli_query($server, "INSERT INTO `users`(`role`, `id_no`, `name`, `dob`, `gender`, `phone_no`, `email`, `password`, `date`, `time`, `pic`) VALUES ('$role', '$id_no','$name','$dob','$gender','$phone_no','$email','$password','$date','$time','$pic')") ;
                                  


                                    if ($insert) {
                                      echo "<div class='alert alert-block alert-success'>
                                       <button type='button' class='close' data-dismiss='alert'>×</button>
                                       You have successfully created an account. <a href='index.php'>Login</a> to add your team and start working.<br/> </div>";
                                    }else {
                                      echo "<div class='alert alert-block alert-danger'>
                                       <button type='button' class='close' data-dismiss='alert'>×</button>
                                       Entry failed. Please try again.<br/> </div>";
                                    }

                                    }
                                    }
                                }                              
?>




          <div class="contact_form_container">
            <form action="#" method="POST" class="contact_form" id="contact_form" enctype="multipart/form-data">

                                              <input type="number" placeholder="Id No:" maxlength="8" name="id_no" class="form-control" id="id_no" required>

                                            <input name="name" Placeholder="Name" type="text" class="form-control" id="name" required>

                                            <input name="dob" type="date" class="form-control" id="date" required>

                                            <select name="gender" class="form-control" required>
                                              <option value="">Select Gender</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                            </select><br>

  
                                            <input name="phone_no" type="number" maxlength="10" value="07" class="form-control" id="phone_no" required>

                                            <input name="email" type="email" placeholder="yourmail@provider.com" value="" class="form-control" id="email" required>

                                            <label>Upload Profile</label>
                                            <input name="fileToUpload" type="file" value="" class="form-control" id="fileToUpload">


                                            <input name="password" type="password" placeholder="Password" class="form-control" id="password" required>


                                            <input name="re_password" type="password" placeholder="Re-enter password" class="form-control" id="re_password" required>
</div>






              <button name="sign_up" class="contact_button">Sign Up</button>
            </form>
          </div>
        </div>
      <div class="col-lg-4"></div>

      </div>
    </div>
  </div>

  <!-- Footer -->
<?php
include 'footer.php';
?>
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