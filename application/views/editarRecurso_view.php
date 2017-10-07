  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Recursos
        <small>Editar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Editar recurso</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Editar recurso</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <input type="hidden" id="identi">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputUser3" class="col-sm-2 control-label">Nombre(s)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nom" placeholder="Nombre(s)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputLastName3" class="col-sm-2 control-label">Apellido Paterno</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pater" placeholder="Apellido Paterno">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputLastName3" class="col-sm-2 control-label">Apellido Materno</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mater" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="box-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-10">
                                            <select id="estatus" class="form-control">
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
                                            <select id="tp" class="form-control">
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
                                            <select id="ts" class="form-control">
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
                                            <select id="ps" class="form-control">
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
                            <button id="editRecurso" type="submit" class="btn btn-success pull-right">Guardar</button>
                            <button type="submit" class="btn btn-danger pull-right">Cancelar</button>
                        </div>
                    <!-- /.box-footer -->
                    </form>
                </div>
            </div>

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
                        <?php
                            if(!is_null($recursos)) :
                                foreach ($recursos as $rec) {?>
                                    <tr id="tr-<?php echo $rec->ID_RECURSO;?>">
                                        <td><?php echo $rec->NOMBRE_REC;?></td>
                                        <td><?php echo $rec->APATERNO_REC;?></td>
                                        <td><?php echo $rec->AMATERNO_REC;?></td>
                                        <td><?php echo $rec->DESC_ESTATUS;?></td>
                                        <td><button class="editar-rec btn btn-warning btn-block" data-id="<?php echo $rec->ID_RECURSO;?>">Editar</button></td>
                                        <td><button class="eliminar-rec btn btn-danger btn-block" data-id="<?php echo $rec->ID_RECURSO;?>">Eliminar</button></td>
                                    </tr>
                                <?php
                                }
                            endif;
                        ?>
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