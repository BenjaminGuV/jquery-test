<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Custum Events</title>

</head>
<body>

	<h1>Hi there</h1>
	
<!---->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript">

		(function( $ ){
			var o = $( {} );

			$.each({
				trigger: 'publish',
				on: 'subscribe',
				off: 'unsubscribe'
			},function( key, val ){
				jQuery[val] = function(){
					o[key].apply( o, arguments );
				};
			});

		})(jQuery);

		$.getJSON('http://search.twitter.com/search.json?q=dogs&callback=?', function( results ){
			$.publish( 'twitter/results', results );
		});

		$.subscribe( 'twitter/results', function( e, results ) {
			$('body').html(
				$.map( results.results, function( obj, index ){
					return '<li>' + obj.text + '</li>';
				}).join( '' )
			);
		});

		
	</script>
<!---->
</body>
</html>