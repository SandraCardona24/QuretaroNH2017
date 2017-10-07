  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orden de Trabajo
        <small>Agregar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Agregar Orden de Trabajo</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Alta de Orden de Trabajo</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="OT/insertOrden" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputLastName3" class="col-sm-2 control-label">Descripción de Orden</label>
                            <div class="col-sm-10">
                                <input name="desc" type="text" class="form-control" id="inputPassword3" placeholder="Descripción de la Orden" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLastName3" class="col-sm-2 control-label">Horas Estimadas</label>
                            <div class="col-sm-10">
                                <input name="horas" type="number" min="0" class="form-control" id="inputPassword3" placeholder="Horas Estimadas para el Proyecto ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fi" class="col-sm-2 control-label">Fecha Inicio</label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="fec_in" type="text" class="form-control pull-right" id="datepickerInicio" placeholder="Fecha de Inicio de la Orden">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLastName3" class="col-sm-2 control-label">Fecha Final</label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="fec_fin" type="text" class="form-control pull-right" id="datepickerFin" placeholder="Fecha Fin de la Orden">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLastName3" class="col-sm-2 control-label">Estatus</label>
                            <div class="col-sm-10">
                                <select name="id_estatus" class="form-control">
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
                                <input name="lider" type="text" class="form-control" id="inputPassword3" placeholder="Nombre del Cliente del Proyecto">
                            </div>
                        </div>

                        <div class="box-body">

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
                            <button type="submit" class="btn btn-info pull-right">Añadir</button>
                        </div>
                        <!-- /.box-footer -->

                    </div>
                    <!-- /.box -->
                </form>
            </div>

        </section>
        <!-- /.content -->
    </div>