<html>
	<?php include 'partials/header.php';?>
    <
	<body>
		<?php include 'partials/navbar.php';?>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-5">

                        <div class="join-now-img ">
                            <img src="../app/img/join-now-laptop.png" class="">
                            </div>
                        </div>
       
                <div class="col-md-7">
                        <header class="join-header">
				            <h1 class="h1">Join Now</h1>
			            </header>
                    <form action="" id="join-form" method="post">
                        <div class="form-row row">
                            <div class=" col-md-6">
                                <label class="join-labels" for="full_name">Full Name</label>
                                <input type="text" name="full_name" class="form-control join-input" id="full_name" placeholder="Full name" pattern="[A-Z\sa-z]{3,20}" required>
                            </div>
                            <div class=" col-md-6">
                                <label class="join-labels" for="email">Email</label>
                                <input type="email" name="email" class="form-control join-input" id="join-email" placeholder="you@example.com" required>
                            </div>
                        </div>

                        <div class="form-row row">
                            <div class="col-md-6">
                                <label class="join-labels" for="phone_number">Phone Number</label>
                                <input type="tel" name="phone_number" class="form-control join-input" id="phone_number" placeholder="Phone number"  pattern=" (+)[0-9]" required>
                            </div>
                            <div class="col-md-6">
                                <label class="join-labels" for="tech_interest">Learning Track</label>
                                <select name="tech_interest" class="form-control join-input" id="tech_interest" required>
                                    <option selected disabled>Choose...</option>
                                    <option value="1">Web Development</option>
                                    <option value="2">Mobile Development</option>
                                    <option value="3">Machine Learning</option>
                                    <option value="4">UI/UX Design</option>
                                    <option value="5">Digital Marketing</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row row">
                            <div class="col-md-6">
                                <label class="join-labels" for="experience">What Is Your Experience So Far?</label>
                                <select name="experience" class="form-control join-input" id="experience" required>
                                    <option selected disabled>Choose...</option>
                                    <option value="1">Less than 1 year</option>
                                    <option value="2">1 - 2 years</option>
                                    <option value="3">Above 2 years</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="join-labels" for="internship_reason">Why Choose HNG Internship?</label>
                                <select name="internship_reason" class="form-control join-input" id="internship_reason" required>
                                    <option selected disabled>Choose...</option>
                                    <option value="1">To gain work experience</option>
                                    <option value="2">To improve my skills</option>
                                    <option value="3">To make a career switch</option>
                                    <option value="4">To learn</option>
                                    <option value="5">I heard it is dope!</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-container">
			                <button class="primary-button join-btn" name="submit" id="sumbit" style="padding: 14px 30px">Submit</button>
		                </div>
                    </form>
                </div>

            </div> 
        </div>
        
            <footer class="join-footer">
                <div class="main-footer mt-5">
                    <div class="container">
                        <div class="main-footer-content">
                            <p class="">© <?php echo date("Y"); ?> HNG internship . All Rights Reserved. HNG Group</p>

                            <a href="https://twitter.com/hnginternship"><img src="../app/img/twitter.svg" alt="Find us on twitter"></a>
                        </div>
                    </div>
                </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>    
    </body>
   
   
      
   
</html>