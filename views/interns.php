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
                <img class="card-img-top" style=" object-fit: cover" src="http://mho6nxweoblkn351jmpbb12y.wpengine.netdna-cdn.com/wp-content/uploads/2018/09/male-placeholder.jpg" alt="Card image cap">
                <p class="name">Stephen Afam Osemene</p>
                <p class="stack"> Software Engineer <br />@Africastalking</p>
            </div> -->

        </div>

        
	</div>

	<?php include 'partials/footer.php'; ?>


</body>



</html>