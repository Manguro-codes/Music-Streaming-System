 <!--Searching products-->

<style type="text/css">
  
    /* Formatting search box */
    .search-box{
        width: 250px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: relative;        
        z-index: 999;
        top: 100%;
        left: 0;
        background: black;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

<!--search products-->




 <?php

  //connecting to server and db
// error_reporting(0);
  $server = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($server,"jax"); 
  session_start();

                                  if(isset($_GET['log_out']))
                                        {
                                            $log_out = $_GET['log_out'];
                                            session_destroy();
                                            header("location:index.php");
                                        }
$user_email = $_SESSION['ses']['0'];


 ?> 



	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-center">
			<div class="logo"><a href="index.php">Lipa Msanii</a></div>
			<div class="log_reg">
				<ul class="d-flex flex-row align-items-start justify-content-start">


<?php

if ($user_email != '') {
	echo "<li><a href='myprofile.php'>My Profile</a></li>";
}else{
	echo "
		<li><a href='login.php'>Login</a></li>
		<li><a href='signup.php'>Register</a></li>
	";
}
?>					
				</ul>
			</div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.php">Home</a></li>
<form  class="contact_form_container" method="post" action="search_result.php">
										    <div class="form-group d-flex">

	        <input  type="text"  name="search_key" autocomplete="off" placeholder=" Search by name..." lass="result"/>


	    
	        <button name="ok" type="submit" id="submitButton" class="btn btn-warning">Go</button></div>
							    </form>
					
					
					
<?php
//$user_email = $_SESSION['ses']['0'];


if ($user_email != '')  {
	echo "<li><a href='addmusic.php'>Add Music</a></li>
	    <li><a href='music.php'>Music</a></li>
	                                       <li><a onclick='logoutPrompt()'  href='index.php?log_out'><i class='fa fa-sign-out fa-fw'></i> Logout</a>
                                    </li>";
	
}
?>						
				</ul>
			</nav>
			<div class="hamburger ml-auto">
				<div class="d-flex flex-column align-items-end justify-content-between">
					<div></div>
					<div></div>            
				</div> 
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div>
			<div class="menu_overlay"></div>
			<div class="menu_container d-flex flex-column align-items-start justify-content-center">
				<div class="menu_log_reg">
					<ul class="d-flex flex-row align-items-start justify-content-start">




<?php

if ($user_email != '') {
	echo "<li><a href='myprofile.php'>My Profile</a></li>";
}else{
	echo "
		<li><a href='login.php'>Login</a></li>
		<li><a href='signup.php'>Register</a></li>
	";
}
?>	
					</ul>
				</div>
				<nav class="menu_nav">
					<ul class="d-flex flex-column align-items-start justify-content-start">
						<li><a href="index.php">Home</a></li>
					
						


<?php

                                  $select = mysqli_query($server, "SELECT * FROM `users` WHERE `email`='$user_email'") or die('Mysql Error');
                                      while ($column=mysqli_fetch_array($select)) {
                                      	
                                      	echo $column[1];
if ($column[1] == 'admin') {
	echo "
	<li><a href='allmusic.php'>All Music</a></li>
	<li><a href='allusers.php'>All Users</a></li>";
}

                                      }



//$user_email = $_SESSION['ses']['0'];
if ($user_email != '') {
	echo "<li><a href='addmusic.php'>Add Music</a></li>
	    <li><a href='music.php'>Music</a></li>
                                   <li><a onclick='logoutPrompt()' href='index.php?log_out'><i class='fa fa-sign-out fa-fw'></i> Logout</a>
                                    </li>
	    ";
	
}
?>						
					</ul>
				</nav>
			</div>
		</div>
	</div>

                    <script>
                    //when user wants to log out
                    function logoutPrompt() {
                        var x;
                        if (confirm("Are you sure you want to end session?") == true) {
                            x = "OK!";
                        } else {
                            x = "Cancel!";
                        }
                        document.getElementById("demo").innerHTML = x;
                    }
                    </script>
