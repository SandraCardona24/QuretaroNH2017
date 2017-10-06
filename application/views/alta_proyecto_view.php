<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
	<form action="<?=base_url()?>index.php/Proyecto/insertar" 
	class="row" id="agregar-proyecto" method="post">
		<div class="col-sm-12">
			<div class="panel panel-primary">
			<div class="panel-heading">
				<h2>Nuevo proyecto</h2>
			</div>
			<!-- /.panel-heading -->

			<div class="panel-body">
				<div class="col-sm-6">
					<div id="nom_proyect" class="form-group">
						<label for="nom_proyect" class="control-label">
							Nombre de proyecto
						</label>

						<input 
							type="text" 
							name="nom_proyect" 
							id="nom_proyect" 
							class="form-control" required="required">	
					</div>
					<!-- /.form-group -->
				</div>
				<!-- /.col-sm-6 -->

				<div class="col-sm-3">
					<div id="val-costo" class="form-group">
						<label for="fecha_ini" class="control-label">
							Fecha de inicio
						</label>

						<input 
							type="date" 
							name="fecha_ini" 
							id="fecha_ini" 
							class="form-control" required="required">	
						
					</div>
					<!-- /.form-group -->
				</div>
				<!-- /.col-sm-3 -->

				<div class="col-sm-3">
					<div id="val-precio" class="form-group">
						<label for="fecha_ter" class="control-label">
							Fecha de término
						</label>

						<input 
							type="date" 
							name="fecha_ter" 
							id="fecha_ter" 
							class="form-control" required="required">	
						
					</div>
					<!-- /.form-group -->
				</div>
				<!-- /.col-sm-3 -->

				<div class="col-sm-6">
					<div id="val-descripcion" class="form-group">
						<label for="desc_proyect" class="control-label">
							Descripción
						</label>

						<textarea 				
							name="desc_proyect" 
							id="desc_proyect" 
							rows="5" 
							class="form-control" required="required"></textarea>
						
					</div>
					<!-- /.form-group -->
				</div>
				<!-- /.col-sm-6 -->
				<div class="col-sm-2">
					<div id="val-tecnologia" class="form-group">
						<label class="control-label">
							Tecnologia
						</label>
						<select name="id_tec" id="id_tec" class="form-control">
							<option value="0">-------</option>
							<option id="1" value="1">Java</option>
							<option id="2" value="2">Cobol</option>
							<option id="3" value="3">BI</option>
							<option id="4" value="4">PHP</option>
							<option id="5" value="5">Javascript</option>
							<option id="6" value="6">Xamarin</option>
							<option id="7" value="7">Swift</option>
							<option id="8" value="8">SQL</option>
							<option id="9" value="9">DB2</option>
							<option id="10" value="10">AS-400</option>
							<option id="11" value="11">HTML</option>
							<option id="12" value="12">Android</option>
						</select>
						
					</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">

						<!-- <input type="submit" 
						value="Agregar Usuario"
						class="btn btn-primary" /> -->

						<button type="submit" 
							class="btn btn-primary">
							Aceptar	
						</button>
						
					</div>
					<!-- /.form-group -->
				</div>
				<!-- /.col-sm-12 -->

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
		</div>
	</form>
	<!-- /.row -->
</div>
<!-- /.container -->