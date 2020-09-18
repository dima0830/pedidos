$(document).ready(main);

var contador = 1;

function main () {
  $('.menu_bar').click(function(){
    if (contador == 1) {
      $('nav').animate({
        left: '0'
      });
      contador = 0;
    } else {
      contador = 1;
      $('nav').animate({
        left: '-100%'
      });
    }
  });

  // Mostramos y ocultamos submenus
  $('.submenu').click(function(){
    $(this).children('.children').slideToggle();
  });
}

$(function() {
  var actualrow = '';
  // button cargar entrada
  $(".trAddButton").click(function() {
    //get id of row and set as actual row
    actualrow = $(this).data('id');
    $('#addModal').modal('show');
  })

  // button save changes on modal
  $("#addRow").click(function() {
    //get input value
    let cantidad = $("#cantidad").val();
    //read actual row
    $("#"+actualrow).after(`
     <tr>
     <th>#OC SIESA</th>
     <th>Tienda</th>
     <th>Proveedor</th>
     <th>Fecha de Entrega</th>
     <th>Archivo</th>
     <th>${cantidad}</th>
     <th>Estado</th>
     <th>Enviar FTP</th>
     <th>Acciones</th>
     <th>Eliminar</th>
     <th>Procesar</th>
     </tr>
     `);
    $('#addModal').modal('hide');

  })
});

