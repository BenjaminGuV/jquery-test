<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>the Obligatory Slider</title>
	<style type="text/css">
		body{
			width: 490px;
			margin: 100px auto 0;
		}
		*{ margin: 0; padding: 0px; }
	</style>
	<link rel="stylesheet" type="text/css" href="slider.css">
</head>
<body>
	
	<div class="slider">
		<ul>
			<li><img src="img/imagen01.gif" alt="imagen"></li>
			<li><img src="img/imagen02.gif" alt="imagen"></li>
			<li><img src="img/imagen03.gif" alt="imagen"></li>
			<li><img src="img/imagen04.gif" alt="imagen"></li>
		</ul>
	</div>
	<div id="slider-nav">
		<button data-dir="prev">Previous</button>
		<button data-dir="next">Next</button>
	</div>

	
<!---->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript" src="slider.js"></script>
	<script type="text/javascript">

		( function() {
			var container = $('div.slider').css( 'overflow', 'hidden' ).children('ul');

			var slider = new Slider( container, $('#slider-nav') );
			slider.nav.find('button').on( 'click', function() {
				slider.setCurrent( $(this).data('dir') );
				slider.transition();
			});
		})();
		
		
			
	</script>
<!---->
</body>
</html>