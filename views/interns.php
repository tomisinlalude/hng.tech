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
				<div class="pi-partner-interns">
					<div class="pi-intern">
						<figure>
							<img class="" src="https://res.cloudinary.com/iamdharmy/image/upload/v1557852684/Oluwadamilola%20Soyombo.jpg" alt="Oluwadamilola Soyombo" />
						</figure>
						<article class="">
							<p class="pi-intern-name">Oluwadamilola Soyombo</p>
							<p>Designer</p>
							<p>Internship 4</p>
						</article>
					</div>
				</div>
				<div class="pi-partner-details">
					<div class="pi-block pi-paga">
						<img src="data:image/png;base64,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" alt="hotels.ng banner" />
					</div>
					<article>
						<h3>Freeme Digital </h3>
						<p>Freemedigital is Nigeria’s foremost online digital music distribution network with a growing array of artists, labels, comedians and content creators across the region on our platform with radio rights to all content licensed.&nbsp;&nbsp;<a href="http://freemedigital.com">Learn More</a></p>
					</article>
				</div>

			</div>

			<div class="pi-partner">
				<div class="pi-partner-details">
					<div class="pi-block pi-paga">
						<img src="https://sprinble.com/assets/img/logo/favicon.png" alt="hotels.ng banner" />
					</div>
					<article>
						<h3>Sprinble</h3>
						<p>Learn more about&nbsp;<a href="https://sprinble.com/company">Sprinble</a></p>
					</article>
				</div>
				<div class="pi-partner-interns">
					<div class="pi-intern">
						<figure>
							<img class="" src="https://res.cloudinary.com/gorge/image/upload/v1557841999/FullSizeRender-8.jpg" alt="Iruene  Adokiye" />
						</figure>
						<article class="">
							<p class="pi-intern-name">Iruene  Adokiye</p>
							<p>Full Stack Developer</p>
							<p>Internship 4</p>
						</article>
					</div>
				</div>
			</div>

			<div class="pi-partner">
				<div class="pi-partner-interns">
					<div class="pi-intern">
						<figure>
							<img class="" src="https://res.cloudinary.com/dwde2t6ef/image/upload/v1557860963/IMG_8707_1_a2ahuk.jpg" alt="Wisdom A. Ebong" />
						</figure>
						<article class="">
							<p class="pi-intern-name">Wisdom A. Ebong</p>
							<p>Full Stack Developer</p>
							<p>Internship 3</p>
						</article>
					</div>
					
				</div>

				<div class="pi-partner-details">
					<div class="pi-block pi-paga">
						<img src="http://www.brainspacevg.com/img/logo/logo.png" alt="hotels.ng banner" />
					</div>
					<article>
						<h3>BrainSpace Venture Group</h3>
						<p>BrainSpace Venture Group is a digital solutions company that builds scalable digital products from scratch to scale.&nbsp;&nbsp;<a href="http://www.brainspacevg.com">Learn More</a></p>
					</article>
				</div>

			</div>

			<div class="pi-partner">
				<div class="pi-partner-details">
					<div class="pi-block pi-flutterwave">
						<img src="https://ivothinking.com/public/img/logo.svg" alt="hotels.ng banner" />
					</div>
					<article>
						<h3>iVO Thinking</h3>
						<p>Learn more about&nbsp;<a href="https://ivothinking.com/">ivo thinking</a></p>
					</article>
				</div>
				<div class="pi-partner-interns">
					<div class="pi-intern">
						<figure>
							<img class="" src="https://res.cloudinary.com/avatechng/image/upload/c_thumb,w_200,g_face/v1557836685/IMG_20180913_111706_3.jpg" alt="Shafi Abdulrahman" />
						</figure>
						<article class="">
							<p class="pi-intern-name">Shafi Abdulrahman</p>
							<p>Back end Developer</p>
							<p>Internship 4</p>
						</article>
					</div>
				</div>
			</div>

			<div class="pi-partner">

				<div class="pi-partner-interns">
					<div class="pi-intern">
						<figure>
							<img class="" src="https://res.cloudinary.com/mercyikpe/image/upload/v1554312716/mercy_1_twchei.jpg" alt="Mercy Ikpe" />
						</figure>
						<article class="">
							<p class="pi-intern-name">Mercy Ikpe</p>
							<p>Front End Developer</p>
							<p>Internship 3</p>
						</article>
					</div>
				</div>

				<div class="pi-partner-details">
					<div class="pi-block pi-sih">
						<img src="https://kodehauz.com/sites/default/files/kodehauz-logo.png" alt="hotels.ng banner" />
					</div>
					<article>
						<h3>KodeHauz</h3>
						<p>KodeHauz is a team of Nigerian programmers with interest in providing best ICT solutions as well as necessary systems and structures to help develop capacity and skills in information technology.&nbsp;<a href="https://kodehauz.com">Learn More</a></p>
					</article>
				</div>

			</div>


			<div class="pi-partner">
				<div class="pi-partner-details">
					<div class="pi-block  pi-sih">
						<img src="https://www.tizeti.com/wp-content/uploads/2017/01/Tizeti-Logo-.png" alt="hotels.ng banner" />
					</div>
					<article>
						<h3>Tizeti Network Limited</h3>
						<p>Learn more about&nbsp;<a href="https://www.tizeti.com">Tizeti Network Limited</a></p>
					</article>
				</div>
				<div class="pi-partner-interns">
					<div class="pi-intern">
						<figure>
							<img class="" src="https://res.cloudinary.com/djvzkeset/image/upload/v1558225291/IMG_2550.jpg" alt="Oluwabukola Ajishebiyawo" />
						</figure>
						<article class="">
							<p class="pi-intern-name">Oluwabukola Ajishebiyawo</p>
							<p>Full Stack Developer</p>
							<p>Internship 3</p>
						</article>
					</div>
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