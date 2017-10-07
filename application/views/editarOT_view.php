
<div class="content-wrapper">

    <section class="content-header">
      <h1>
        Ordenes de Trabajo
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Editar Orden de Trabajo</li>
    </ol>
</section>
<section class="content">

    <div class="row">
        <div class="col-xs-12">
        
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar Orden de Trabajo</h3>
              </div>           
              <form method="post" action="updateOrden" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="desc" class="col-sm-2 control-label">Descripción de Orden</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="desc" name="desc" placeholder="Descripción de la Orden" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="horas" class="col-sm-2 control-label">Horas Estimadas</label>
                        <div class="col-sm-10">
                            <input type="number" min="1" class="form-control" name="horas" id="horas" placeholder="Horas Estimadas para el Proyecto " required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fecha inicio</label>
                        <div class="col-sm-10">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="fec_in" id="fec_in" required="true">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fecha Fin</label>
                        <div class="col-sm-10">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="fec_fin" id="fec_fin" required="true">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id_estatus" class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-10">
                            <select id="id_estatus" name="id_estatus" class="form-control" required="true">
                                <option value="0">Seleccione</option>                 
                                <?php foreach ($estatus['estatus'] as $e) { ?>
                                <option value="<?=$e->ID_ESTATUS; ?>"><?=$e->DESC_ESTATUS; ?></option>
                                <?php } ?>                                        
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lider" class="col-sm-2 control-label">Cliente del Proyecto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lider" id="lider" placeholder="Nombre del Cliente del Proyecto" required="true">
                        </div>
                    </div>

                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Proyecto</label>
                            <div class="col-sm-10">
                                <select name="id_proyecto" id="id_proyecto" class="form-control" required="true">
                                    <option value="0">Seleccione</option>                 
                                    <?php foreach ($proyectos['proyecto'] as $p) { ?>
                                    <option value="<?=$p->ID_PROYECT; ?>"><?=$p->NOM_PROYECT; ?></option>
                                    <?php } ?>                                        
                                </select>
                            </div>
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="hidden" id="id_ot" name="id_ot">
                            <button type="submit" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-info pull-right">Editar</button>
                        </div>
                        <!-- /.box-footer -->

                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Registro de Orden</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table id="tabla_OT" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Descripción de Orden</th>
                    <th>Horas Estimadas</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Final</th>
                    <th>Estatus</th>
                    <th>Cliente</th>
                    <th>Proyecto</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty ($ordenes['ordenes'])) { ?>
                <?php foreach ($ordenes['ordenes'] as $d) { ?>
                <tr>
                    <td><?=$d->ID_OT; ?></td>
                    <td><?=$d->DESC_OT  ; ?></td>
                    <td><?=$d->HORAS_OT; ?></td>
                    <td><?=$d->FEC_IN_OT; ?></td>
                    <td><?=$d->FEC_FN_OT; ?></td>
                    <td id="estatus_<?=$d->ID_OT;?>"><?=$d->DESC_ESTATUS; ?></td>
                    <td><?=$d->LIDER_CLIENTE_OT; ?></td>
                    <td><?=$d->NOM_PROYECT; ?></td>
                    <td><button class="editar-ot btn btn-warning btn-block" data-id="<?php echo $d->ID_OT;?>">Editar</button></td>
                    <td><button class="eliminar-ot btn btn-danger btn-block" data-id="<?php echo $d->ID_OT;?>">Cancelar</button></td>
                </tr>               
                <?php } ?>

                <?php }  else { ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong><?="SIN REGISTROS";?></strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php } ?>  
            </tbody>
            <tfoot>
              <tr>
                <th>Orden de Trbajo</th>
                <th>Descripción de Orden</th>
                <th>Horas Estimadas</th>
                <th>Fecha Inicio</th>
                <th>Fecha Final</th>
                <th>Estatus</th>
                <th>Cliente</th>
                <th>Proyecto</th>
            </tr>
        </tfoot>
    </table>
</div>
<!-- /.box-body -->
</div>
</div>
<!-- /.box -->
</div>

</section>
<!-- /.content -->
</div>