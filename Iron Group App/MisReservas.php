<?php include("Recursos/Cabecera.php");?>
<body>
<?php include("Recursos/BarraDeNavegacion.php");?>

<div class="container-fluid">
	<div class="row justify-content-center">
			<!--Elementos del carousel-->
			<div id="carouselDias" class="carousel slide pl-3 pr-3" data-ride="carousel">
				<div class="carousel-inner">
					<!--Primera Semana-->
					<div class="carousel-item active">
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>08</h6>
							<h6>Lun</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>09</h6>
							<h6>Mar</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>10</h6>
							<h6>Mier</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>11</h6>
							<h6>Jue</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>12</h6>
							<h6>Vie</h6>
						</button>
					</div>
					<!--Segunda Semana-->
					<div class="carousel-item">
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>15</h6>
							<h6>Lun</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>16</h6>
							<h6>Mar</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>17</h6>
							<h6>Mier</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>18</h6>
							<h6>Jue</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>19</h6>
							<h6>Vie</h6>
						</button>
					</div>
					<!--Tercera Semana-->
					<div class="carousel-item">
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>21</h6>
							<h6>Lun</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>22</h6>
							<h6>Mar</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>23</h6>
							<h6>Mier</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>24</h6>
							<h6>Jue</h6>
						</button>
						<button class="btn btn-danger Btn-Carousel mr-2">
							<h6>25</h6>
							<h6>Vie</h6>
						</button>
					</div>
				</div>
				<!--Botones del carousel-->
			<a href="#carouselDias" class="carousel-control-prev Icono-Carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a href="#carouselDias" class="carousel-control-next Icono-Carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			</div>
	</div>

	<ul class="list-group mt-4">
			<li class="list-group-item Fondo-Carta">
				<div class="row">
					<h1 class="text-light">Hora</h1>
					<div class="ml-3 Linea-Vertical"></div>
					<div class="col-md">
						<h5 class="text-light">Seccion</h5>
						<div class="row">
							<h5 class="text-light ml-3">Entrenador</h5>
							<div class="col">
								<div class="row justify-content-end">
									<button class="btn rounded mr-3" style="height: 40px; width: 40px" data-toggle="modal" data-target="#modalDescripcion"></button>
									<button class="btn btn-dark" data-toggle="modal" data-target="#modalBotonera">Liberar</button>
								</div>
							</div>
						</div>
						<h5 class="text-light">Clase</h5>
						</div>
					</div>
				</div>
			</li>
		</ul>

	<!--Modal de la Descripcion-->
	<div class="modal fade" id="modalDescripcion" tabindex="1" role="dialog" arial-labelledby="labelDescripcion" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title SubTitulo" id="labelDescripcion">Descripcion</h5>
						<button type="button" class="close" data-dismiss="modal" arial-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="SubTitulo">Descripcion de la clase</h5>
					</div>
					<div class="modal-footer">
						<button class="btn-light rounded" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
	</div>
</div>

<?php include("Recursos/PieDePagina.php");?>
