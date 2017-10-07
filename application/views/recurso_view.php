<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminNeoris | Registro</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/AdminLTE.min.css">
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Registro Recursos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                <input id="identi" name="identi" type="hidden" class="form-control">

                <div class="form-group">
                  <label for="nom">Nombre</label>
                  <input id="nom" name="nom" type="text" class="form-control">
                </div>

                <div class="form-group">
                  <label for="pater">Apellido Paterno</label>
                  <input id="pater" name="pater" type="text" class="form-control">
                </div>

                <div class="form-group">
                  <label for="mater">Apellido Materno</label>
                  <input id="mater" name="mater" type="text" class="form-control">
                </div>

                <div class="form-group">
                  <label for="estatus">Estatus recurso</label>
                  <select id="estatus" name="estatus" class="form-control">
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

                <div class="form-group">
                  <label for="tp">Tecnologia Principal</label>
                  <select id="tp" name="tp" class="form-control">
                  	<option value="0">-Tecnologia-</option>
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


                <div class="form-group">
                  <label for="ts">Tecnologia Secundaria</label>
                  <select id="ts" name="ts" class="form-control">
                  	<option value="0">-Tecnologia-</option>
                  	    <?php
                         if(!is_null($tecnologias)) :
                            foreach ($tecnologias as $tec2) { ?>
                               <option value="<?php echo $tec2->ID_TEC?>"><?php echo $tec2->NOMBRE_TEC?></option>
                            <?php 
                            }
                            endif;
                        ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="ps">Puesto Recurso</label>
                  <select id="ps" name="ps" class="form-control">
                  	<option value="0">-Puesto-</option>
                  	<?php
                         if(!is_null($puestos)) :
                            foreach ($puestos as $ps) { ?>
                               <option value="<?php echo $ps->ID_PUESTO?>"><?php echo $ps->DESC_PUESTO?></option>
                            <?php 
                            }
                            endif;
                        ?>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button id="saveRecurso" type="submit" class="btn btn-primary">GUARDAR</button>
                <button id="cancelRecurso" type="cancel" class="btn btn-warning">CANCELAR</button>
              </div>
            
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->



	<!-- jQuery 3 -->
	<script src="<?=base_url()?>rsc/js/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?=base_url()?>rsc/js/bootstrap.min.js"></script>
	<!-- SCRIPT DE RECURSOS-->
	<script src="<?=base_url()?>rsc/js/recursos.js"></script>

</body>

</html>
