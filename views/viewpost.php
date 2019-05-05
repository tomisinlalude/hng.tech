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

		<p><a href="./blog.php">Return Back</a></p>
	<div style="display: flex; justify-content: flex-start; align-items: center">
		<div style="height: 60px; width:60px; border-radius: 50px; margin-right: 10px">
			<img src="../app/img/Rectangle 2.png" alt="">
		</div>
		<div>
			<h2>Lekia</h2>
			<p>Updated on May, 05 2019</p>
		</div>
	</div>
		


		<h1>HNG Blog</h1>
		<hr />
		<p><a href="/blog">Post Index</a></p>



		<?php	
			echo '<div>';
				echo '<h1>'.$row['postTitle'].'</h1>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
		?>

	</div>

</body>

<?php include 'partials/footer.php'?>;
</html>