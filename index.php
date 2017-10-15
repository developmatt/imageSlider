<html>
<head>
	<title>Javascript/Jquery Image Slider Porpose</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="carousel">

	<?php
		//Images array
		$images = [
						'https://yt3.ggpht.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAAAAAA/OixOH_h84Po/s900-c-k-no-mo-rj-c0xffffff/photo.jpg',
						'https://index.tnwcdn.com/images/9794fd32b7b694d7720d2e655049051b78604f09.jpg',
						'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1200px-Apple_logo_black.svg.png',
						'https://images.techhive.com/images/article/2016/10/firefox-logo-100690302-large.jpg',
						'https://yt3.ggpht.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAAAAAA/OixOH_h84Po/s900-c-k-no-mo-rj-c0xffffff/photo.jpg',
						'https://index.tnwcdn.com/images/9794fd32b7b694d7720d2e655049051b78604f09.jpg',
						'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1200px-Apple_logo_black.svg.png',
						'https://images.techhive.com/images/article/2016/10/firefox-logo-100690302-large.jpg',
						'https://yt3.ggpht.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAAAAAA/OixOH_h84Po/s900-c-k-no-mo-rj-c0xffffff/photo.jpg',
						'https://index.tnwcdn.com/images/9794fd32b7b694d7720d2e655049051b78604f09.jpg',
						'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1200px-Apple_logo_black.svg.png',
						'https://images.techhive.com/images/article/2016/10/firefox-logo-100690302-large.jpg',
						'https://yt3.ggpht.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAAAAAA/OixOH_h84Po/s900-c-k-no-mo-rj-c0xffffff/photo.jpg',
						'https://index.tnwcdn.com/images/9794fd32b7b694d7720d2e655049051b78604f09.jpg',
						'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1200px-Apple_logo_black.svg.png',
						'https://images.techhive.com/images/article/2016/10/firefox-logo-100690302-large.jpg',
						'https://yt3.ggpht.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAAAAAA/OixOH_h84Po/s900-c-k-no-mo-rj-c0xffffff/photo.jpg',
						'https://index.tnwcdn.com/images/9794fd32b7b694d7720d2e655049051b78604f09.jpg',
						'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1200px-Apple_logo_black.svg.png',
						'https://images.techhive.com/images/article/2016/10/firefox-logo-100690302-large.jpg',
						'https://yt3.ggpht.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAAAAAA/OixOH_h84Po/s900-c-k-no-mo-rj-c0xffffff/photo.jpg',
						'https://index.tnwcdn.com/images/9794fd32b7b694d7720d2e655049051b78604f09.jpg',
						'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1200px-Apple_logo_black.svg.png',
						'https://images.techhive.com/images/article/2016/10/firefox-logo-100690302-large.jpg',
					];
		$strImage = '';
		foreach ($images as $image) {
			$strImage .= "'" . $image . "', ";
		}
	?>
	<script type="text/javascript">
		//Populating javascript images string (will be used in script.js)
		var images = [<?= $strImage; ?>];
	</script>
	<div class="slider-image">

		<div class="main-image">
			<img src="https://yt3.ggpht.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAAAAAA/OixOH_h84Po/s900-c-k-no-mo-rj-c0xffffff/photo.jpg">
		</div>
		<div class="miniatures">
			<!-- Button back -->
			<button type="button" class="button back">Back</button>

			<?php
				$counter = 0;
				foreach($images as $image) :
			?>
				<!-- Building list of miniatures -->
				<div class="miniature-box">
					<img src="<?= $image ?>" alt="">
				</div>
			<?php
				endforeach;
			?>

			<!-- Button front -->
			<button type="button" class="button front">Front</button>

		</div>



	</div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
