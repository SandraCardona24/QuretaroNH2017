<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="OT/insertOrden" method="post">
			<label>Desc</label>
			<input type="text" name="desc"><br>
			<label>Horas</label>
			<input type="text" name="horas"><br>
			<label>Fecha inicio</label>
			<input type="text" name="fec_in"><br>
			<small>Fecha fin</small>
			<input type="text" name="fec_fin"><br>
			<label>Estatus</label>
			<select name="id_estatus">
				<option value="0">Seleccione</option>
				<?php foreach ($estatus['estatus'] as $e) { ?>
				<option value="<?=$e->ID_ESTATUS; ?>"><?=$e->DESC_ESTATUS; ?></option>					
				<?php } ?>
			</select><br>
			<label>Lider</label>
			<input type="text" name="lider"><br>
			<input type="submit" name="Aceptar">
		</form>
	</div>
	<br><br>
	<div>
		<table>			
			<tr>
				<th>ID</th>
				<th>DESCRIPCION</th>
				<th>HORAS</th>
				<th>FECHA INICIO</th>
				<th>FECHA FIN</th>
				<th>ESTATUS</th>
				<th>LIDER</th>
			</tr>
			<?php if (!empty ($ordenes['ordenes'])) { ?>
				<?php foreach ($ordenes['ordenes'] as $d) { ?>
				<tr>
					<td><?=$d->ID_OT; ?></td>
					<td><?=$d->DESC_OT; ?></td>
					<td><?=$d->HORAS_OT; ?></td>
					<td><?=$d->FEC_IN_OT; ?></td>
					<td><?=$d->FEC_FN_OT; ?></td>
					<td><?=$d->DESC_ESTATUS; ?></td>
					<td><?=$d->LIDER_CLIENTE_OT; ?></td>
				</tr>				
				<?php } ?>

			<?php }  else { ?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><?="SIN REGISTROS";?></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			<?php } ?>			
			
			
		</table>

	</div>

</body>
</html>