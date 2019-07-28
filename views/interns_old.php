<html>
<?php include 'partials/header.php'; ?>

<body class="pi">
	<?php include 'partials/navbar.php'; ?>
	<div class="container intern-body">

        <!-- Header -->
        <header class="head">
         
            <h3>Our Past Interns</h3>
            <h5>Our Interns and the Impact They Have Made</h5>

        </header>

       <div class="container company">
           
            <p>Andela invests in Africa’s most talented software engineers to help companies solve the technical talent shortage and build high-performing distributed engineering teams. Andela builds distributed engineering teams with Africa's most talented software developers
            </p>
            <div class="logo-container">
                <img src="../app/img/interns/andela.png" alt="andela logo">
           </div>
       </div>

        
        <div class="row cards interns">

            <?php
            
            $data = file_get_contents(__DIR__ . '/storage/data.json'); 
            $interns = json_decode($data); 

            foreach($interns as $intern){
                if($intern->company == 'Andela'){
                    echo "<div class='intern'><img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'><p class='name'>".$intern->name."</p>
                    <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a></p></div>";
                }
               

            }
            ?>

        </div>

        <div class="container company">
           
           <p>We are an online travel agency specialising in hotel bookings within Nigeria. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy. We also provide hotel recommendations and reviews, making sure that our clients stay in good, clean and safe hotels all over the country.
           </p>
           <div class="logo-container">
               <img src="../app/img/interns/hotels.ng.png" alt="Hotels logo">
          </div>
      </div>

       
       <div class="row cards interns">

           <?php

           foreach($interns as $intern){
               if($intern->company == 'Hotels.ng'){
                   echo "<div class='intern'><img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'><p class='name'>".$intern->name."</p>
                   <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a></p></div>";
               }
           }
           ?>

       </div>

       <div class="container company">
           
           <p>Verifi is a payment protection and management firm founded in 2005. It is based in Los Angeles, California, and has close to 9000 accounts.The company’s primary product offering is Cardholder Dispute Resolution Network (CDRN), which helps connect financial organizations and merchants, allowing merchants to act in real time to issue refunds, work to clear up equivocal transaction histories, or initiate traditional chargeback procedures.
           </p>
           <div class="logo-container">
               <img src="../app/img/verifi_logo.svg" alt="Verifi.ng logo">
          </div>
      </div>

       
       <div class="row cards interns">

           <?php

           foreach($interns as $intern){
               if($intern->company == 'verifi.ng'){
                   echo "<div class='intern'><img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'><p class='name'>".$intern->name."</p>
                   <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a></p></div>";
               }
           }
           ?>

       </div>
       <div class="container company">
           
           <p>First City Monument Bank (FCMB) Ltd is a full service banking group, headquartered in Lagos, with the vision ‘to be the premier financial services group of African origin’.FCMB is a large financial services provider in Nigeria, offering retail banking, corporate banking and investment banking services to large corporations, small and medium enterprises, as well as individuals. 
           </p>
           <div class="logo-container">
               <img src="../app/img/fcmb-logo.png" alt="FCMB logo">
          </div>
      </div>

       
       <div class="row cards interns">

           <?php

           foreach($interns as $intern){
               if($intern->company == 'FCMB'){
                   echo "<div class='intern'><img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'><p class='name'>".$intern->name."</p>
                   <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a></p></div>";
               }
           }
           ?>

       </div>

       <div class="container company">
           
           <p>Innovation Growth Hub is a Business, Creative and Technology Hub in NIgeria with locations in Aba and Onitsha. We are contributing to fulfilling Sustainable Development Goals Four and Eight which stands for Promoting Lifelong Learning Opportunities for all and Promoting Sustainable economic growth & decent work for all respectively 
           </p>
           <div class="logo-container">
               <img src="../app/img/lg.png" alt="ighubafrica logo">
          </div>
      </div>

       
       <div class="row cards interns">

           <?php

           foreach($interns as $intern){
               if($intern->company == 'ighubafrica'){
                   echo "<div class='intern'><img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'><p class='name'>".$intern->name."</p>
                   <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a></p></div>";
               }
           }
           ?>

       </div>

       <header class="head">
       
         <h5>Other companies that have trusted us</h5>

     </header>
         <!-- Logo Slider  -->
         <div >
        <div class="wrapper">
        <ul class="carousel" data-target="carousel">
        
          <li class="card" data-target="card">
                <a href="https://hotels.ng">
                    <img src="../app/img/interns/freeme.png" alt="freeme logo">
                </a>
          </li>
          <li class="card" data-target="card">
                <a href="https://hotels.ng">
                    <img src="../app/img/interns/kodehauz-logo.png" alt="kodehauz-logo">
                </a>
          </li>
          <li class="card" data-target="card">
                <a href="https://hotels.ng">
                    <img src="../app/img/interns/sprinble.png" alt="sprinble logo">
                </a>
          </li>
          <li class="card" data-target="card">
                <a href="https://hotels.ng">
                    <img src="../app/img/interns/Tizeti.png" alt="Tizeti logo">
                </a>
          </li>
          <li class="card" data-target="card">
                <a href="https://www.hotels.ng">
                    <img src="../app/img/interns/hotels.ng.png" alt="hotels.ng logo">
                </a>
          </li>
          <li class="card" data-target="card">
                <a href="https://hotels.ng">
                    <img src="../app/img/interns/andela.png" alt="andela logo">
                </a>
          </li>
          <li class="card" data-target="card">
                <a href="https://hotels.ng">
                    <img src="../app/img/interns/freeme.png" alt="freeme logo">
                </a>
          </li>
          <li class="card" data-target="card">
                <a href="https://hotels.ng">
                    <img src="../app/img/interns/kodehauz-logo.png" alt="kodehauz-logo">
                </a>
          </li>
          <li class="card" data-target="card">
                <a href="https://hotels.ng">
                    <img src="../app/img/interns/sprinble.png" alt="sprinble logo">
                </a>
          </li>
          <li class="card" data-target="card">
                <a href="https://hotels.ng">
                    <img src="../app/img/interns/Tizeti.png" alt="Tizeti logo">
                </a>
          </li>
          <li class="card" data-target="card">
              <a href="https://hotels.ng">
                <img src="../app/img/interns/hotels.ng.png" alt="hotels.ng logo">
              </a>
          </li>
          <li class="card" data-target="card">
              <a href="https://hotels.ng">
                <img src="../app/img/interns/hotels.ng.png" alt="hotels.ng logo">
              </a>
          </li>
          <li class="card" data-target="card">
              <a href="https://hotels.ng">
                <img src="../app/img/interns/freeme.png" alt="hotels.ng logo">
              </a>
          </li>
        </ul>
        <div class="button-wrapper">
          <button data-action="slideLeft">&lt;</button>
          <button data-action="slideRight">&gt;</button>
        </div>
      </div>
    </div>

    <div class="container links">
            <a class="bi-btn primary-button" href="past-interns">More Past Interns</a>
            <a class="bi-btn primary-button" href="hng5-finalists">Most Recent Finalists</a>
            <a class="bi-btn primary-button" href="contact">Recruit Our Interns</a>
					<!-- <a class="bi-btn primary-button" href="join-now">Join now</a> -->
	</div>

    

        
	</div>

	<?php include 'partials/footer.php'; ?>

    <script>
          // Select the carousel you'll need to manipulate and the buttons you'll add events to
            const carousel = document.querySelector("[data-target='carousel']");
            const card = carousel.querySelector("[data-target='card']");
            const leftButton = document.querySelector("[data-action='slideLeft']");
            const rightButton = document.querySelector("[data-action='slideRight']");

            // Prepare to limit the direction in which the carousel can slide, 
            // and to control how much the carousel advances by each time.
            // In order to slide the carousel so that only three cards are perfectly visible each time,
            // you need to know the carousel width, and the margin placed on a given card in the carousel
            const carouselWidth = carousel.offsetWidth;
            const cardStyle = card.currentStyle || window.getComputedStyle(card)
            const cardMarginRight = Number(cardStyle.marginRight.match(/\d+/g)[0]);

            // Count the number of total cards you have
            const cardCount = carousel.querySelectorAll("[data-target='card']").length;

            // Define an offset property to dynamically update by clicking the button controls
            // as well as a maxX property so the carousel knows when to stop at the upper limit
            let offset = 0;
            const maxX = -((cardCount / 5) * carouselWidth + 
                        (cardMarginRight * (cardCount / 5)) - 
                        carouselWidth - cardMarginRight);


            // Add the click events
            leftButton.addEventListener("click", function() {
            if (offset !== 0) {
                offset += carouselWidth + cardMarginRight;
                carousel.style.transform = `translateX(${offset}px)`;
                }
            })
            
            rightButton.addEventListener("click", function() {
            if (offset !== maxX) {
                offset -= carouselWidth + cardMarginRight;
                carousel.style.transform = `translateX(${offset}px)`;
            }
            })
      </script>
</body>



</html>