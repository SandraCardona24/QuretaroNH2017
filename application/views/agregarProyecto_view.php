  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section id="sAgregarProyecto" class="content-header">
        <h1>
            Proyectos
            <small>Agregar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Agregar Proyectos</li>
        </ol>
    </section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Alta de Proyecto</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="Proyecto/insertar" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputUser3" class="col-sm-2 control-label">Nombre del Proyecto</label>
                            <div class="col-sm-10">
                                <input name="nom_proyect" type="text" class="form-control" id="inputProyecto" placeholder="Nombre del Proyecto" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLastName3" class="col-sm-2 control-label">Descripción del Proyecto</label>
                            <div class="col-sm-10">
                                <input name="desc_proyect" type="text" class="form-control" id="inputDescripcion" placeholder="Descripción del Proyecto" required="true">
                            </div>
                        </div>
                        <div class="box-body">                        
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tecnología</label>
                                    <div class="col-sm-10">
                                        <select name="id_tec" class="form-control" required>
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
                                            <input name="fecha_ini" type="text" class="form-control pull-right" id="datepickerInicio" required="true">
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
                                            <input name="fecha_ter" type="text" class="form-control pull-right" id="datepickerFin" required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Oficina</label>
                                    <div class="col-sm-10">
                                        <select name="id_oficina" class="form-control" required="true">
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