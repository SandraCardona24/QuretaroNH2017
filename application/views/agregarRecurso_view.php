  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Recursos
        <small>Agregar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Agregar empleado</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title">Alta de recurso</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <input type="hidden"  id="identi">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nom" class="col-sm-2 control-label">Nombre(s)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nom" placeholder="Nombre(s)" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="paterno" class="col-sm-2 control-label">Apellido Paterno</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pater" placeholder="Apellido Paterno" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="materno" class="col-sm-2 control-label">Apellido Materno</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mater" placeholder="Apellido Materno" required="true">
                                </div>
                            </div>
                            <div class="box-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-10">
                                            <select id="estatus" class="form-control" required="true">
                                                <option value="0">-Estatus-</option>
                                                <?php
                                                    if(!is_null($estatus)) :
                                                        foreach ($estatus as $est) { ?>
                                                            <option value="<?php echo $est->ID_ESTATUS?>"><?php echo $est->DESC_ESTATUS?></option>                            
                                                        <?php
                                                        }
                                                    endif;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tecnología Primaria</label>
                                        <div class="col-sm-10">
                                            <select id="tp" class="form-control" required="true">
                                                <option value="0">-Tecnología-</option>
                                                <?php
                                                    if(!is_null($tecnologias)) :
                                                        foreach ($tecnologias as $tec1) { ?>
                                                            <option value="<?php echo $tec1->ID_TEC?>"><?php echo $tec1->NOMBRE_TEC?></option>                            
                                                        <?php
                                                        }
                                                    endif;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tecnología Secundaria</label>
                                        <div class="col-sm-10">
                                            <select id="ts" class="form-control" required="true">
                                            <option value="0">-Tecnología-</option>
                                                <?php
                                                    if(!is_null($tecnologias)) :
                                                        foreach ($tecnologias as $tec1) { ?>
                                                            <option value="<?php echo $tec1->ID_TEC?>"><?php echo $tec1->NOMBRE_TEC?></option>                            
                                                        <?php
                                                        }
                                                    endif;
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Puesto Recurso</label>
                                        <div class="col-sm-10">
                                            <select id="ps" class="form-control" required="true">
                                            <option value="0">-Puestos-</option>
                                                <?php
                                                    if(!is_null($puestos)) :
                                                        foreach ($puestos as $pst) { ?>
                                                            <option value="<?php echo $pst->ID_PUESTO?>"><?php echo $pst->DESC_PUESTO?></option>                            
                                                        <?php
                                                        }
                                                    endif;
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button id="saveRecurso" type="submit" class="btn btn-info pull-right">Agregar</button>
                            <button type="submit" class="btn btn-danger pull-right">Cancelar</button>
                        </div>
                    <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
              
        </div>

    </section>
    <!-- /.content -->
  </div>