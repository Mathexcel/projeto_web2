<?php include("componentes/header.php"); ?>

<div class="row">
	<div class="col s4" style="">
		<div class="card">
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#motorista" class="active" style="color: teal">Motorista</a></li>
					<li class="tab"><a href="#corridas" style="color: teal">Corridas</a></li>
					<li class="tab"><a href="#passageiro" style="color: teal">Passageiros</a></li>
				</ul>
			</div>
			<div class="card-content white lighten-4">
				<?php include("componentes/corrida.php"); ?>
				<?php include("componentes/motorista.php"); ?>
				<?php include("componentes/passageiro.php"); ?>
			</div>
		</div>
	</div>
	<div class="col s8">
	<?php include("componentes/view.php"); ?>
	</div>
</div>


<?php include("componentes/footer.php"); ?>