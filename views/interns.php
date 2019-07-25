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
           
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis aliquet erat, quis dignissim risus.  
                Donec suscipit libero ut dignissim eleifend. Nullam non felis non urna pharetra euismod. 
                Proin consequat suscipit orci nec dignissim. Sed tempor sem a lectus auctor, in sagittis tellus scelerisque. 
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

                echo "<div class='intern'><img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'><p class='name'>".$intern->name."</p>
                <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a></p></div>";

            }
            ?>

        </div>


         <!-- Logo Slider  -->
         <div >
        <div class="wrapper">
        <ul class="carousel" data-target="carousel">
          <li class="card" data-target="card">
                <a href="https://www.hotels.ng">
                    <img src="../app/img/interns/freeme.png" alt="hotels.ng logo">
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