<hr class="hrcolor">
<div class="menu">
  <div class="container">
   <header>
    <div class="menu_bar2">
     <a href="#" class="bt-menu"><i class="fa fa-th-list" aria-hidden="true"></i> Pedidos</a>
   </div>

   <nav>
     <ul>
      <li><a href="#" class="grand">Pedidos</a></li>
      <li><a href="#" >Inicio</a></li>
      <li class="submenu">
       <a href="#" >Pedidos y Aprovaciones <i class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
       <ul class="children">
        <li><a href="pedidos">Mis pedidos</a></li>
        <li><a href="aprob">Aprobaciones</a></li>
      </ul>
    </li>
    <li class="submenu">
      <a href="#">Pedidos y Reportes <i class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
      <ul class="children">
        <li><a href="2pedidos">Pedidos</a></li>
        <li><a href="reporte">Reportes</a></li>
      </ul>
    </li>
    <li class="flt">
      <ul>
        <li><a href="#" >Manual usuario</a></li>
        <li><a href="#" >Catálogo</a></li>
        <li ><a href="#" >Salir</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
</div>
</div>
<!-- menu administración -->
<div class="container">
  <h1 class="titulo">Reporte</h1>
  <h2 class="subti">Paso 1. Seleccione el Filtro</h2>
  <form class="form-inline">
    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <select class="form-control" >
          <option>Seleccione por:</option>
          <option>Vendedor</option>
          <option>Cliente</option>
          <option>Pedido</option>
          <option>Estado</option>
          </select>
        </div>
        <div class="form-group">
           <select class="form-control" >
          <option>12345678</option>
          <option></option>
          <option></option>
          <option></option>
          <option></option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
         <div class='input-group date' id='datetimepicker-1'>
          <input type='text' class="form-control" placeholder="Desde" />
          <span class="input-group-addon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
          </span>
        </div>
      </div>
      <div class="form-group">
       <div class='input-group date' id='datetimepicker-2'>
        <input type='text' class="form-control" placeholder="Hasta" />
        <span class="input-group-addon">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </span>
      </div>
    </div>
  </div>
</div> 
</form>

<h2 class="subti">Paso 2. Seleccione el Pedido a Aprobar o Rechazar</h2>
<br/>
<div class="box">
  <table class="table table-striped table-prod tb9" role="table">
    <thead role="rowgroup">
      <tr role="row">
        <th role="columnheader">Fecha</th>
        <th role="columnheader">P. Interno</th>
        <th role="columnheader">P.Siesa</th>
        <th role="columnheader">Razón social</th>
        <th role="columnheader">Nit</th>
        <th role="columnheader">T. Pedido</th>
        <th role="columnheader">Estado</th>
        <th role="columnheader"></th>
      </tr>
    </thead>
    <tbody role="rowgroup">
      <tr role="row" class="rojo">
        <td role="cell">14/11/2018</td>
        <td role="cell">112390768</td>
        <td role="cell">112390768</td>
        <td role="cell">SaludMarket</td>
        <td role="cell">900.065.596-5</td>
        <td role="cell">$17.896.00</td>
        <td role="cell">Rechazado</td>
         <td role="cell">
            <button type="button"s class="gris-o btn btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver detalle</button>
         </td>
      </tr>

      <tr role="row" class="verde">
        <td role="cell">14/11/2018</td>
        <td role="cell">112390768</td>
        <td role="cell">112390768</td>
        <td role="cell">SaludMarket</td>
        <td role="cell">900.065.596-5</td>
        <td role="cell">$17.896.00</td>
        <td role="cell">Aprobado</td>
        <td role="cell">
            <button type="button"s class="gris-o btn btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver detalle</button>
         </td>
      </tr>

      <tr role="row" class="rojo">
        <td role="cell">14/11/2018</td>
        <td role="cell">112390768</td>
        <td role="cell">112390768</td>
        <td role="cell">SaludMarket</td>
        <td role="cell">900.065.596-5</td>
        <td role="cell">$17.896.00</td>
        <td role="cell">Rechazado</td>
        <td role="cell">
            <button type="button"s class="gris-o btn btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver detalle</button>
         </td>
      </tr>
      
    </tbody>
  </table>



</div>
</div> <!-- fin container-->


