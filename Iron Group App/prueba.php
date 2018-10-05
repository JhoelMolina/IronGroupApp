<?php 
include('Recursos/Cabecera.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fondo</title>
</head>
<body>
	<div class="container-fluid">
		<?php 
			$url = "http://triatlon.org/triweb/index.php/feed/";
			$rss = simplexml_load_file($url);
			if ($rss) 
			{
				$items = $rss->channel->item;
				foreach ($items as $key => $item) 
				{
					echo '<div class="row justify-content-center">';
					echo '<div class="card text-white bg-dark mb-3" style="max-width: 750px;">';
					echo '<div class="card-header"><h4><a class="nav-link text-light" href="'.$item->link.'" target="_blank">'.$item->title.'</a></h4></div>';
					echo '<div class="card-body"><h5 class="card-title">'.$item->pubDate.'</h5><p class="card-text">'.$item->description.'</p></div>';
					echo '</div>';
					echo '</div>';
				}
			}
		 ?>	
	</div>
</body>
</html>