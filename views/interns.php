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
                <option>Apples</option>
                <option>Bananas</option>
                <option>Grapes</option>
                <option>Oranges</option>
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

           

        </div>

        
	</div>
	<?php include 'partials/footer.php'; ?>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>



</html>