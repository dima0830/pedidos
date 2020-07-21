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
<!-- menu nuevo -->
<div class="container">
 <form action="https://ortopedicosfuturo.com/employee/orders/save" method="post" enctype="multipart/form-data" id="formID">
  <div class="form-group row box">
    <label class="col-sm-2 col-form-label" >Tienda:</label>
    <div class="col-sm-5">
      <select class="custom-select">
        <option value=""> -- Buscar por Tienda --</option>
      </select>
    </div>
    <div class="col-sm-5 help">
    </div>
  </div>
  <div class="form-group row box">
    <label class="col-sm-2 col-form-label">Proveedor:</label>
    <div class="col-sm-5">
      <select class="custom-select">
        <option value="" data-select2-id="4"> -- Buscar por Proveedor --</option>
        <option value="800201496 "> SOCIEDAD MEDICA DE ORTOPEDIA Y ACCIDENTES LABORALES S.A.</option>
      </select>
    </div>
    <div class="col-sm-5 help">
    </div>
  </div>

  <div class="form-group row box">
    <label class="col-sm-2 col-form-label">Cargar Archivo:</label>
    <div class="col-sm-5">
      <div class="custom-file">
        <input name="file_path_oc" type="file" class="custom-file-input" id="inputFilePedido">
        <label class="custom-file-label" for="inputFilePedido">Cargar Archivo ...</label>
      </div>
    </div>
    <label class="col-sm-2 col-form-label" style="text-align: right;"> #OC SIESA:</label>
    <div class="col-sm-2">
      <input type="text"class="form-control" value="">
    </div>
  </div>

    <div class="form-group row box">
     <label class="col-sm-2 col-form-label" >Fecha:</label>
     <div class="col-sm-5">
       <div class="row">
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

  <div class="col-sm" style="text-align: right;">
    <button type="submit" class="btn btn-primary">Siguiente</button>
  </div>
</div>
       </div>
     </div>
     
</form>
<br>
<div class="box">
  <h1 class="titulo">Listado de Archivos</h1>
 <div class="table-responsive">
  <table class="table table-bordered table-striped templ sticky-header">
    <thead>
      <tr>
      <th>Proveedor</th>
      <th>Archivo</th>
      <th>Fecha de Entrega</th>
      <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>AXA</td>
        <td>101-AXA-20200101.xlsx</td>
        <td>10/01/2020</td>
        <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confir1793"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button></td>
      </tr>
    </tbody>
  </table>
</div>
  <div class="row">

      
    <div class="col align-self-end text-right">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <button type="submit" class="btn btn-primary">Siguiente</button>
    </div>
  </div>
  <input type="hidden" name="customer_id" id="customer_id" value="">
  <input type="hidden" name="order_id" id="order_id" value="">
</div>






</div> <!-- fin container-->


<br><br>