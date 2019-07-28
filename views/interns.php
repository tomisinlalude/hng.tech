<html>
<?php include 'partials/header.php'; ?>

<body class=" pi">
	<?php include 'partials/navbar.php'; ?>
	<div class="container">
		<header class="pi-header">
			<h1 class="h1">Our Interns and the Impact They Have Made</h1>			
		</header>
        <?php
            
            $data = file_get_contents(__DIR__ . '/storage/data.json'); 
            $interns = json_decode($data); 
        ?>

		<section class="row pi-banner">
			<div class="col-md-9">
				<div class="pi-block pi-hotels">
					<img src="../app/img/hotels.svg" alt="hotels.ng banner" />
				</div>
			</div>

			<article class="col-md-3">
				<h3>Hotels.ng</h3>
				<p>We are an online travel agency specialising in hotel bookings within Nigeria. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy.</p>
			</article>

			<div class="col-md-12">
            <div class="pi-interns">
            <?php 

            foreach($interns as $intern){

                if($intern->company == 'Hotels.ng'){
                    echo "<div class='pi-intern'><figure><img src='".$intern->picture."' alt='".$intern->name."' /></figure><article><p class='pi-intern-name'>".$intern->name."</p><p>".$intern->stack."</p><p>".$intern->role."<br />" . $intern->company. "</p></article></div>";
               
                }
               

            }
            ?>

			</div>
		</section>

		<!-- partners -->
		<section class="pi-partners">
			<div class="pi-partner">
				<div class="pi-partner-details">
					<div class="pi-block pi-andela">
						<img src="../app/img/interns/andela.png" alt="Andela Banner" />
					</div>
					<article>
						<h3>Andela</h3>
						<p>Andela scales high performing distributed engineering teams with Africa's most talented software developers.&nbsp;&nbsp;<a href="https://andela.com">Learn More</a></p>
					</article>
				</div>
				<div class="pi-partner-interns">

                <?php 

                    foreach($interns as $intern){

                        if($intern->company == 'Andela'){
                            echo "<div class='pi-intern'><figure><img src='".$intern->picture."' alt='".$intern->name."' /></figure><article><p class='pi-intern-name'>".$intern->name."</p><p>".$intern->stack."</p><p>".$intern->role."<br />" . $intern->company. "</p></article></div>";
                    
                        }
                    

                    }
                ?>
					</div>
			</div>

			<div class="pi-partner">
				<div class="pi-partner-interns">
					
                <?php 

                foreach($interns as $intern){

                    if($intern->company == 'verifi.ng'){
                        echo "<div class='pi-intern'><figure><img src='".$intern->picture."' alt='".$intern->name."' /></figure><article><p class='pi-intern-name'>".$intern->name."</p><p>".$intern->stack."</p><p>".$intern->role."<br />" . $intern->company. "</p></article></div>";

                    }


                }
                ?>
					
				</div>
				<div class="pi-partner-details">
					<div class="pi-block pi-hotels">
						<img src="../app/img/verifi_logo.svg" alt="verifi banner" />
					</div>
					<article>
						<h3>Verifi</h3>
						<p>Verifi is a payment protection and management firm founded in 2005. It is based in Los Angeles, California, and has close to 9000 accounts.The company’s primary product offering is Cardholder Dispute Resolution Network (CDRN), which helps connect financial organizations and merchants, allowing merchants to act in real time to issue refunds, work to clear up equivocal transaction histories, or initiate traditional chargeback procedures.&nbsp;&nbsp;<a href="https://verifi.com/">Learn More</a></p>
					</article>
				</div>

			</div>

            <div class="pi-partner">
				<div class="pi-partner-details">
					<div class="pi-block pi-fcmb">
						<img src="../app/img/fcmb-logo.png" alt="FCMB Banner" />
					</div>
					<article>
						<h3>FCMB</h3>
						<p>First City Monument Bank (FCMB) Ltd is a full service banking group, headquartered in Lagos, with the vision ‘to be the premier financial services group of African origin’.FCMB is a large financial services provider in Nigeria, offering retail banking, corporate banking and investment banking services to large corporations, small and medium enterprises, as well as individuals.&nbsp;&nbsp;<a href="https://fcmb.com">Learn More</a></p>
					</article>
				</div>
				<div class="pi-partner-interns">

                <?php 

                    foreach($interns as $intern){

                        if($intern->company == 'FCMB'){
                            echo "<div class='pi-intern'><figure><img src='".$intern->picture."' alt='".$intern->name."' /></figure><article><p class='pi-intern-name'>".$intern->name."</p><p>".$intern->stack."</p><p>".$intern->role."<br />" . $intern->company. "</p></article></div>";
                    
                        }
                    

                    }
                ?>
					</div>
			</div>

			<div class="pi-partner">
				<div class="pi-partner-interns">
					
                <?php 

                foreach($interns as $intern){

                    if($intern->company == 'ighubafrica'){
                        echo "<div class='pi-intern'><figure><img src='".$intern->picture."' alt='".$intern->name."' /></figure><article><p class='pi-intern-name'>".$intern->name."</p><p>".$intern->stack."</p><p>".$intern->role."<br />" . $intern->company. "</p></article></div>";

                    }


                }
                ?>
					
				</div>
				<div class="pi-partner-details">
					<div class="pi-block pi-fcmb">
						<img src="../app/img/lg.png" alt="ighubafrica logo" />
					</div>
					<article>
						<h3>Verifi</h3>
						<p>Innovation Growth Hub is a Business, Creative and Technology Hub in NIgeria with locations in Aba and Onitsha. We are contributing to fulfilling Sustainable Development Goals Four and Eight which stands for Promoting Lifelong Learning Opportunities for all and Promoting Sustainable economic growth & decent work for all respectively.&nbsp;&nbsp;<a href="#">Learn More</a></p>
					</article>
				</div>

			</div>
		
		</section>
	</div>
<div class="container-fluid sub-footer" style="background-color:#e5e5e5;border-top:none;">
	<div class="col-md-12 ">
		<h3 class="text-center section-head ">Meet our Finalists</h3>
			<p class="text-center paragraph1">Meet all our finalists from design to machine learning, programming and more 
                    <br>kindly click the link below to see more interns
            </p>
			<p class="text-center" style="margin-top:20px">
				<a href="hng5-finalists" class="bi-btn primary-button" >See More</a>
			</p>
		</div>
	</div>
</body>

<?php include 'partials/footer.php'; ?>

</html>