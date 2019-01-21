<?php
include 'handlers/videosHandler.php';

?>
<!DOCTYPE html>
<html lang="en">
	<?php
		include 'meta/homeMeta.php';
		
	?>
	<body>

		<?php
			$videos=new Video();
			
			include 'layout/header.php';
			//echo $videos->testApi();
			$response=$videos->listCategories();
			//$response=$videos->listVideos(2);
			var_dump($response);
			include 'layout/videos.php';
			include 'layout/footer.php';
		?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
