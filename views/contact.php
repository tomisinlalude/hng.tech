<html>
 <?php include 'partials/header.php';?>
	<body>
		<div class="jumbotron-fluid">
			<div>
				<?php include 'partials/navbar.php';?>

				<div class="container">
					<div class="row">
						<div class="about-text col-md-6">
							<h1 class="hp-header1">Contact Us</h1>
							<form action="contact.php" method="post" class="form-vertical" role="form">
                <div class="form-group">
                  <label for="Full Name">Full Name</label>
                  <input type="text" class="form-text form-control" name="visitor_name" placeholder="Your Name" pattern="[A-Za-z]{3,20}"  required/>
                </div>
                <div class="form-group">
                  <label for="Email-Address">Email-Address</label>
                  <input type="email" class="form-text form-control" name="visitor_email" placeholder="you@Example.com"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea name="visitor_message" rows="5"  cols="10" class="form-text1 form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <p class="form-group text-right"><input type="submit" class="btn btn-info" value="Submit"/></p>
                </div>
              </form>
						</div>
						<div class="col-md-6 ap-toon">
							<img class="img-responsive" src="https://res.cloudinary.com/damilare1947/image/upload/v1556533905/undraw_personal_text_vkd8.jpg" width="561" height="525" alt="hng_img">
							<!-- <img class="toon-small-screens" src="../app/img/ladytoon-office-small.svg" alt="lady"> -->
						</div>
					</div>
				</div>
			</div>
		</div>
    <div class="main-footer1" style="margin-top:100px;">
		<div class="container">
			<div class="main-footer-content">
				<p class="">© <?php echo date("Y"); ?> HNG internship . All Rights Reserved. HNG Group</p>

				<a href="https://twitter.com/hnginternship"><img src="../app/img/twitter.svg" alt="Find us on twitter"></a>
			</div>
		</div>
  	</div>
	<!--Banner-->
<!--
<div class="footer1">		
  <div class="main-footer">
      <div class="container">
        <div class="main-footer-content">
          <p class="">© <?php echo date("Y"); ?> HNG internship . All Rights Reserved. HNG Group</p>

          <a href="https://twitter.com/hnginternship"><img src="../app/img/twitter.svg" alt="Find us on twitter"></a>
        </div>
      </div>
  </div>
</div>-->


	<script src="../app/js/app.js"> </script>
	<script type="text/javascript">
	/* Set the width of the side navigation to 250px */
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
		$(".navbar-toggler").prop('disabled',true);

	}

	/* Set the width of the side navigation to 0 */
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		$(".navbar-toggler").prop('disabled',false); 
	}

	</script>
	</body>
</html>
