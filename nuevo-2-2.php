<hr class="hrcolor">
<div class="menu">
  <div class="container">
   <header>
    <div class="menu_bar2">
     <a href="#" class="bt-menu"><i class="fa fa-th-list" aria-hidden="true"></i> Pedidos</a>
   </div>
 </header>
</div>
</div>
<!-- menu nuevo -->
<div class="container">
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
          <th>Fecha de Entrega</th>
          <th>Cantidad total Items</th>
          <th>Acciones</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#confir1793">
              101
            </button>
            <div class="modal fade" id="confir1793" tabindex="-1" role="dialog" aria-labelledby="confir1793Label" aria-hidden="true">
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
            <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#confir1793">
              101
            </button>
            <div class="modal fade" id="confir1793" tabindex="-1" role="dialog" aria-labelledby="confir1793Label" aria-hidden="true">
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



<!--<div class="tab-pane fade" id="ec" role="tabpanel" aria-labelledby="ec-tab">
  <div class="container">
    <h1 class="titulo">
      <strong>Ordenes  de Compra Por Aprobar recepción  en tienda</strong>
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
              <button type="button" class="btn-link" style="border: none;" data-toggle="modal" data-target="#confir1793">
                101
              </button>
              <div class="modal fade" id="confir1793" tabindex="-1" role="dialog" aria-labelledby="confir1793Label" aria-hidden="true">
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
              <button type="button" class="btn btn-secondary btn-sm" style="border: none;" data-toggle="modal" data-target="#detalle02">
                <i class="fa fa-eye" aria-hidden="true"></i> Detalle
              </button>
              <div class="modal fade" id="detalle02" tabindex="-1" role="dialog" aria-labelledby="detalle02Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" >#OC SIESA
                        <strong>OCN-00001</strong>
                      </h5> 
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="box">
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped templ sticky-header">
                            <thead>
                              <tr>
                                <th>Cod. Barras </th>
                                <th>Referencia</th>
                                <th>Descripción</th>
                                <th>Ext1</th>
                                <th>Ext2</th>
                                <th>Cantidad OC</th>
                                <th>Cantidad Recibida</th>
                                <th>Diferencia</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="alert-success">
                                <td>7707066063033</td>
                                <td>10106303</td>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>Color</td>
                                <td>Talla</td>
                                <td>52</td>
                                <td>26</td>
                                <td>5</td>
                              </tr>
                              <tr class="alert-info">
                                <td>7707066063033</td>
                                <td>10106303</td>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>Color</td>
                                <td>Talla</td>
                                <td>26</td>
                                <td>4</td>
                                <td>3</td>
                              </tr>
                              <tr class="alert-danger">
                                <td>7707066063033</td>
                                <td>10106303</td>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>Color</td>
                                <td>Talla</td>
                                <td>100</td>
                                <td>56</td>
                                <td>20</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> fin modal
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
</div>  fin container
</div> fin ec====-->
