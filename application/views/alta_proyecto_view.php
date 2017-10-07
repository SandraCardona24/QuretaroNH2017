<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>rsc/js/proyecto.js"></script>
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
						<label class="control-label"> Tecnologia </label>
							<select name="id_tec" id="id_tec" class="form-control">
								<option>-------</option>
									<?php 
										if(!is_null($tecnologia)) :
											foreach ($tecnologia as $tec) {?>
                            	<option value="<?php echo $tec->ID_TEC?>">
                            		<?php echo $tec->NOMBRE_TEC;?>
                            	</option>
                            		<?php
                            		}
                         			 endif;
                			?>					
						</select>						
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<label class="control-label">Oficina</label>
						<select name="id_oficina" id="id_oficina" class="form-control">
							<option>-------</option>
							<?php 
							if (!is_null($oficina)): 
								foreach ($oficina as $ofi) {?>
								<option value="<?php echo $ofi->ID_OFICINA?>">
									<?php echo $ofi->NOMBRE_OFI;?>
								</option>
								<?php
							    }
							endif; 

							?>
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
<div class="box-body">
  <table id="mytable" class="table">
    <thead class="thead-inverse">
      <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Tecnologia</th>
        <th>Fecha de inicio</th>
        <th>Fecha de termino</th>
        <th>Estatus</th>
        <th>Oficina</th>
         
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if(!is_null($proyectos)) :
            foreach ($proyectos as $rec) {?>
            <tr id="tr-<?php echo $rec->ID_PROYECT;?>">
              <td><?php echo $rec->NOM_PROYECT;?></td>
              <td><?php echo $rec->DESC_PROYECT;?></td>
              <td><?php echo $rec->NOM_PROYECT;?></td>
              <td><?php echo $rec->FECHA_INI;?></td>
              <td><?php echo $rec->FECHA_TER; ?></td>
              <td><?php echo $rec->DESC_ESTATUS; ?></td>
              <td><?php echo $rec->ID_ESTATUS; ?></td>

               
              <td> <?php if ($rec->ID_ESTATUS != "3") {   ?> 
              	<button class="editar-rec btn btn-warning btn-block" data-id="<?php echo $rec->ID_PROYECT;?>">Editar</button>
              	<?php } ?>
              </td>
              <td>
              	<?php if ($rec->ID_ESTATUS != "3") {   ?> 
              	<button class="eliminar-pro btn btn-danger btn-block" data-id="<?php echo $rec->ID_PROYECT;?>">Cancelar</button>
              	<?php } ?>
              </td>
            </tr>
          <?php
              
            }
          endif;
        ?>
    </tbody>
  </table>
</div>
<!-- /.box-body -->
