  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Proyectos
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Editar proyecto</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Proyecto</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="post" action="updateProyecto" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputUser3" class="col-sm-2 control-label">Nombre del Proyecto</label>
                            <div class="col-sm-10">
                                <input name="nom_proyect" type="text" class="form-control" id="nom_proyect" placeholder="Nombre del Proyecto" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLastName3" class="col-sm-2 control-label">Descripción del Proyecto</label>
                            <div class="col-sm-10">
                                <input name="desc_proyect" type="text" class="form-control" id="desc_proyect" placeholder="Descripción del Proyecto" required="true">
                            </div>
                        </div>
                        <div class="box-body">                   
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tecnología</label>
                                    <div class="col-sm-10">
                                        <select id="id_tec" name="id_tec" class="form-control" required="true">
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($tecnologia as $est) {?>
                                            <option value="<?=$est->ID_TEC?>"><?=$est->NOMBRE_TEC;?></option>
                                            <?php }  ?> 
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
                                            <input name="fecha_ini" type="text" class="form-control pull-right" id="fecha_ini" required="true">
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
                                            <input name="fecha_ter" type="text" class="form-control pull-right" id="fecha_ter" required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Estatus</label>
                                    <div class="col-sm-10">
                                        <select id="id_estatus" name="id_estatus" class="form-control">
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($estatus as $est) {?>
                                            <option value="<?=$est->ID_ESTATUS?>"><?=$est->DESC_ESTATUS;?></option>
                                            <?php }  ?>  
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Oficina</label>
                                    <div class="col-sm-10">
                                        <select id="id_oficina" name="id_oficina" class="form-control" required="true">
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($oficina as $est) {?>
                                            <option value="<?=$est->ID_OFICINA?>"><?=$est->NOMBRE_OFI;?></option>
                                            <?php }  ?>
                                        </select>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="hidden" id="id_proyect" name="id_proyect">
                        <button type="reset" value="reset" class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-info pull-right">Editar</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Registro de Proyectos</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="tabla_proyecto" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nombre del Proyecto</th>
                        <th>Descripción del Proyecto</th>
                        <th>Tecnología</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Status</th>
                        <th>Oficina</th>
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
                        <td id="estatus_<?=$rec->ID_PROYECT;?>"><?php echo $rec->DESC_ESTATUS; ?></td>
                        <td><?php echo $rec->NOMBRE_OFI; ?></td>
                        <td><button class="editar-pro btn btn-warning btn-block" data-id="<?=$rec->ID_PROYECT;?>">Editar</button></td>
                        <td><button class="eliminar-pro btn btn-danger btn-block" data-id="<?=$rec->ID_PROYECT;?>">Cancelar</button></td>
                    </tr>
                    <?php

                }
            endif;
            ?> 
        </tbody>
        <tfoot>
          <tr>
            <th>Nombre del Proyecto</th>
            <th>Descripción del Proyecto</th>
            <th>Tecnología</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Status</th>
            <th>Oficina</th>
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