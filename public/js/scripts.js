$(function() {
	// global Var
	var actSymbol = "X";

	/**
	* click Button
	*/
	$(".btnJuego").on("click", function(e) {
		e.preventDefault();
		let itemX = $(this).attr('data-itemx');
		let itemY = $(this).attr('data-itemy');
		// guardar Jugada
		guardarJugada(itemX, itemY);

	});
   	/**
	* guardar Jugada
   	*/
   	function guardarJugada(itemX, itemY) {
   		// ajax
	   	$.ajax({
		    type : 'GET',
		    dataType : 'json',
		    url : '/guardarJugada',
		    data : { itemX : itemX, itemY: itemY, itemSymbol: actSymbol },
		    success : function(json) {
		    	// remove Button
		        $("#item_"+itemX+"_"+itemY).html(actSymbol);
		        // set Actual Symbol
		        actSymbol = (actSymbol == "Y") ? "O" : "X";
		    },
		    error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
		});
	}
});