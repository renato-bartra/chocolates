$(".btn-historial").click( function(){
	$(".info-usuario").children().remove();
	if ($(".historial-pedidos h1").length == 0) {
		$(".historial-pedidos").append(
			'<h1 class="fm-300 mayusculas linea-separador">Historial de pedidos</h1>'+
			'<div class="tabla-historial">'+
				'<table id="table_id" class="display responsive nowrap tablas" width="100%">'+
				    '<thead>'+
				        '<tr>'+
				            '<th style="width: 15%;">ID Pedido</th>'+
				            '<th style="width: 15%;">Fecha</th>'+
				            '<th style="width: 15%;">Metodo Pago</th>'+
				            '<th style="width: 15%;">Estado</th>'+
				            '<th style="width: 15%;">Factura</th>'+
				            '<th style="width: 15%;">Total</th>'+
				            '<th style="width: 10%;">Acciones</th>'+
				        '</tr>'+
				    '</thead>'+
				    '<tbody class="lista-historial">'+
				    '</tbody>'+
				'</table>'+
			'</div>'
		);
		a=1;
		for (var i = 0; i < 5; i++){
			$(".lista-historial").append(
				        '<tr>'+
				            '<td>100000'+a+'</td>'+
				            '<td>10/04/2020</td>'+
				            '<td>Deposito Bancario</td>'+
				            '<td class="centrar-texto"><button class="btn-verde">Aceptado</button></td>'+
				            '<td class="centrar-texto"><button class="boton button-pdf"><i class="far fa-file-pdf"></i></button></td>'+
				            '<td>S/45.00</td>'+
				            '<td class="centrar-texto">'+
				            	'<div>'+
				            		'<button class="boton btn-rojo"><i class="fas fa-times"></i></button>'+
				            		'<button class="boton btn-azul"><i class="far fa-eye"></i></button>'+
				            	'</div>'+
				            '</td>'+
				        '</tr>'
			)
			a++;
		};
		$('#table_id').DataTable({
			"language":{
				"sProcessing":     "Procesando...",
			    "sLengthMenu":     "Mostrar _MENU_ registros",
			    "sZeroRecords":    "No se encontraron resultados",
			    "sEmptyTable":     "Ningún dato disponible en esta tabla",
			    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			    "sInfoPostFix":    "",
			    "sSearch":         "Buscar:",
			    "sUrl":            "",
			    "sInfoThousands":  ",",
			    "sLoadingRecords": "Cargando...",
			    "oPaginate": {
			        "sFirst":  	 "Primero",
			        "sLast":     "Último",
			        "sNext":     "Siguiente",
			        "sPrevious": "Anterior"
			    },
			    "oAria": {
			        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			    }
			},
			"lengthChange": false
		});
	}
});

$(".btn-conf-user").click( function(){
	$(".historial-pedidos").children().remove();
	if ($(".info-usuario h1").length == 0) {
		$(".info-usuario").append(
			'<h1 class="fm-300 mayusculas linea-separador">Datos del usuario</h1>'+
			'<p class="p-compra-pro-black">Si no decea realizar ningun cambio de sus datos o de su contaseña, por favor, no precionar el boton guardar cambios.</p>'+
			'<div class="formulario">'+
				'<form role="form" method="post" enctype="multipart/form-data">'+
					'<div class="zona-nosotros">'+
						'<div>'+
					
							'<!-- Entrada del nombre -->'+
							'<span class="inf-span">Ingrese su nombre</span>'+
							'<div class="zona-inputs">'+
								'<span class="icono-input"><i class="fas fa-user-edit"></i></span>'+
								'<input class="texto-input" placeholder="Ingrese nombre" required type="text" value="Sharon Julvic">'+
							'</div>'+

							'<!-- Entrada para apellido -->'+
							'<span class="inf-span">Ingrese su apellido</span>'+
							'<div class="zona-inputs">'+
								'<span class="icono-input"><i class="fas fa-user-edit"></i></span>'+
								'<input class="texto-input" placeholder="Ingrese apellido" required type="text" value="Pinedo Arce">'+
							'</div>'+

							'<!-- Entrada del Tratamiento -->'+
							'<span class="inf-span">¿Como decea que lo traten?</span>'+
							'<div class="zona-checks">'+
								'<label class="checks-inputs">'+
									'<input type="radio" value="0" name="nuevoSexo"> Hombre &nbsp;&nbsp;'+
									'<input type="radio" value="1" name="nuevoSexo" checked> Mujer'+
								'</label>'+
							'</div>'+

							'<!-- Entrada del correo electronico -->'+
							'<span class="inf-span">Su correo electronico</span>'+
							'<div class="zona-inputs">'+
								'<span class="icono-input"><i class="fas fa-at"></i></span>'+
								'<input class="texto-input" placeholder="Ingrese correo electronico" disabled type="text" value="brb1594@gmail.com">'+
							'</div>'+

							'<!-- Entrada del Celular -->'+
							'<span class="inf-span">Su celular</span>'+
							'<div class="zona-inputs">'+
								'<span class="icono-input"><i class="fas fa-mobile-alt"></i></span>'+
								'<input type="text" class="texto-input mascara-celular" placeholder="Ingrese celular" required >'+
							'</div>'+
						'</div>'+
					
						'<div>'+
							'<!-- Entrada del fecha nacimiento -->'+
							'<span class="inf-span">Fecha de nacimiento</span>'+
							'<div class="zona-inputs">'+
								'<span class="icono-input"><i class="fas fa-baby-carriage"></i></span>'+
								'<input type="text" id="fecha-valor" class="texto-input escoje-fecha mascara-fecha" placeholder="aaaa-mm-dd" required>'+
							'</div>'+

							'<!-- Entrada para contraseña actual -->'+
							'<span class="inf-span">Ingrese su contraseña actual *</span>'+
							'<div class="zona-inputs">'+
								'<span class="icono-input"><i class="fas fa-key"></i></span>'+
								'<input class="texto-input" placeholder="Ingrese contraseña actual" required type="text">'+
							'</div>'+

							'<!-- Entrada para contraseña nueva -->'+
							'<span class="inf-span">Ingrese su nueva contraseña</span>'+
							'<div class="zona-inputs">'+
								'<span class="icono-input"><i class="fas fa-unlock-alt"></i></span>'+
								'<input class="texto-input" placeholder="Ingrese contraseña nueva" required type="text">'+
							'</div>'+

							'<!-- Entrada para confirmar contraseña nueva -->'+
							'<span class="inf-span">Confirme su sontraseña</span>'+
							'<div class="zona-inputs">'+
								'<span class="icono-input"><i class="fas fa-unlock-alt"></i></span>'+
								'<input class="texto-input" placeholder="confirme la contraseña nueva" required type="text">'+
							'</div>'+

							'<!-- Zona botones de piecera -->'+
							'<div class="separador-botones texto-derecha">'+
								'<button type="submit" class="boton btn-verde">Guardar Cambios &nbsp;<span class="far fa-check-circle"></span></button>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</form>'+
			'</div>'
		);
		/*DatePicker*/
		$( ".escoje-fecha" ).datepicker({
		        closeText: 'Cerrar',
		        prevText: '<Ant',
		        nextText: 'Sig>',
		        currentText: 'Hoy',
		        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
		        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
		        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
		        weekHeader: 'Sm',
		        dateFormat: 'yy-mm-dd',
		        firstDay: 1,
		        isRTL: false,
		        showMonthAfterYear: false,
		        yearSuffix: ''
		    });
		/*Inputmarsk*/
		$(".mascara-fecha").inputmask("9999-99-99",{"clearIncomplete": true });
  		$(".mascara-celular").inputmask("999-999-999",{ "clearIncomplete": true });
  		
	}
});
