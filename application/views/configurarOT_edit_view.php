  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section id="sEditarConfOT" class="content-header">
      <h1>
        Editar Configurar orden de trabajo
        <small>Agregar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Editar Configurar orden de trabajo</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Configuracion de OT</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="box-body">                        
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Proyecto</label>
                                    <div class="col-sm-10">
                                        <select name="id_tec" class="form-control">
                                            <option value="0">-Proyecto-</option>                                       
                                            <?php
                                                if(!is_null($proyectos)) :
                                                    foreach ($proyectos as $pry) { ?>
                                                        <option value="<?php echo $pry->ID_PROYECT;?>"><?php echo $pry->NOM_PROYECT;?></option>
                                                <?php
                                                    }
                                                endif;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ordeb de trabajo</label>
                                    <div class="col-sm-10">
                                        <select name="id_tec" class="form-control">
                                            <option value="0">-Orden de trabajo-</option>                                       
                                            <?php
                                                if(!is_null($ordenes)) :
                                                    foreach ($ordenes as $ord) { ?>
                                                        <option value="<?php echo $ord->ID_OT;?>"><?php echo $ord->DESC_OT;?></option>
                                                <?php
                                                    }
                                                endif;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fecha inicio</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input name="fecha_ini" type="text" class="form-control pull-right" id="datepickerInicio">
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
                                            <input name="fecha_ter" type="text" class="form-control pull-right" id="datepickerFin">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Recursos</label>
                                    <div class="col-sm-10">
                                        <select name="id_tec" class="form-control">
                                            <option value="0">-Recursos-</option>                                       
                                            <?php
                                                if(!is_null($recursos)) :
                                                    foreach ($recursos as $rcu) { ?>
                                                        <option value="<?php echo $rcu->ID_RECURSO;?>"><?php echo $rcu->NOMBRE_REC;?></option>
                                                <?php
                                                    }
                                                endif;
                                            ?>
                                        </select>
                                    </div>
                                </div>                     
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-info pull-right">Añadir</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->



            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Registro de Recursos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="tabla_recurso" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Nombre(s)</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Nombre(s)</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Status</th>
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