( function(){

	var divRes = $('#cambiaDestino');
	var imgCont = divRes.find( '.destinoImg' );
	var textCont = divRes.find( '.destinoTxt' );
	var cmp = $( 'img.nuevo' );
	cmp.hide();

	

	/*.change( function(){
		console.log( $(this) );
		this.hide()
			.one( 'load', function(){
				$(this).fadeIn();
			} )
			.attr('src')
			.each( function(){
				if( this.complete ) $(this).trigger( 'load' );
				console.log('completo');
			});

	});*/

	/*cmp.onImagesLoad( function($selector){
		alert("Ya cargo");
		this.fadeIn( 500 );
	});*/

	function ajaxCall( nuevo ){
		$.ajax({
			type: "POST",
			timeout: 1000,
			data: "destino=" + nuevo,
			url: "lista_destino.php",
			success: function(msj){
				var myMsj = $('<div />').html( msj );
				var texto = myMsj.find('.destinoTxt').children();
				var imagen = myMsj.find('.destinoImg').children();

				
				textCont.html( texto );
				imagen.css( { "opacity": 0, left: "360px", "position": "absolute" } );
				//console.log( imagen );
				//imgCont.html( imagen );
				//imgCont.html( imagen.delay(500).animate({ "opacity": 1, left: "0px" }, 500 ) );
				imgCont.html(
					imagen.onImagesLoad( function($selector){
						this.animate({ "opacity": 1, left: "0px" }, 500 );
						console.log( "ya cargue" );
					})
				);

			},

			error: function( request, error ){
				console.log("error");
			}
		});
	}

	function msjFail(  ){
		setTimeout( function(){
			console.log("esta tardando mucho, ¿no?");
		}, 1500);
	}

	
	$('.dia').click( function() {
		var nuevo = $(this).attr( 'id' );

		//http://mexicocarrental.com.mx/pruebas/ABCmadre/img/loaddestinos.gif
		var imgLoading = "http://mexicocarrental.com.mx/pruebas/ABCmadre/img/loaddestinos.gif";
		var loading = $('<img />').attr( "src", imgLoading ).addClass('temporalLoad');
		loading.css( { "position": "absolute", "margin": "-50px 0px 0px -50px", "left": "50%", "top": "50%", "height": "100px", "width": "100px", "opacity": "1" } );
		//console.log( loading );
		imgCont.html( loading );
		
		//ajaxCall( nuevo );
		//smsjFail();

		$.when( ajaxCall(nuevo), msjFail() )
			.then( function(){
				console.log("bien");
			})
			.fail( function() {
				console.log("mal");
			});

	});
})();