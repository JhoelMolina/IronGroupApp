<?php 
include("Recursos/Cabecera.php"); ?>
<body>
<?php 
include("Recursos/BarraDeNavegacion.php");
?>
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
					echo '<div class="card text-white Fondo-Carta mb-3" style="max-width: 750px;">';
					echo '<div class="card-header"><h4><a class="nav-link text-light" href="'.$item->link.'" target="_blank">'.$item->title.'</a></h4></div>';
					echo '<div class="card-body"><p class="card-text">'.$item->description.'</p></div>';
					echo '</div>';
					echo '</div>';
				}
			}
		 ?>	
	</div>
<?php 
include('Recursos/PieDePagina.php');
 ?>