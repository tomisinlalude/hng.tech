<?php require('includes/config.php'); 
include 'partials/header.php';
include 'partials/navbar.php';

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: blog');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HNG Blog - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

	<div id="wrapper">
	<div style="display: flex; justify-content: flex-start; align-items: center">
		<div style="height: 60px; width:60px; border-radius: 5px; margin-right: 10px">
			<img src="../app/img/Rectangle 2.png" alt="">
		</div>
		<div>
			<h2 style="margin: 0">Sauce codee</h2>
			<p style="margin-top: 0">Updated on 2nd May 2019</p>
		</div>
	</div>
		
		<?php	
			echo '<div>';
				// echo '<h1>'.$row['postTitle'].'</h1>';
				// echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<a>'.$row['postCont'].'</a>';				
			echo '</div>';
		?>

		<img width="100%" src="../app/img/Rectangle 2.png" alt="">

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste architecto consectetur, hic explicabo enim dicta debitis. Dolorem delectus sed aut! Dolorem animi voluptatibus cumque velit nisi et sequi, labore debitis!</p>

	</div>
	

	<div class="main-recommended" style="background: #f1f1f1; padding: 30px 0">
       	<div id="wrapper">
			<div class="top-recommended">
			<h1>Recommended</h1>
			<span>view all blog post</span>
			</div>
			<div class="card">
		</div>
       </div>
</div>

<?php 
	include 'partials/footer.php';
?>
</body>
</html>