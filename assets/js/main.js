$(document).ready(function(){

var contador = 1;
 
function main () {
	$('.menu_bar2').click(function(){
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

$('#datetimepicker11').datetimepicker({
                daysOfWeekDisabled: [0, 6]
            });

$('#datetimepicker-1').datetimepicker({
                daysOfWeekDisabled: [0, 6]
            });

$('#datetimepicker-2').datetimepicker({
                daysOfWeekDisabled: [0, 6]
            });
});