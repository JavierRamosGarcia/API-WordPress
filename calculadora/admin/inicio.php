<?php

/**
 * Carga el formulario en el panel de administración de WordPress
 */
function calc_dashboard()
{	
		
?>
	<div class="wrap">
		<h2>Calculadora</h2>
		Plugin de calculadora desarrollado por Javier Ramos García
	</div>

	<div class="row row-init">
		<div class="col-12">
			<label for="ruta" class="form-label">Ruta para la API</label>
			<input type="text" class="form-control" id="ruta" required>
		</div>

		<hr class="hr-spacer">

		<div class="col-6">
			<label for="operador1" class="form-label">Operador 1</label>
			<input type="text" class="form-control" id="operador1" required>
		</div>
		<div class="col-6">
			<label for="operador2" class="form-label">Operador 2</label>
			<input type="text" class="form-control" id="operador2" required>
		</div>

		<hr class="hr-spacer">

		
		Operación
		<div class="row row-operator">
			<div class="col-2">
				<button type="button" id="suma" class="btn btn-secondary btn-calc process" value="add">Suma</button>
			</div>
			<div class="col-2">
				<button type="button" id="resta" class="btn btn-secondary btn-calc process" value="subtract">Resta</button>
			</div>
			<div class="col-2">
				<button type="button" id="multiplicacion" class="btn btn-secondary btn-calc process" value="multiply">Multiplicación</button>
			</div>
			<div class="col-2">
				<button type="button" id="division" class="btn btn-secondary btn-calc process" value="divide">División</button>
			</div>
			<div class="col-2">
				<button type="button" id="raiz" class="btn btn-secondary btn-calc process" value="square">Raiz cuadrada</button>
			</div>
			<div class="col-2">
				<button type="button" id="porcentaje" class="btn btn-secondary btn-calc process" value="percentage">Porcentaje</button>
			</div>							
		</div>
		<div class="row">
			<button type="button" id="calculo" class="btn btn-lg btn-primary btn-calc">Calcular</button>
		</div>

		<div>
			Resultado: <span id="result"></span>
		</div>

	</div>

<?php
}
?>
