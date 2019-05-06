<html>
	<?php include 'partials/header.php';?>
	<body>
		<?php include 'partials/navbar.php';?>
            
            <!-- <div class="join-container"> -->
                <div class="container">
                <div class="row">
                    <div class="col-md-5">

                        <div class="join-now-img ">
                            <img src="../app/img/join-now-laptop.png" class="">
                        </div>
                    </div>

                <!-- <form id="join-form" class="join-form">

                    <div class="join-header-align">
                        <header class="join-header">
				            <h1 class="h1">Join Now</h1>
			            </header>
                    </div>

                    <div class="join-row">

                        <div class="join-input-left">
                            <div class="join-labelss">
                                <label class="join-labels" id="join-name-label">
                                    Full Name
                                </label>
                            </div>
                            <div class="join-input-align">
                                <input type="text" name="name" placeholder="Full name" id="name" class="join-input" required>
                            </div>                         
                        </div>
                        
                        <div class="join-input-right">
                            <div class="join-labelss">
                                <label class="join-labels" id="join-email-label">
                                    Email
                                </label>
                            </div>
                            <div class="join-input-align">
                                <input type="text" name="name" placeholder="Email" id="email" required class="join-input">
                            </div>                         
                        </div>

                     </div>

                </form> -->
                <div class="col-md-7">
                        <header class="join-header">
				            <h1 class="h1">Join Now</h1>
			            </header>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label class="join-labels" for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-6">
                            <label class="join-labels" for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label class="join-labels" for="phone_no">Phone Number</label>
                            <input type="text" class="form-control" id="phone_no" placeholder="Phone Number">
                            </div>
                            <div class="form-group col-md-6">
                            <label class="join-labels" for="technology">Technologies interested in</label>
                                <select class="form-control" id="technology">
                                    <option selected>Choose...</option>
                                    <option value="1">Web Development</option>
                                    <option value="2">Mobile Development</option>
                                    <option value="3">Machine Learning</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="join-labels" for="experience">What Is Your Experience So Far?</label>
                                <textarea type="text" class="form-control" id="experience" placeholder="Type your text area"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="join-labels" for="reason">Why choose HNG Internship?</label>
                                <textarea type="email" class="form-control" id="reason" placeholder="Your answer"></textarea>
                            </div>
                        </div class="">
                        <div class="btn-container">
			                <a  href="" class="primary-button join-btn" style="padding: 14px 30px">Submit</a>
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