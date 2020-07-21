<hr class="hrcolor">
<nav class="navbar navbar-expand-md navbar-light bg-light btco-hover-menu">
  <div class="container"><a class="navbar-brand">:: Pedidos ::</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://ortopedicosfuturo.com/employee/orders">Inicio</a>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pedidos </a><ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a href="nuevo-1" class="dropdown-item">Cargar</a>
          </li>
          <li>
            <a href="nuevo-6" class="dropdown-item">Estado de pedidos</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://ortopedicosfuturo.com/employee/orders/user-manual/200513134011">Manual de usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://ortopedicosfuturo.com/employee/logout">Logout </a>
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- menu nuevo -->
<div class="container">
<br><br>

<ul class="nav nav-pills" id="myTab" role="tablist">
  <li class="box-list-pedido">
    <a class="btn-pedidos btn-sm" id="oc-tab" data-toggle="tab" href="#oc" role="tab" aria-controls="oc" aria-selected="true">
    PX Enviar - 5</a>
  </li>
  <li class="box-list-pedido">
    <a class="btn-pedidos btn-sm" id="od-tab" data-toggle="tab" href="#od" role="tab" aria-controls="Od" aria-selected="false">
    Pend X OD - 8</a>
  </li>
  <li class="box-list-pedido">
    <a class="btn-pedidos btn-sm active" id="rm-tab" data-toggle="tab" href="#rm" role="tab" aria-controls="rm" aria-selected="false">
    OD cargada - 1</a>
  </li>
  <li class="box-list-pedido">
    <a class= "btn-pedidos btn-sm" id="ep-tab" data-toggle="tab" href="#ep" role="tab" aria-controls="ep" aria-selected="true">
    Remisionado - 5</a>
  </li>
    <li class="box-list-pedido">
    <a class= "btn-pedidos btn-sm" id="ent-tab" data-toggle="tab" href="#ent" role="tab" aria-controls="ent" aria-selected="true">
    Cargar entrada - 5</a>
  </li>
  <li class="box-list-pedido">
    <a class="btn-pedidos btn-sm" id="ec-tab" data-toggle="tab" href="#ec" role="tab" aria-controls="ec" aria-selected="false">
   Ingresada Pos - 6</a>
  </li>
  <li class="box-list-pedido">
    <a class="btn-pedidos btn-sm" id="ingr-tab" data-toggle="tab" href="#ingr" role="tab" aria-controls="ingr" aria-selected="true">
     Ingresada ERP
</a>
  </li>
  <li class="box-list-pedido">
    <a class="btn-pedidos btn-sm" id="comp-tab" data-toggle="tab" href="#comp" role="tab" aria-controls="comp" aria-selected="false">
    Completados - 6</a>
  </li>
  <li class="box-list-pedido">
    <a class="btn-pedidos btn-sm" id="boni-tab" data-toggle="tab" href="#boni" role="tab" aria-controls="boni" aria-selected="false">
      Bonificados-20
    </a>
  </li>
</ul>
<hr>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade" id="oc" role="tabpanel" aria-labelledby="oc-tab">
    <div class="container">
     <h1 class="titulo">
      <strong> Pendientes por Enviar A Proveedores </strong>
    </h1>

 <form>
  <div class="row">
    <div class="col-sm">
      <div class="form-group row box">
        <label class="col-sm-2 col-form-label" >Tienda:</label>
        <div class="col-sm-10">
          <select class="custom-select">
            <option value=""> -- Buscar por Tienda --</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-group row box">
       <label class="col-sm-3 col-form-label"> #OC SIESA:</label>
       <div class="col-sm-4">
        <input type="text"class="form-control" value="">
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm">
    <div class="form-group row box">
      <label class="col-sm-2 col-form-label" >Proveedor:</label>
      <div class="col-sm">
        <select class="custom-select">
          <option value=""> -- Buscar por Proveedor --</option>
        </select>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="form-group row box">
     <label class="col-sm-3 col-form-label" >Fecha:</label>
     <div class="col-sm">
      <div class="input-group mb-3 date" id="desde" data-target-input="nearest">
        <input name="desde" type="text" class="form-control datetimepicker-input" data-target="#desde" placeholder="Desde" aria-label="Fecha de entrega" aria-describedby="basic-addon2">
        <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
          <div class="input-group-text" id="basic-addon2">
           <i class="fa fa-calendar" aria-hidden="true"></i>
         </div>
       </div>
     </div>
   </div>

   <div class="col-sm">
    <div class="input-group mb-3 date">
      <input name="hasta" type="text" class="form-control datetimepicker-input"  placeholder="Hasta" >
      <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
        <div class="input-group-text" id="basic-addon2">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <button type="submit" class="btn btn-primary">Buscar</button>
  </div>
</div>
</div>
</div>
</form>
<br>
<h1 class="titulo">Listados de ordenes de compra</h1>
<div class="box">
  <div class="table-responsive">
    <table class="table table-bordered table-striped templ sticky-header">
      <thead>
        <tr>
          <th>#OC SIESA</th>
          <th>Tienda</th>
          <th>Proveedor</th>
          <th>Fecha de Entrega</th>
          <th>Archivo</th>
          <th>Cantidad total Items</th>
          <th>Estado</th>
          <th>Enviar FTP</th>
          <th>Acciones</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa01">
              101
            </button>
            <div class="modal fade" id="siesa01" tabindex="-1" role="dialog" aria-labelledby="siesa01Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th>Código de barra</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad OC</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>10/01/2020</td>
          <td>101-AXA-20200101.xlsx</td>
          <td>435 Unidades</td>
          <td>Enviado</td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
              </label>
            </div>
          </td>
          <td>
            <button type="button" class="btn btn-success btn-sm">
              <i class="fa fa-arrow-down" aria-hidden="true"></i>
              Descargar
            </button>
          </td>
          <td>
           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
             <i class="fa fa-trash" aria-hidden="true"></i> 
           </button>
         </td>
       </tr>

       <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa02">
              102
            </button>
            <div class="modal fade" id="siesa02" tabindex="-1" role="dialog" aria-labelledby="siesa02Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th>Código de barra</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad OC</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>10/01/2020</td>
          <td>101-AXA-20200101.xlsx</td>
          <td>435 Unidades</td>
          <td>Enviado</td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
              </label>
            </div>
          </td>
          <td>
            <button type="button" class="btn btn-success btn-sm">
              <i class="fa fa-arrow-down" aria-hidden="true"></i>
              Descargar
            </button>
          </td>
          <td>
           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
             <i class="fa fa-trash" aria-hidden="true"></i> 
           </button>
         </td>
       </tr>
     </tbody>
   </table>
 </div>

 <div class="row">
  <div class="col align-self-end text-right">
    <button type="submit" class="btn btn-primary">Procesar</button>
  </div>
</div>
</div>
</div> <!-- fin container  ====-->
</div><!-- fin de PX Enviar ==========-->


<div class="tab-pane fade" id="od" role="tabpanel" aria-labelledby="od-tab">
  <div class="container">
   <form>
    <h1 class="titulo"><strong> Pendientes por Recibir Orden Despacho Proveedores  </strong></h1>
    <div class="row">
      <div class="col-sm">
        <div class="form-group row box">
          <label class="col-sm-2 col-form-label" >Tienda:</label>
          <div class="col-sm-10">
            <select class="custom-select">
              <option value=""> -- Buscar por Tienda --</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group row box">
         <label class="col-sm-3 col-form-label"> #OC SIESA:</label>
         <div class="col-sm-4">
          <input type="text"class="form-control" value="">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="form-group row box">
        <label class="col-sm-2 col-form-label" >Proveedor:</label>
        <div class="col-sm">
          <select class="custom-select">
            <option value=""> -- Buscar por Proveedor --</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-group row box">
       <label class="col-sm-3 col-form-label" >Fecha:</label>
       <div class="col-sm">
        <div class="input-group mb-3 date" id="desde" data-target-input="nearest">
          <input name="desde" type="text" class="form-control datetimepicker-input" data-target="#desde" placeholder="Desde" aria-label="Fecha de entrega" aria-describedby="basic-addon2">
          <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
            <div class="input-group-text" id="basic-addon2">
             <i class="fa fa-calendar" aria-hidden="true"></i>
           </div>
         </div>
       </div>
     </div>
     <div class="col-sm">
      <div class="input-group mb-3 date">
        <input name="hasta" type="text" class="form-control datetimepicker-input"  placeholder="Hasta" >
        <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
          <div class="input-group-text" id="basic-addon2">
            <i class="fa fa-calendar" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </div>
</div>
</div>
</form>
<br>
<h1 class="titulo">Listados de ordenes de compra</h1>
<div class="box">
  <div class="table-responsive">
    <table class="table table-bordered table-striped templ sticky-header">
      <thead>
        <tr>
          <th>#OC SIESA</th>
          <th>Tienda</th>
          <th>Proveedor</th>
          <th>Fecha de Entrega</th>
          <th>Cantidad total Items</th>
          <th>Acciones</th>
          <th>Inactivar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa03">
              101
            </button>
            <div class="modal fade" id="siesa03" tabindex="-1" role="dialog" aria-labelledby="siesa03Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th>Código de barra</th>
                            <th>Referencia</th>
                            <th>Descrpción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad OC</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>10/01/2020</td>
          <td>435 Unidades</td>
          <td>
            <button type="button" class="btn btn-sm btn-primary" style="border: none;" data-toggle="modal" data-target="#confirOd"><i class="fa fa-arrow-up" aria-hidden="true"></i>
              Cargar
            </button>
            <div class="modal fade" id="confirOd" tabindex="-1" role="dialog" aria-labelledby="confirOdLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA </h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="box-pedidos">
                      <br>
                      <form style="display: block; width: 85%; margin: 0 auto;">
                        <div class="row">
                          <div class="col-sm">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">
                                <span class="tip-t">Tienda:</span>
                              </label>
                              <div class="col-sm">
                                <p id="ciudad">--</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">
                                <span class="tip-t">Proveedor:</span>
                              </label>
                              <div class="col-sm">
                                <p id="ciudad">--</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">
                            <span class="tip-t">Cantidad total de Items:</span>
                          </label>
                          <div class="col-sm">
                            <p id="ciudad">--</p>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">
                            <span class="tip-t">#OD Proveedor:</span>
                          </label>
                          <div class="col-sm">
                            <input type="text"class="form-control" value="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">
                            <span class="tip-t">Cargar Archivo:</span>
                          </label>
                          <div class="col-sm" style="margin-top: 10px;">
                            <div class="custom-file">
                              <input name="file_path_oc" type="file" class="custom-file-input" id="inputFilePedido">
                              <label class="custom-file-label" for="inputFilePedido">Cargar Archivo ...</label>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col align-self-center text-center">
                            <button type="submit" class="btn btn-primary">Cargar</button>
                          </div>
                        </div>
                        <br>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- fin modal-->
          </td>
          <td>
           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
             <i class="fa fa-trash" aria-hidden="true"></i> 
           </button>
         </td>
       </tr>
       <tr>
        <td>
          <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa04">
            101
          </button>
          <div class="modal fade" id="siesa04" tabindex="-1" role="dialog" aria-labelledby="siesa04Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped templ sticky-header">
                      <thead>
                        <tr>
                          <th>Código de barra</th>
                          <th>Referencia</th>
                          <th>Descrpción</th>
                          <th>Ext1</th>
                          <th>Ext2</th>
                          <th>Cantidad OC</th>
                          <th>Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>7707066063033</td>
                          <td>101063</td>
                          <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                          <td>Color</td>
                          <td>Talla</td>
                          <td>435</td>
                          <td>Solo para casos que aplique</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td>AES LAGO</td>
        <td>AXA</td>
        <td>10/01/2020</td>
        <td>435 Unidades</td>
        <td>
          <button type="button" class="btn btn-sm btn-primary" style="border: none;" data-toggle="modal" data-target="#confirOd"><i class="fa fa-arrow-up" aria-hidden="true"></i>
            Cargar
          </button>
          <div class="modal fade" id="confirOd" tabindex="-1" role="dialog" aria-labelledby="confirOdLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" >#OC SIESA </h5> 
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="box-pedidos">
                    <br>
                    <form style="display: block; width: 85%; margin: 0 auto;">
                      <div class="row">
                        <div class="col-sm">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                              <span class="tip-t">Tienda:</span>
                            </label>
                            <div class="col-sm">
                              <p id="ciudad">--</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                              <span class="tip-t">Proveedor:</span>
                            </label>
                            <div class="col-sm">
                              <p id="ciudad">--</p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">
                          <span class="tip-t">Cantidad total de Items:</span>
                        </label>
                        <div class="col-sm">
                          <p id="ciudad">--</p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">
                          <span class="tip-t">#OD Proveedor:</span>
                        </label>
                        <div class="col-sm">
                          <input type="text"class="form-control" value="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">
                          <span class="tip-t">Cargar Archivo:</span>
                        </label>
                        <div class="col-sm" style="margin-top: 10px;">
                          <div class="custom-file">
                            <input name="file_path_oc" type="file" class="custom-file-input" id="inputFilePedido">
                            <label class="custom-file-label" for="inputFilePedido">Cargar Archivo ...</label>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col align-self-center text-center">
                          <button type="submit" class="btn btn-primary">Cargar</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- fin modal-->
        </td>
        <td>
         <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
           <i class="fa fa-trash" aria-hidden="true"></i> 
         </button>
       </td>
     </tr>
   </tbody>
 </table>
</div>
<div class="row">
  <div class="col align-self-end text-right">
    <button type="submit" class="btn btn-primary">Procesar</button>
  </div>
</div>
</div>
</div> <!-- fin container-->
</div> <!-- fin de Pend  X OD ==========-->


<div class="tab-pane fade show active" id="rm" role="tabpanel" aria-labelledby="rm-tab">
  <div class="container">
    <h1 class="titulo"><strong> Pendientes por Enviar A Proveedores </strong></h1>
    <form>
      <div class="row">
        <div class="col-sm">
          <div class="form-group row box">
            <label class="col-sm-2 col-form-label" >Tienda:</label>
            <div class="col-sm-10">
              <select class="custom-select">
                <option value=""> -- Buscar por Tienda --</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group row box">
            <label class="col-sm-3 col-form-label"> #OC SIESA:</label>
            <div class="col-sm-4">
              <input type="text"class="form-control" value="">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group row box">
            <label class="col-sm-2 col-form-label" >Proveedor:</label>
            <div class="col-sm">
              <select class="custom-select">
                <option value=""> -- Buscar por Proveedor --</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group row box">
            <label class="col-sm-3 col-form-label" >Fecha:</label>
            <div class="col-sm">
              <div class="input-group mb-3 date" id="desde" data-target-input="nearest">
                <input name="desde" type="text" class="form-control datetimepicker-input" data-target="#desde" placeholder="Desde" aria-label="Fecha de entrega" aria-describedby="basic-addon2">
                <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
                  <div class="input-group-text" id="basic-addon2">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="input-group mb-3 date">
                <input name="hasta" type="text" class="form-control datetimepicker-input"  placeholder="Hasta" >
                <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
                  <div class="input-group-text" id="basic-addon2">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
<br>
<h1 class="titulo">Listados de ordenes de compra</h1>
<div class="box">
  <div class="table-responsive">
    <table class="table table-bordered table-striped templ sticky-header">
      <thead>
        <tr>
          <th>#OC SIESA</th>
          <th>Tienda</th>
          <th>Proveedor</th>
          <th>Cantidad Total OC</th>
          <th># OD Proveedor</th>
          <th>Cantidad Total OD</th>
          <th>Acciones</th>
          <th>Inactivar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa05">
              101
            </button>
            <div class="modal fade" id="siesa05" tabindex="-1" role="dialog" aria-labelledby="siesa05Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th>Código de barra</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad OC</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>365 Unidades</td>
          <td>336655</td>
          <td>365 Unidades</td>
          <td>
            <a href="nuevo-3" class="btn btn-secondary btn-sm">Detalle</a>
            <button type="button" class="btn btn-warning btn-sm">
              <i class="fa fa-check" aria-hidden="true"></i>
              Aprobar
            </button>
          </td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
              <i class="fa fa-trash" aria-hidden="true"></i> 
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
<div class="row">
  <div class="col align-self-end text-right">
    <button type="submit" class="btn btn-primary">Procesar</button>
  </div>
</div>
</div>
</div> <!-- fin container-->
</div><!-- OD cargada ==========-->

  <div class="tab-pane fade" id="ep" role="tabpanel" aria-labelledby="ep-tab">
    <div class="container">
      <h1 class="titulo"><strong> Ordenes de Compra remisionada a FTP Comersia </strong></h1>
     <form>
      <div class="row">
        <div class="col-sm">
          <div class="form-group row box">
            <label class="col-sm-2 col-form-label" >Tienda:</label>
            <div class="col-sm-10">
              <select class="custom-select">
                <option value=""> -- Buscar por Tienda --</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group row box">
           <label class="col-sm-3 col-form-label"> #OC SIESA:</label>
           <div class="col-sm-4">
            <input type="text"class="form-control" value="">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <div class="form-group row box">
          <label class="col-sm-2 col-form-label" >Proveedor:</label>
          <div class="col-sm">
            <select class="custom-select">
              <option value=""> -- Buscar por Proveedor --</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group row box">
         <label class="col-sm-3 col-form-label" >Fecha:</label>
         <div class="col-sm">
          <div class="input-group mb-3 date" id="desde" data-target-input="nearest">
            <input name="desde" type="text" class="form-control datetimepicker-input" data-target="#desde" placeholder="Desde" aria-label="Fecha de entrega" aria-describedby="basic-addon2">
            <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
              <div class="input-group-text" id="basic-addon2">
               <i class="fa fa-calendar" aria-hidden="true"></i>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm">
        <div class="input-group mb-3 date">
          <input name="hasta" type="text" class="form-control datetimepicker-input"  placeholder="Hasta" >
          <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
            <div class="input-group-text" id="basic-addon2">
              <i class="fa fa-calendar" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <button type="submit" class="btn btn-primary">Buscar</button>
      </div>
    </div>
  </div>
</div>
</form>
<br>
<h1 class="titulo">Listados de ordenes de compra</h1>
<div class="box">
  <div class="table-responsive">
    <table class="table table-bordered table-striped templ sticky-header">
      <thead>
        <tr>
          <th>#OC SIESA</th>
          <th>Tienda</th>
          <th>Proveedor</th>
          <th>Cantidad Total OC</th>
          <th># OD Proveedor</th>
          <th>Cantidad Total OD</th>
          <th>Acciones</th>
          <th>Inactivar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa06">
              101
            </button>
            <div class="modal fade" id="siesa06" tabindex="-1" role="dialog" aria-labelledby="siesa06Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th>Código de barra</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad OC</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>365 Unidades</td>
          <td>336655</td>
          <td>365 Unidades</td>
          <td>
            <a href="nuevo-4" class="btn btn-secondary btn-sm">Detalle</a>
              <button type="button" class="btn btn-sm btn-primary" style="border: none;" data-toggle="modal" data-target="#remision"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                Cargar No. Remisión
              </button>
              <div class="modal fade" id="remision" tabindex="-1" role="dialog" aria-labelledby="remisionLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" >#OC SIESA </h5> 
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="box-pedidos">
                        <br>
                        <form style="display: block; width: 85%; margin: 0 auto;">
                          <div class="row">
                            <div class="col-sm">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">
                                  <span class="tip-t">Tienda:</span>
                                </label>
                                <div class="col-sm">
                                  <p id="ciudad">--</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
                                  <span class="tip-t">Proveedor:</span>
                                </label>
                                <div class="col-sm">
                                  <p id="ciudad">--</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">
                              <span class="tip-t">Cantidad total de Items:</span>
                            </label>
                            <div class="col-sm">
                              <p id="ciudad">--</p>
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label">
                                <span class="tip-t">No. Remision Ce Comersia:</span>
                              </label>
                              <div class="col-sm">
                                <input type="text"class="form-control" value="">
                              </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col align-self-center text-center">
                              <button type="submit" class="btn btn-primary">Cargar</button>
                            </div>
                          </div>
                          <br>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- fin modal-->
          </td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
              <i class="fa fa-trash" aria-hidden="true"></i> 
            </button>
          </td>
        </tr>
   </tbody>
  </table>
 </div>
  <div class="row">
    <div class="col align-self-end text-right">
      <button type="submit" class="btn btn-primary">Procesar</button>
   </div>
  </div>
</div>
</div> <!-- fin container-->
</div><!-- Remisionada ==========-->


<div class="tab-pane fade" id="ent" role="tabpanel" aria-labelledby="ent-tab">
  <div class="container">
  <h1 class="titulo">
    <strong> Ordenes de Compra Por recibir en tienda</strong>
  </h1>
  <form>
    <div class="row">
      <div class="col-sm">
        <div class="form-group row box">
          <label class="col-sm-2 col-form-label" >Tienda:</label>
          <div class="col-sm-10">
            <select class="custom-select">
              <option value=""> -- Buscar por Tienda --</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group row box">
          <label class="col-sm-3 col-form-label"> #OC SIESA:</label>
          <div class="col-sm-4">
            <input type="text"class="form-control" value="">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-sm">
      <div class="form-group row box">
        <label class="col-sm-2 col-form-label" >Proveedor:</label>
        <div class="col-sm">
          <select class="custom-select">
            <option value=""> -- Buscar por Proveedor --</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-group row box">
        <label class="col-sm-3 col-form-label" >Fecha:</label>
        <div class="col-sm">
          <div class="input-group mb-3 date" id="desde" data-target-input="nearest">
            <input name="desde" type="text" class="form-control datetimepicker-input" data-target="#desde" placeholder="Desde" aria-label="Fecha de entrega" aria-describedby="basic-addon2">
            <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
              <div class="input-group-text" id="basic-addon2">
                <i class="fa fa-calendar" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="input-group mb-3 date">
            <input name="hasta" type="text" class="form-control datetimepicker-input"  placeholder="Hasta" >
            <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
              <div class="input-group-text" id="basic-addon2">
                <i class="fa fa-calendar" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <button type="submit" class="btn btn-primary">Siguiente</button>
        </div>
      </div>
    </div>
    </div>
  </form>
  <br>
  <h1 class="titulo">Listados de ordenes de compra</h1>
  <div class="box">
  <div class="table-responsive">
    <table class="table table-bordered table-striped templ sticky-header">
      <thead>
        <tr>
          <th>#OC SIESA</th>
          <th>Tienda</th>
          <th>Proveedor</th>
          <th># Remisión Pedido</th>
          <th>Cantidad Total Items</th>
          <th>Acción</th>
          <th>Inactivar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa07">
              101
            </button>
            <div class="modal fade" id="siesa07" tabindex="-1" role="dialog" aria-labelledby="siesa07Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th style="">Código de barra</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad OC</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>RMDP20200202</td>
          <td>435 Unidades</td>
          <td>
            <button type="button" class="btn btn-sm btn-primary" style="border: none;" data-toggle="modal" data-target="#odtienda"><i class="fa fa-arrow-up" aria-hidden="true"></i>
              Cargar entrada
            </button>
            <div class="modal fade" id="odtienda" tabindex="-1" role="dialog" aria-labelledby="odtiendaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" >#OC SIESA </h5> 
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="box-pedidos">
                    <br>
                    <form style="display: block; width: 85%; margin: 0 auto;">
                      <div class="row">
                        <div class="col-sm">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                              <span class="tip-t">Tienda:</span>
                            </label>
                            <div class="col-sm">
                              <p id="ciudad">--</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                              <span class="tip-t">Proveedor:</span>
                            </label>
                            <div class="col-sm">
                              <p id="ciudad">--</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">
                          <span class="tip-t">Cantidad total de Items:</span>
                        </label>
                        <div class="col-sm">
                          <p id="ciudad">--</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">
                          <span class="tip-t">RMPD:</span>
                        </label>
                        <div class="col-sm">
                          <input type="text"class="form-control" value="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">
                          <span class="tip-t">Cargar Archivo:</span>
                        </label>
                        <div class="col-sm" style="margin-top: 10px;">
                          <div class="custom-file">
                            <input name="file_path_oc" type="file" class="custom-file-input" id="inputFilePedido">
                            <label class="custom-file-label" for="inputFilePedido">Cargar Archivo ...</label>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col align-self-center text-center">
                          <button type="submit" class="btn btn-primary">Cargar</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div> <!-- fin modal-->
          </td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
              <i class="fa fa-trash" aria-hidden="true"></i> 
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="col align-self-end text-right">
      <button type="submit" class="btn btn-primary">Procesar</button>
    </div>
  </div>
  </div>
  </div> <!-- fin container-->
</div><!-- cargar entrada ==========-->


<div class="tab-pane fade" id="ec" role="tabpanel" aria-labelledby="ec-tab">
  <div class="container">
  <h1 class="titulo">
    <strong>Ordenes de Compra Por Aprobar recepción en tienda</strong>
  </h1>
  <form>
    <div class="row">
      <div class="col-sm">
        <div class="form-group row box">
          <label class="col-sm-2 col-form-label" >Tienda:</label>
          <div class="col-sm-10">
            <select class="custom-select">
              <option value=""> -- Buscar por Tienda --</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group row box">
          <label class="col-sm-3 col-form-label"> #OC SIESA:</label>
          <div class="col-sm-4">
            <input type="text"class="form-control" value="">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <div class="form-group row box">
          <label class="col-sm-2 col-form-label" >Proveedor:</label>
          <div class="col-sm">
            <select class="custom-select">
              <option value=""> -- Buscar por Proveedor --</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group row box">
          <label class="col-sm-3 col-form-label" >Fecha:</label>
          <div class="col-sm">
            <div class="input-group mb-3 date" id="desde" data-target-input="nearest">
              <input name="desde" type="text" class="form-control datetimepicker-input" data-target="#desde" placeholder="Desde" aria-label="Fecha de entrega" aria-describedby="basic-addon2">
              <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
                <div class="input-group-text" id="basic-addon2">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="input-group mb-3 date">
              <input name="hasta" type="text" class="form-control datetimepicker-input"  placeholder="Hasta" >
              <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
                <div class="input-group-text" id="basic-addon2">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<br>
<h1 class="titulo">Listados de ordenes de compra</h1>
<div class="box">
  <div class="table-responsive">
    <table class="table table-bordered table-striped templ sticky-header">
      <thead>
        <tr>
          <th>#OC SIESA</th>
          <th>Tienda</th>
          <th>Proveedor</th>
          <th>Cantidad Total OC</th>
          <th>#Remisión </th>
          <th>Cantidad Total RMPD</th>
          <th>Acción</th>
          <th>Inactivar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa08">
              101
            </button>
            <div class="modal fade" id="siesa08" tabindex="-1" role="dialog" aria-labelledby="siesa08Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th>Código de barra</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad Recibida</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>355 Unidades</td>
          <td>336655</td>
          <td>355 Unidades</td>
          <td>
            <a href="nuevo-4-2" class="btn btn-secondary btn-sm" >
              <i class="fa fa-eye" aria-hidden="true"></i> Detalle
            </a>
          
              <button type="button" class="btn btn-warning btn-sm">
                <i class="fa fa-check" aria-hidden="true"></i>
                Aprobar
              </button>
          </td>
          <td>
           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
             <i class="fa fa-trash" aria-hidden="true"></i> 
           </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="col align-self-end text-right">
      <button type="submit" class="btn btn-primary">Procesar</button>
    </div>
  </div>
</div>
</div> <!-- fin container-->
</div><!-- Ingresada POS ==========-->



<div class="tab-pane fade" id="ingr" role="tabpanel" aria-labelledby="ingr-tab">
  <div class="container">
    <h1 class="titulo">
      <strong>Ordenes de Compra Por subir ERP</strong>
    </h1>
    <form>
      <div class="row">
        <div class="col-sm">
          <div class="form-group row box">
            <label class="col-sm-2 col-form-label" >Tienda:</label>
            <div class="col-sm-10">
              <select class="custom-select">
                <option value=""> -- Buscar por Tienda --</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group row box">
            <label class="col-sm-3 col-form-label"> #OC SIESA:</label>
            <div class="col-sm-4">
              <input type="text"class="form-control" value="">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group row box">
            <label class="col-sm-2 col-form-label" >Proveedor:</label>
            <div class="col-sm">
              <select class="custom-select">
                <option value=""> -- Buscar por Proveedor --</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group row box">
            <label class="col-sm-3 col-form-label" >Fecha:</label>
            <div class="col-sm">
              <div class="input-group mb-3 date" id="desde" data-target-input="nearest">
                <input name="desde" type="text" class="form-control datetimepicker-input" data-target="#desde" placeholder="Desde" aria-label="Fecha de entrega" aria-describedby="basic-addon2">
                <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
                  <div class="input-group-text" id="basic-addon2">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="input-group mb-3 date">
                <input name="hasta" type="text" class="form-control datetimepicker-input"  placeholder="Hasta" >
                <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
                  <div class="input-group-text" id="basic-addon2">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  <br>
<h1 class="titulo">Listados de ordenes de compra</h1>
<div class="box">
  <div class="table-responsive">
    <table class="table table-bordered table-striped templ sticky-header">
      <thead>
        <tr>
          <th>#OC SIESA</th>
          <th>Tienda</th>
          <th>Proveedor</th>
          <th>Cantidad Total OC</th>
          <th>#Remisión </th>
          <th>Cantidad Total RMPD</th>
          <th>Acción</th>
          <th>Inactivar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa09">
              101
            </button>
            <div class="modal fade" id="siesa09" tabindex="-1" role="dialog" aria-labelledby="siesa09Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th>Código de barra</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad Recibida</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>355 Unidades</td>
          <td>336655</td>
          <td>355 Unidades</td>
          <td>
           <a href="nuevo-4-3" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-down" aria-hidden="true"></i> Detalle</a>

          <button type="button" class="btn btn-success btn-sm" style="border: none;"><i class="fa fa-arrow-down" aria-hidden="true"></i>
            Descargar
          </button>
        </td>
        <td>
         <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
           <i class="fa fa-trash" aria-hidden="true"></i> 
         </button>
       </td>
     </tr>
   </tbody>
   </table>
 </div>
 <div class="row">
  <div class="col align-self-end text-right">
    <button type="submit" class="btn btn-primary">Procesar</button>
  </div>
</div>
</div>
</div> <!-- fin container-->
 </div><!-- fin ingr====-->

    <div class="tab-pane fade" id="comp" role="tabpanel" aria-labelledby="comp-tab">
      <div class="container">
  <h1 class="titulo"><strong>Ordenes de Compra Completadas</strong></h1>
 <form>
  <div class="row">
    <div class="col-sm">
      <div class="form-group row box">
        <label class="col-sm-2 col-form-label" >Tienda:</label>
        <div class="col-sm-10">
          <select class="custom-select">
            <option value=""> -- Buscar por Tienda --</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-group row box">
       <label class="col-sm-3 col-form-label"> #OC SIESA:</label>
       <div class="col-sm-4">
        <input type="text"class="form-control" value="">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm">
    <div class="form-group row box">
      <label class="col-sm-2 col-form-label" >Proveedor:</label>
      <div class="col-sm">
        <select class="custom-select">
          <option value=""> -- Buscar por Proveedor --</option>
        </select>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="form-group row box">
     <label class="col-sm-3 col-form-label" >Fecha:</label>
     <div class="col-sm">
      <div class="input-group mb-3 date" id="desde" data-target-input="nearest">
        <input name="desde" type="text" class="form-control datetimepicker-input" data-target="#desde" placeholder="Desde" aria-label="Fecha de entrega" aria-describedby="basic-addon2">
        <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
          <div class="input-group-text" id="basic-addon2">
           <i class="fa fa-calendar" aria-hidden="true"></i>
         </div>
       </div>
     </div>
   </div>

   <div class="col-sm">
    <div class="input-group mb-3 date">
      <input name="hasta" type="text" class="form-control datetimepicker-input"  placeholder="Hasta" >
      <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
        <div class="input-group-text" id="basic-addon2">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <button type="submit" class="btn btn-primary">Buscar</button>
  </div>
</div>
</div>
</div>
</form>
<br>
<h1 class="titulo">Ordenes  de Compra Completadas</h1>
<div class="box">
  <div class="table-responsive">
    <table class="table table-bordered table-striped templ sticky-header">
      <thead>
        <tr>
          <th>#OC SIESA</th>
          <th>Tienda</th>
          <th>Proveedor</th>
          <th>Cantidad Total OC</th>
          <th>No. Ajuste por compra</th>
          <th>Cantidad Total RMPD</th>
          <th>Acción</th>
          <th>Inactivar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa10">
              101
            </button>
            <div class="modal fade" id="siesa10" tabindex="-1" role="dialog" aria-labelledby="siesa10Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th>Código de barra</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad Recibida</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>355 Unidades</td>
          <td>336655</td>
          <td>355 Unidades</td>
          <td>
          <a href="nuevo-4-4" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-down" aria-hidden="true"></i> Detalle</a>
          </td>
          <td>
           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
             <i class="fa fa-trash" aria-hidden="true"></i> 
           </button>
         </td>
       </tr>

     </tbody>
   </table>
 </div>

 <div class="row">
  <div class="col align-self-end text-right">
    <button type="submit" class="btn btn-primary">Procesar</button>
  </div>
</div>
</div>
</div> <!-- fin container-->
    </div><!-- fin comp-tab==========-->



     <div class="tab-pane fade" id="boni" role="tabpanel" aria-labelledby="boni-tab">
       <div class="container">
  <h1 class="titulo"><strong>Ordenes de Compra con Bonificados</strong></h1>
 <form>
  <div class="row">
    <div class="col-sm">
      <div class="form-group row box">
        <label class="col-sm-2 col-form-label" >Tienda:</label>
        <div class="col-sm-10">
          <select class="custom-select">
            <option value=""> -- Buscar por Tienda --</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-group row box">
       <label class="col-sm-3 col-form-label"> #OC SIESA:</label>
       <div class="col-sm-4">
        <input type="text"class="form-control" value="">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm">
    <div class="form-group row box">
      <label class="col-sm-2 col-form-label" >Proveedor:</label>
      <div class="col-sm">
        <select class="custom-select">
          <option value=""> -- Buscar por Proveedor --</option>
        </select>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div class="form-group row box">
     <label class="col-sm-3 col-form-label" >Fecha:</label>
     <div class="col-sm">
      <div class="input-group mb-3 date" id="desde" data-target-input="nearest">
        <input name="desde" type="text" class="form-control datetimepicker-input" data-target="#desde" placeholder="Desde" aria-label="Fecha de entrega" aria-describedby="basic-addon2">
        <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
          <div class="input-group-text" id="basic-addon2">
           <i class="fa fa-calendar" aria-hidden="true"></i>
         </div>
       </div>
     </div>
   </div>

   <div class="col-sm">
    <div class="input-group mb-3 date">
      <input name="hasta" type="text" class="form-control datetimepicker-input"  placeholder="Hasta" >
      <div class="input-group-append" data-target="#desde" data-toggle="datetimepicker">
        <div class="input-group-text" id="basic-addon2">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <button type="submit" class="btn btn-primary">Buscar</button>
  </div>
</div>
</div>
</div>
</form>
<br>
<h1 class="titulo">Listados de ordenes de compra</h1>
<div class="box">
  <div class="table-responsive">
    <table class="table table-bordered table-striped templ sticky-header">
      <thead>
        <tr>
          <th>#OC SIESA</th>
          <th>Tienda</th>
          <th>Proveedor</th>
          <th>Cantidad Total OC</th>
          <th>No. Ajuste por compra</th>
          <th>Cantidad Total RMPD</th>
          <th>Acción</th>
          <th>Inactivar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#siesa11">
              101
            </button>
            <div class="modal fade" id="siesa11" tabindex="-1" role="dialog" aria-labelledby="siesa11Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" >#OC SIESA  <strong>102</strong></h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped templ sticky-header">
                        <thead>
                          <tr>
                            <th>Código de barra</th>
                            <th>Referencia</th>
                            <th>Descripción</th>
                            <th>Ext1</th>
                            <th>Ext2</th>
                            <th>Cantidad Recibida</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>7707066063033</td>
                            <td>101063</td>
                            <td style="width: 40%;">Descripción del producto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                            <td>Color</td>
                            <td>Talla</td>
                            <td>435</td>
                            <td>Solo para casos que aplique</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>AES LAGO</td>
          <td>AXA</td>
          <td>355 Unidades</td>
          <td>336655</td>
          <td>355 Unidades</td>
          <td>
            <a href="nuevo-5" class="btn btn-secondary btn-sm">Detalle</a>
            <button type="button" class="btn btn-success btn-sm" style="border: none;" data-toggle="modal" data-target="#orden-compra2"><i class="fa fa-arrow-down" aria-hidden="true"></i>
            Descargar
          </button>
          <div class="modal fade" id="orden-compra2" tabindex="-1" role="dialog" aria-labelledby="orden-compra2Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" >#OC SIESA </h5> 
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="box-pedidos">
                    <br>
                    <form style="display: block; width: 85%; margin: 0 auto;">
                      <div class="row">
                        <div class="col-sm">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                              <span class="tip-t">Tienda:</span>
                            </label>
                            <div class="col-sm">
                              <p id="ciudad">--</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                              <span class="tip-t">Proveedor:</span>
                            </label>
                            <div class="col-sm">
                              <p id="ciudad">--</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">
                          <span class="tip-t">Cantidad total de Items:</span>
                        </label>
                        <div class="col-sm">
                          <p id="ciudad">--</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">
                          <span class="tip-t">Descargar archivo SIESA Bonificados:</span>
                        </label>
                        <div class="col-sm">
                          <a href="#" class="btn btn-success" download="ArchivoSIESA">Descargar Archivo</a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label">
                          <span class="tip-t">No. Ajuste por compra:</span>
                        </label>
                        <div class="col-sm" style="margin-top: 10px;">
                            <input type="text"class="form-control" value="">
                      </div>
                    </div>
                      <br>
                      <div class="row">
                        <div class="col align-self-center text-center">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                      </div>
                      <br>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- fin modal-->
          </td>
          <td>
           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793">
             <i class="fa fa-trash" aria-hidden="true"></i> 
           </button>
         </td>
       </tr>
     </tbody>
   </table>
 </div>

 <div class="row">
  <div class="col align-self-end text-right">
    <button type="submit" class="btn btn-primary">Procesar</button>
  </div>
</div>
</div>
</div> <!-- fin container-->
</div><!-- fin boni==========-->
</div>


<br>

</div> <!-- fin container-->




