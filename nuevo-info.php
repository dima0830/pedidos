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
	<br>
 <form action="https://ortopedicosfuturo.com/employee/orders/save" method="post" enctype="multipart/form-data" id="formID">
 	<h1 class="titulo">Mis Tiendas</h1>
  <div class="form-group row box">
    <label class="col-sm-3 col-form-label">Código de la Tienda Comerssia:</label>
    <div class="col-sm-5">
        <input type="text"class="form-control" value="">
    </div>
    <div class="col-sm-5 help">
    </div>
  </div>

  <div class="form-group row box">
    <label class="col-sm-3 col-form-label">Centro de Operación SIESA:</label>
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
    <label class="col-sm-3 col-form-label">Código de la Tienda SIESA:</label>
    <div class="col-sm-5">
        <input type="text"class="form-control" value="">
    </div>
    <div class="col-sm-5 help">
    </div>
  </div>

 <div class="form-group row box">
    <label class="col-sm-3 col-form-label">Bodega SIESA:</label>
    <div class="col-sm-5">
        <input type="text"class="form-control" value="">
    </div>
    <div class="col-sm-5 help">
    </div>
  </div>

 <div class="form-group row box">
    <label class="col-sm-3 col-form-label">Indicador de Admite Pedido:</label>
    <div class="col-sm-5">
        <input type="text"class="form-control" value="">
    </div>
    <div class="col-sm-5 help">
    </div>
  </div>


  <div class="form-group row box">
  	<label class="col-sm-3 col-form-label" >Fecha:</label>
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
  		</div>
  	</div>
  </div>
</form>
<br>
<div class="box">

  <div class="row">

      
    <div class="col align-self-end text-right">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
  <input type="hidden" name="customer_id" id="customer_id" value="">
  <input type="hidden" name="order_id" id="order_id" value="">
</div>






</div> <!-- fin container-->

