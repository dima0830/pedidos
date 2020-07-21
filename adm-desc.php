<hr class="hrcolor">
<div class="menu">
  <div class="container">
   <header>
    <div class="menu_bar2">
      <a href="#" class="bt-menu"><i class="fa fa-th-list" aria-hidden="true"></i> Administración</a>
    </div>
    <nav>
      <ul>
        <li><a href="#" class="grand">Administración</a></li>
        <li class="flt">
          <ul>
           <li class="submenu">
            <a href="#" class="line">Carga Masiva <i class="fa fa-angle-double-down" aria-hidden="true"></i> </a>
            <ul class="children">
              <li>
                <a href="#" type="button" data-toggle="modal" data-target="#usuariosis">Usuarios sistema</a>
              </li>
              <li>
                <a href="#" type="button" data-toggle="modal" data-target="#up-clientes">Clientes</a>
              </li>
              <li>
                <a href="adm-prod">Productos</a>
              </li>
              <li>
                <a href="adm-list">Lista de precios</a>
              </li>
              <li>
                <a href="adm-desc">Descuentos por producto</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>       
    </ul>
  </nav>
</header>
</div>
</div>
<!-- menu administración -->

<div class="container">
  <h1 class="titulo">Cargar archivos masivamente</h1>

  <div class="row box">
    <div class="col-md-6">
      <form >
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
          <select class="form-control input-w">
            <option>Productos</option>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
          </select>
        </div>
        </div>
        <div class="col-md-6">
          <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>  
                    </span>
                </div>
        </div>
      </div>
      </form>
    </div>
</div>

<div class="box">
  <table class="table table-striped table-prod tb3" role="table">
    <thead role="rowgroup">
      <tr role="row">
        <th role="columnheader">Referencia</th>
        <th role="columnheader">Código de barras</th>
        <th role="columnheader">Descuento max.</th>
        <th role="columnheader">Fecha Inicio</th>
        <th role="columnheader">Fecha final</th>
      </tr>
    </thead>
    <tbody role="rowgroup">
      <tr role="row">
        <td role="cell">12390768</td>
        <td role="cell">12345678910111213</td>
        <td role="cell">25%</td>
        <td role="cell"><input type="date" name="" class="inpu-ta"></td>
        <td role="cell"><input type="date" name="" class="inpu-ta"></td>
      </tr>
     <tr role="row">
        <td role="cell">12390768</td>
        <td role="cell">12345678910111213</td>
        <td role="cell">25%</td>
        <td role="cell"><input type="date" name="" class="inpu-ta"></td>
        <td role="cell"><input type="date" name="" class="inpu-ta"></td>
      </tr>
     <tr role="row">
        <td role="cell">12390768</td>
        <td role="cell">12345678910111213</td>
        <td role="cell">25%</td>
        <td role="cell"><input type="date" name="" class="inpu-ta"></td>
        <td role="cell"><input type="date" name="" class="inpu-ta"></td>
      </tr>
    </tbody>
  </table>
</div>


</div>