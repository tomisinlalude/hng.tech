<?php require('includes/config.php');
include 'partials/header.php';
include 'partials/navbar.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HNG Blog</title>
    <link rel="stylesheet" href="..app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/main.css">

</head>
<body>

	<div id="wrapper">

		<h1>HNG Blog</h1>
		<h1><a href="views/admin/login.php">Post to Blog</a></h1>
		
		<hr />

		<?php
			try {

				$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
				while($row = $stmt->fetch()){
					
					echo '<div>';
						echo '<h1><a href="views/viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
						echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
						echo '<p>'.$row['postDesc'].'</p>';				
						echo '<p><a href="views/viewpost.php?id='.$row['postID'].'">Read More</a></p>';				
					echo '</div>';

				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>

	</div>
	<?php include 'partials/footer.php'?>;
</body>
</html>