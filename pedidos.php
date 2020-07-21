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
  <div class="row box">
    <div class="col-md-6">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-xs-4 lbl">Nit:</label>
          <div class="col-xs-7">
            <input type="" class="form-control">
          </div>
          <div class="col-xs-1 ques">
            <a href="">
              <i class="fa fa-question-circle-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="form-group">
          <label class="col-xs-4 lbl">Razón Social:</label>
          <div class="col-xs-7">
            <input type="" class="form-control">
          </div>
          <div class="col-xs-1 ques">
            <a href="">
              <i class="fa fa-question-circle-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="box-pedidos">
    <h1 class="titulo">Información del tercero:</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="row espc2">
          <div class="col-xs-4">
            <span class="tip-t">Sucursal:</span>
          </div>
          <div class="col-xs-7" style="padding: 0;">
            <select class="form-control">
              <option>Sucursal</option>
            </select>
          </div>
        </div>
        <div class="row espc2">
          <div class="col-xs-4">
            <span class="tip-t">Ciudad de entrega:</span>
          </div>
          <div class="col-xs-7">
            <p>Villavicencio</p>
          </div>
        </div>
        <div class="row espc2">
          <div class="col-xs-4">
            <span class="tip-t">Dirección entrega:</span>
          </div>
          <div class="col-xs-7">
            <p>Cra. 19 D # 35A-21</p>
          </div>
        </div>
        <div class="row espc2">
          <div class="col-xs-4">
            <span class="tip-t">Contacto: </span>
          </div>
          <div class="col-xs-7">
            <p>Arley Lopez</p>
          </div>
        </div>
      </div>

      <div class="col-md-5 col-md-offset-1">
        <div class="row espc2">
          <div class="col-xs-4">
            <span class="tip-t">Teléfono: </span>
          </div>
          <div class="col-xs-7">
            <p>2178860</p>
          </div>
        </div>
        <div class="row espc2">
          <div class="col-xs-4">
            <span class="tip-t">Lista precio: </span>
          </div>
          <div class="col-xs-7">
            <p>Mayorista</p>
          </div>
        </div>
        <div class="row espc2">
          <div class="col-xs-4">
            <span class="tip-t">Forma de pago:</span>
          </div>
          <div class="col-xs-7">
            <p>30 Días</p>
          </div>
        </div>
      </div>
    </div>  
  </div>
  <h1 class="titulo">Información del pedido:</h1>

  <form class="form-horizontal">
    <div class="row box">
      <div class="col-md-6"> 
        <div class="form-group">
          <label class="col-sm-4 lbl2">Oc de Cliente:</label>
          <div class="col-sm-8">
            <input type="" name="" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 lbl2">Fecha de entrega:</label>
          <div class="col-sm-8">
            <div class='input-group date' id='datetimepicker11'>
              <input type='text' class="form-control" />
              <span class="input-group-addon">
                <i class="fa fa-calendar" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 lbl2">Cargar Archivo pedido:</label>
          <div class="col-sm-8">
            <input type="file" name="">
          </div>
        </div>

        <ul class="box-list">
          <li><h1 class="titulo2">Cargar archivos masivamente</h1></li>
          <li>
            <a href="#">Nombre del archivo.csv</a>
          </li>
          <li>
            <a href="#">Nombre del archivo.csv</a>
          </li>
          <li>
            <a href="#">Nombre del archivo.csv</a>
          </li>
          <li>
            <a href="#">Nombre del archivo.csv</a>
          </li>
        </ul>
      </div>
    </div>
    <a href="pedid2" class="btn azul flt">Siguiente</a>
    
  </form>
</div> <!-- fin container-->

