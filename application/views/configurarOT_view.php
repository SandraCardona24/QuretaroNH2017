
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section id="sAgregarConfOT" class="content-header">
      <h1>
        Configurar orden de trabajo
        <small>Agregar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Configurar orden de trabajo</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Alta de OT</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="box-body">                        
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Proyecto</label>
                                    <div class="col-sm-10">
                                        <select name="id_proy" id="id_proy" class="form-control">
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
                                        <select name="id_tec" id="orden" class="form-control">
                                            <option value="0">-Orden de trabajo-</option>                                       
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

        </div>

    </section>
    <!-- /.content -->
</div>