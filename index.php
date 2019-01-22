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
			$cat_id=1;
			$videos=new Video();
			if(isset($_GET["cat_id"]))
				$cat_id=$_GET["cat_id"];	
			if(isset($_GET["page"]))
				$current=$_GET["page"];
			else
				$current=1;
			$prev=$current-1;
			$next=$current+1;
			$first=1;
			$total=$videos->getTotal($cat_id);
			if($total % 9==0){
				$last=intdiv($total,9);
			}
			else{
				$last=intdiv($total,9) +1;
			}
			
			$categories=$videos->listCategories();
			$catDate=$videos->listVideos($cat_id,$current);
			$catDate=$videos->addthumbnil($catDate);
			include 'layout/header.php';
			include 'layout/videos.php';
			include 'layout/footer.php';
		?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
