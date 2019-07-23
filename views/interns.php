<html>
<?php include 'partials/header.php'; ?>

<body class="pi">
	<?php include 'partials/navbar.php'; ?>
	<div class="container intern-body">

        <!-- Header -->
        <header class="head">
         
            <h3>Our Past Interns</h3>

        </header>
        
        <!-- Filters -->
        <!-- <div class="row filters">
            <select class="select-css">
                <option>Company</option>
                <option>Andela</option>
                <option>Hotels.ng</option>
                <option>Gloopro</option>
                <option>Tizeti</option>
                <option>Sprinble</option>
                <option>Oranges</option>
                <option>Oranges</option>
                <option>Oranges</option>
            </select>
            <select class="select-css">
                <option>Stack</option>
                <option>Frontend</option>
                <option>Backend</option>
                <option>Fullstack</option>
                <option>Designer</option>
            </select>
            <select class="select-css">
                <option>Internship</option>
                <option>Internship 1</option>
                <option>Internship 2</option>
                <option>Internship 3</option>
                <option>Internship 4</option>
                <option>Internship 4</option>
            </select>


        </div> -->
        
        <div class="row cards interns">

<?php
 
  $data = file_get_contents(__DIR__ . '/storage/data.json'); 
  $interns = json_decode($data); 

  foreach($interns as $intern){

    echo "<div class='intern'><img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'><p class='name'>".$intern->name."</p>
    <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a></p></div>";

  }
?>

           
<!--            
           
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="https://res.cloudinary.com/gorge/image/upload/e_grayscale/v1557841999/FullSizeRender-8.jpg" alt="Card image cap">
                <p class="name">Iruene  Adokiye</p>
                <p class="stack">Full Stack Developer</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="https://res.cloudinary.com/dwde2t6ef/image/upload/e_grayscale/v1557860963/IMG_8707_1_a2ahuk.jpg" alt="Card image cap">
                <p class="name">Wisdom A. Ebong</p>
                <p class="stack">Full Stack Developer</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="https://res.cloudinary.com/avatechng/image/upload/e_grayscale/c_thumb,w_200,g_face/v1557836685/IMG_20180913_111706_3.jpg" alt="Card image cap">
                <p class="name">Shafi Abdulrahman</p>
                <p class="stack">Back end Developer</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="https://res.cloudinary.com/mercyikpe/image/upload/e_grayscale/v1554312716/mercy_1_twchei.jpg" alt="Card image cap">
                <p class="name">Mercy Ikpe</p>
                <p class="stack">Front End Developer</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Osumgba Chiamaka</p>
                <p class="stack">Software Developer <br />@ighubafrica</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Ikechukwu Nwakanma</p>
                <p class="stack">Back end Developer</p>
            </div>

            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Vincent Nwonah</p>
                <p class="stack">Software Engineer (dotnet)</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Oluwatomisin Lalude</p>
                <p class="stack">Front End Web Developer<br />@Kessintech Technologies Ltd</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Albert</p>
                <p class="stack">Mobile developer<br />@verifi.ng</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Chinedu Ebinim</p>
                <p class="stack">BackEnd Developer<br />@verifi.ng</p>
            </div>
            
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Ephraim Aigbefo</p>
                <p class="stack">Software developer<br />@True Identity Company</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Oghenero Paul-Ejukorlem</p>
                <p class="stack">Software Engineer <br />@Andela</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Gift John </p>
                <p class="stack">Frontend Developer <br />@Codekago Interactive</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">David Kuforiji</p>
                <p class="stack">Mobile Developer <br />@Enterfive</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Andy Eshiet</p>
                <p class="stack">Android Developer <br />@Groove.ng</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Iheonye Chukwuemeka</p>
                <p class="stack">UI/UX Designer <br />@Traindemy</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Chukwuemeka Somto Promise</p>
                <p class="stack">UI/UX  Designer <br />@Konga</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Everistus Olumese</p>
                <p class="stack">Senior Software Engineer <br />@Stears</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Orie Chinedu</p>
                <p class="stack">Software Developer <br />@Andela</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Juliet Chidimma Ezekwe</p>
                <p class="stack">Software Developer <br />@Andela</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Edidiong Udombat</p>
                <p class="stack">Software Developer <br />@Andela</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Victor Ugweze</p>
                <p class="stack">Software Developer <br />@Andela</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Celestine Ekor-Ordan</p>
                <p class="stack">Software Developer <br />@Andela</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Destiny Ihejirika</p>
                <p class="stack"> .NET and ESQL DEVELOPER <br />@FCMB</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Ifeoluwasimi Olusola</p>
                <p class="stack"> Product Designer <br />@Hotels.ng</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Onwuorah Okechukwu</p>
                <p class="stack"> Software Engineer <br />@Epidalert</p>
            </div>  
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">OLASUPO Abdulhakeem</p>
                <p class="stack"> Product Designer <br />@Tribesquare.co</p>
            </div> 
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Namnso Ukpanah</p>
                <p class="stack"> Product Designer <br />@Flutterwave</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Odusanya ’Tomi</p>
                <p class="stack"> Software Engineer <br />@Paystack</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Shalvah</p>
                <p class="stack"> Software Engineer</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">David Inyangetoh</p>
                <p class="stack"> Software Engineer <br />@Start Innovation Hub</p>
            </div> 
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Emem Brownson</p>
                <p class="stack"> Software Engineer <br />@Start Innovation Hub</p>
            </div>
            <div class="intern">
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Stephen Afam Osemene</p>
                <p class="stack"> Software Engineer <br />@Africastalking</p>
            </div> -->

        </div>

        
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<?php include 'partials/footer.php'; ?>


</body>



</html>