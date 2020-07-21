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
  <h1 class="titulo">Aprobación y generación:</h1>
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
  <table class="table table-striped table-prod tb6" role="table">
    <thead role="rowgroup">
      <tr role="row">
        <th role="columnheader">Fecha</th>
        <th role="columnheader">Pedido</th>
        <th role="columnheader">Razón social</th>
        <th role="columnheader">Nit</th>
        <th role="columnheader">T. Pedido</th>
        <th role="columnheader"></th>
      </tr>
    </thead>
    <tbody role="rowgroup">
      <tr role="row">
        <td role="cell">Lorem Ipsum</td>
        <td role="cell">Lorem Ipsum</td>
        <td role="cell">Medias 50MG</td>
        <td role="cell">900.065.596-5</td>
        <td role="cell">$17.896.00</td>
        <td role="cell">
          <button type="button" data-toggle="modal" data-target="#detalle-ped" class="gris-o btn btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver detalle</button>
        </td>
      </tr>

      <tr role="row">
        <td role="cell">Lorem Ipsum</td>
        <td role="cell">Lorem Ipsum</td>
        <td role="cell">Medias 50MG</td>
        <td role="cell">900.065.596-5</td>
        <td role="cell">$17.896.00</td>
        <td role="cell">
          <button type="button" data-toggle="modal" data-target="#detalle-ped" class="gris-o btn btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver detalle</button>
        </td>
      </tr>

      <tr role="row">
        <td role="cell">Lorem Ipsum</td>
        <td role="cell">Lorem Ipsum</td>
        <td role="cell">Medias 50MG</td>
        <td role="cell">900.065.596-5</td>
        <td role="cell">$17.896.00</td>
        <td role="cell">
          <button type="button" data-toggle="modal" data-target="#detalle-ped" class="gris-o btn btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver detalle</button>
        </td>
      </tr>
      
    </tbody>
  </table>



</div>
</div> <!-- fin container-->

<!-- Modal -->
<div class="modal fade" id="detalle-ped" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header m-titu">
        <h4 class="modal-title" id="myModalLabel">DETALLE PEDIDO INTERNO</h4>
      </div>
      <div class="modal-body">
      <br/>
      <div class="table-responsive">
        <table class="table table-striped table-prod tb7 box" role="table">
    <thead role="rowgroup">
      <tr role="row">
        <th role="columnheader">Referencia</th>
        <th role="columnheader">Código de barras</th>
        <th role="columnheader">Descripción</th>
        <th role="columnheader">UM</th>
        <th role="columnheader">Color</th>
        <th role="columnheader">Talla</th>
        <th role="columnheader">Precio</th>
        <th role="columnheader">Lista</th>
        <th role="columnheader">Cantidad</th>
        <th role="columnheader">%Dcto</th>
        <th role="columnheader">Total</th>
      </tr>
    </thead>
    <tbody role="rowgroup">
      <tr role="row">
        <td role="cell">12390768</td>
        <td role="cell">12345678910111213</td>
        <td role="cell">Medias 50 MG</td>
        <td role="cell">6</td>
        <td role="cell">Beige</td>
        <td role="cell">6 - 7 </td>
        <td role="cell">$39.900</td>
        <td role="cell">12</td>
        <td role="cell">12</td>
        <td role="cell">12%</td>
         <td role="cell">$421.344</td>
      </tr>

      <tr role="row">
        <td role="cell">12390768</td>
        <td role="cell">12345678910111213</td>
        <td role="cell">Medias 50 MG</td>
        <td role="cell">6</td>
        <td role="cell">Beige</td>
        <td role="cell">6 - 7 </td>
        <td role="cell">$39.900</td>
        <td role="cell">12</td>
        <td role="cell">12</td>
        <td role="cell">12%</td>
         <td role="cell">$421.344</td>
      </tr>

      <tr role="row">
        <td role="cell">12390768</td>
        <td role="cell">12345678910111213</td>
        <td role="cell">Medias 50 MG</td>
        <td role="cell">6</td>
        <td role="cell">Beige</td>
        <td role="cell">6 - 7 </td>
        <td role="cell">$39.900</td>
        <td role="cell">12</td>
        <td role="cell">12</td>
        <td role="cell">12%</td>
         <td role="cell">$421.344</td>
      </tr>
      
    </tbody>
  </table>
  </div>
  <div class="row">
    <div class="col-sm-2 col-sm-offset-4"><a type="button" data-toggle="modal" data-target="#rechazar" class="btn bor-azul btn-lg" >Rechazar</a></div>
    <div class="col-sm-2"><a type="button" data-toggle="modal" data-target="#aprobar"  class="btn azul btn-lg" style="border-radius: 0;">Aprobar </a></div>
  </div>
      </div>
    </div>
  </div>
</div>

<!--=============-Modal-->

  <div class="modal fade" id="rechazar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header m-titu">
          <h4 class="modal-title" id="myModalLabel">DETALLE PEDIDO INTERNO</h4>
        </div>
        <div class="modal-body">
          <br/>
          <p class="tex-up">
            Usted esta rechazando este pedido:
          </p> 
          
            <div class="row">
              <div class="col-md-3 col-sm-offset-4">
                <select class="form-control"><option>Motivo</option></select>
              </div>
            </div>
            <div class="box">
              <textarea class="form-control" rows="3" style="border-radius: 0;"></textarea>
            </div>
            <div class="row box">
            <div class="col-sm-2 col-sm-offset-5">
              <a class="btn bor-azul btn-lg">OK</a>
            </div>
          </div>
          <br><br>
        </div>
      </div>
    </div>
  </div>


<!--=============-Modal-->

  <div class="modal fade" id="aprobar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-header m-titu">
          <h4 class="modal-title" id="myModalLabel">MENSAJE</h4>
        </div>
        <div class="modal-body">
          <br/>
          <p class="tex-up">
            Ingrese número de pedido Siesa
          </p> 
          
            <div class="row">
              <div class="col-md-4 col-sm-offset-4">
                <input type="text" class="form-control" name="">
              </div>
            </div>
           
            <div class="row box">
            <div class="col-sm-2 col-sm-offset-5">
              <a type="button" data-toggle="modal" data-target="#ok-aprobar" class="btn bor-azul btn-lg">OK</a>
            </div>
          </div>
          <br><br>
        </div>
      </div>
    </div>
  </div>

<!--=============-Modal-->

  <div class="modal fade" id="ok-aprobar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-header m-titu">
          <h4 class="modal-title" id="myModalLabel">DETALLE PEDIDO 12390768</h4>
        </div>
         <div class="modal-body">
      <br/>
      <div class="table-responsive">
        <table class="table table-striped table-prod tb8 box" role="table">
    <thead role="rowgroup">
      <tr role="row">
        <th role="columnheader">Referencia</th>
        <th role="columnheader">Descripción</th>
        <th role="columnheader">UM</th>
        <th role="columnheader">Color</th>
        <th role="columnheader">Talla</th>
        <th role="columnheader">Vr. Unit</th>
        <th role="columnheader">Lista</th>
        <th role="columnheader">Cantidad</th>
        <th role="columnheader">%Dcto</th>
        <th role="columnheader">Total</th>
        <th role="columnheader">Tot. Gp</th>
        <th role="columnheader">%Gp</th>
        <th role="columnheader">T. Desc</th>
        <th role="columnheader">Gp</th>
        <th role="columnheader">%Gp</th>
      </tr>
    </thead>
    <tbody role="rowgroup">
      <tr role="row">
        <td role="cell">12390768</td>
        <td role="cell">Medias 50 MG</td>
        <td role="cell">6</td>
        <td role="cell">Beige</td>
        <td role="cell">6 - 7 </td>
        <td role="cell">$39.900</td>
        <td role="cell">12</td>
        <td role="cell">12</td>
        <td role="cell">12%</td>
        <td role="cell">$421.344</td>
        <td role="cell">$50.976</td>
        <td role="cell">3</td>
        <td role="cell">$39.900</td>
        <td role="cell">$50.976</td>
        <td role="cell">8</td>
      </tr>

      <tr role="row">
        <td role="cell">12390768</td>
        <td role="cell">Medias 50 MG</td>
        <td role="cell">6</td>
        <td role="cell">Beige</td>
        <td role="cell">6 - 7 </td>
        <td role="cell">$39.900</td>
        <td role="cell">12</td>
        <td role="cell">12</td>
        <td role="cell">12%</td>
        <td role="cell">$421.344</td>
        <td role="cell">$50.976</td>
        <td role="cell">3</td>
        <td role="cell">$39.900</td>
        <td role="cell">$50.976</td>
        <td role="cell">8</td>
      </tr>

      <tr role="row">
        <td role="cell">12390768</td>
        <td role="cell">Medias 50 MG</td>
        <td role="cell">6</td>
        <td role="cell">Beige</td>
        <td role="cell">6 - 7 </td>
        <td role="cell">$39.900</td>
        <td role="cell">12</td>
        <td role="cell">12</td>
        <td role="cell">12%</td>
        <td role="cell">$421.344</td>
        <td role="cell">$50.976</td>
        <td role="cell">3</td>
        <td role="cell">$39.900</td>
        <td role="cell">$50.976</td>
        <td role="cell">8</td>
      </tr>

      
      
    </tbody>
  </table>
  </div>
  <div class="row">
    <div class="col-sm-2 col-sm-offset-4"><a class="btn bor-azul btn-lg" >Rechazar</a></div>
    <div class="col-sm-2"><a class="btn azul btn-lg" style="border-radius: 0;">Autorizar</a></div>
  </div>
      </div>
      </div>
    </div>
  </div>