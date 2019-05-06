<?php require('includes/config.php'); 
include 'partials/header.php';
include 'partials/navbar.php';

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate, username FROM blog_posts, blog_members WHERE postID = :postID');
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
	<!-- <p><a href="./blog.php">Return Back</a></p> -->
		<div style="display: flex; justify-content: flex-start; align-items: center">
			<div class="auth_img">
				<img height="50px" width="50px" src="../app/img/Rectangle 2.png" alt="">
			</div>
			<div >
				<h2 style="margin: 0"> <?php echo $row['username'];?> </h2>
				<p style="margin-top: 0">Posted on <?php echo date('jS M Y', strtotime($row['postDate'])) ?></p>
			</div>


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
				echo '<a style="text-align: justify">'.$row['postCont'].'</a>';
			echo '</div>';
		?>

		<!-- <div style="display:flex; justify-content:center; margin-bottom:20px">
			<div class="post-auth">
				<img src="../app/img/Rectangle 2.png" alt="">
				written by
				<span style="color:#222; font-weight:600; margin:0 5px"> Sauce code </span> in
				<span style="color:#1fbdef; font-weight:600; margin:0 5px"> Design </span>
			</div>
		</div>
		

	</div>
	 -->

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