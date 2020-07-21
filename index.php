<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Modulo Pedidos</title>

    <!-- Bootstrap -->
    <!--<link href="assets/css/animate.css" rel="stylesheet">-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="assets/css/select2.css" rel="stylesheet">
    <link href="assets/css/select2-bootstrap4.css" rel="stylesheet">
    <link href="assets/css/mainultimo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include("header.php"); ?>
    <?php include(CURRENT_FILE); ?>
    <?php include("footer.php"); ?>

    <!-- Modal -->
<div class="modal fade" id="usuariosis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header m-titu">
        <h4 class="modal-title" id="myModalLabel">USUARIO SISTEMA</h4>
      </div>
      <div class="modal-body">

        <form class="form-horizontal form-b">

          <div class="form-group">
            <div class="col-sm-6">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre">
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Cargo">
            </div>
          </div>
          <p class="titulo2">Perfil:</p>

          <div class="form-group">
            <div class="col-sm-5">
              <label>Vendedor:</label>
              <label class="switch2">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>

            <div class="col-sm-5 col-sm-offset-1">
            <label>Aprobador:</label>
              <label class="switch2">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-5">
              <label>Cartera:</label>
              <label class="switch2">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>

            <div class="col-sm-5 col-sm-offset-1">
            <label>Gte General:</label>
              <label class="switch2">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>

           <div class="form-group">
            <div class="col-sm-5">
              <label>Dir. Operat:</label>
              <label class="switch2">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>

            <div class="col-sm-5 col-sm-offset-1">
            <label>Empleado:</label>
              <label class="switch2">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>

           <div class="form-group">
            <div class="col-sm-5">
              <label>Dir. R. Humenos:</label>
              <label class="switch2">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>

          <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Vendedor: </label>
            <div class="col-sm-4">
              <select class="form-control">
                <option>Activo</option>
                <option>Inactivo</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12" style="text-align: center;">
            <button type="submit" class="btn btn-lg bor-azul esp">Aceptar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="up-clientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header m-titu">
        <h4 class="modal-title" id="myModalLabel">CLIENTES</h4>
      </div>
      <div class="modal-body">
        <form class="form-cli">  
          <div class="row">
            <div class="col-sm-6">
            <div class="row bloq">
                <div class="col-sm-4 control-label">
                <label>Sucursal:</label></div>
                <div class="col-sm-8">
                  <input class="form-control" >
                </div>
              </div>
            </div>
            <div class="col-sm-6">
            <div class="row bloq">
                <div class="col-sm-4 control-label">
                <label>Teléfono:</label></div>
                <div class="col-sm-8">
                  <input class="form-control">
                </div>
              </div>
            </div>
          </div> 

          <div class="row">
            <div class="col-sm-6">
            <div class="row bloq">
                <div class="col-sm-4 control-label">
                <label>Razón Social:</label></div>
                <div class="col-sm-8">
                  <input class="form-control" >
                </div>
              </div>
            </div>
            <div class="col-sm-6">
            <div class="row bloq">
                <div class="col-sm-4 control-label">
                <label>Correo:</label></div>
                <div class="col-sm-8">
                  <input class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
            <div class="row bloq">
                <div class="col-sm-4 ">
                <label>Contacto:</label></div>
                <div class="col-sm-8">
                  <input class="form-control" >
                </div>
              </div>
            </div>
            <div class="col-sm-6">
            <div class="row bloq">
                <div class="col-sm-4 control-label">
                <label>Dir. Despacho</label></div>
                <div class="col-sm-8">
                  <input class="form-control">
                </div>
              </div>
            </div>
          </div>  
        
        <h1 class="titulo">Condiciones de pago</h1>
        <p class="text-int">Código lista de precio:</p>

        <ul class="box-list">
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

        <div class="" style="text-align: center;">
            <button type="submit" class="btn btn-lg bor-azul esp">Aceptar</button>
          </div>
      
    </form>
      </div>
    </div>
  </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
