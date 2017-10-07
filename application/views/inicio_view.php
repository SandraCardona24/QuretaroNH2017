  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Main View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>
                    <p>Proyectos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>
              <p>Empleados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#revenue-chart" data-toggle="tab" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div id="mainRow" class="row">
            <div class="col-md-6">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <i class="fa fa-pie-chart"></i>
        
                        <h3 class="box-title">Proyectos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php
                            if(!is_null($proyectos)) :
                                foreach ($proyectos as $py) {?>
                                    <div class="alert alert-info alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <a href="#"  class="proyect" data-id="<?php  echo $py->ID_PROYECT?>" style="text-decoration: none;"><h4><i class="icon fa fa-info "></i><?php echo $py->NOM_PROYECT;?></h4></a>
                                        <ul>
                                            <li><strong>Objetivo:</strong>&ensp;<?php echo $py->DESC_OT;?></li>
                                            <li><strong>Descripción:</strong>&ensp;<?php echo $py->DESC_PROYECT;?></li>
                                        </ul>
                                    </div>
                                <?php
                                }
                            endif;
                        ?>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        
            <div class="col-md-6">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <i class="fa fa-bullhorn"></i>
                        <h3 class="box-title">Detalles - Proyecto A</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="callout callout-danger">
                            <h4 id="entrega" >Entrega en </h4>
                        </div>
                        <div class="callout callout-info">
                            <h4 id="encargado" >A cargo de</h4>
                        </div>
                        <div class="callout callout-warning">
                            <h4>Pendientes</h4>
                            <div class="progress">
                                <div id="progress-bar-danger" class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width:25%">
                                    25%
                                </div>
                            </div>
                            <ul id="listaActivo">
                                <li>Actividad C</li>
                            </ul>
                        </div>
                        <div class="callout callout-success">
                            <h4>Logrado</h4>
                            <div class="progress">
                                <div id="progress-bar-success" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                    75%
                                </div>
                            </div>
                            <ul id="listaDesactivo">
                                <li>Actividad A</li>
                                <li>Actividad B</li>
                                <li>Actividad D</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

      </div>