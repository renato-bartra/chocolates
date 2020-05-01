$(".numero").keydown(function(event) {
	if(event.shiftKey)
	{
	    event.preventDefault();
	}

	if (event.keyCode == 46 || event.keyCode == 8)    {
	}
	else {
	    if (event.keyCode < 95) {
	        if (event.keyCode < 48 || event.keyCode > 57) {
	            event.preventDefault();
	        }
	    } 
	    else {
	        if (event.keyCode < 96 || event.keyCode > 105) {
	            event.preventDefault();
	        }
	    }
	  }
});

$("#nuevoMetodoContacto").change(function(){
	var metodoContacto = $(this).val();
	if (metodoContacto == "compra" || metodoContacto == "vende") {

		if ($("#ingresaCantidadVC").length == 0) {
			$(".metodo-contacto").append(
					'<!-- Ingresar Camtidad -->'+
					'<label for="ingresaCantidadVC">Cantidad:</label>'+
					'<input type="number" id="ingresaCantidadVC" name="ingresaCantidadVC" class="numero">'
				)
		}
	}else{
		$(".metodo-contacto").children().remove();
	}
})