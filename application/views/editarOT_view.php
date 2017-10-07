
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar Orden de Trabajo</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputLastName3" class="col-sm-2 control-label">Descripción de Orden</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Descripción de la Orden">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLastName3" class="col-sm-2 control-label">Horas Estimadas</label>
                        <div class="col-sm-10">
                            <input type="number" min="1" class="form-control" id="inputPassword3" placeholder="Horas Estimadas para el Proyecto ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLastName3" class="col-sm-2 control-label">Fecha Inicio</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Fecha de Inicio de la Orden">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLastName3" class="col-sm-2 control-label">Fecha Final</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Fecha Final de la Orden">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLastName3" class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-10">
                            <select name="id_proyecto" class="form-control">
                                <option value="0">Seleccione</option>                 
                                <?php foreach ($estatus['estatus'] as $e) { ?>
                                <option value="<?=$e->ID_ESTATUS; ?>"><?=$e->DESC_ESTATUS; ?></option>
                                <?php } ?>                                        
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLastName3" class="col-sm-2 control-label">Cliente del Proyecto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Nombre del Cliente del Proyecto">
                        </div>
                    </div>

                    <div class="box-body">
                        <form role="form">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Proyecto</label>
                                <div class="col-sm-10">
                                    <select name="id_proyecto" class="form-control">
                                        <option value="0">Seleccione</option>                 
                                        <?php foreach ($proyectos['proyecto'] as $p) { ?>
                                        <option value="<?=$p->ID_PROYECT; ?>"><?=$p->NOM_PROYECT; ?></option>
                                        <?php } ?>                                        
                                    </select>
                                </div>
                            </div>

                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-default">Cancelar</button>
                                <button type="submit" class="btn btn-danger pull-right">Editar</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Registro de Orden</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
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
                                <td><?=$d->DESC_OT; ?></td>
                                <td><?=$d->HORAS_OT; ?></td>
                                <td><?=$d->FEC_IN_OT; ?></td>
                                <td><?=$d->FEC_FN_OT; ?></td>
                                <td><?=$d->DESC_ESTATUS; ?></td>
                                <td><?=$d->LIDER_CLIENTE_OT; ?></td>
                                <td><?=$d->NOM_PROYECT; ?></td>
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