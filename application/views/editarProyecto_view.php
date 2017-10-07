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
                        <h3 class="box-title">Alta de Proyecto</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputUser3" class="col-sm-2 control-label">Nombre del Proyecto</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputProyecto" placeholder="Nombre del Proyecto">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputLastName3" class="col-sm-2 control-label">Descripción del Proyecto</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputDescripcion" placeholder="Descripción del Proyecto">
                                </div>
                            </div>
                            <div class="box-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tecnología</label>
                                        <div class="col-sm-10">
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
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
                                                <input type="text" class="form-control pull-right" id="datepickerInicio">
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
                                                <input type="text" class="form-control pull-right" id="datepickerFin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-10">
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Oficina</label>
                                        <div class="col-sm-10">
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
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
            </div>

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Registro de Proyectos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
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
                          <tr>
                            <td>Project</td>
                            <td>A project</td>
                            <td>A</td>
                            <td>10/09/2017</td>
                            <td>10/10/2017</td>
                            <td>1</td>
                            <td>Querétaro</td>
                          </tr>
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